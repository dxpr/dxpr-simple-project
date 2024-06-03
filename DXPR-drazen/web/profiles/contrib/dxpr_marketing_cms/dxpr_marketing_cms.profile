<?php

/**
 * @file
 * Enables modules and site configuration for a dxpr_marketing_cms site installation.
 */

use Drupal\contact\Entity\ContactForm;
use Drupal\Core\Form\FormStateInterface;
use Drupal\dxpr_marketing_cms\Form\ConfigureAPIKeysForm;
use Drupal\dxpr_marketing_cms\Form\ConfigureMultilingualForm;
use Drupal\language\Entity\ConfigurableLanguage;

/**
 * Implements hook_form_FORM_ID_alter() for install_configure_form().
 *
 * Allows the profile to alter the site configuration form.
 */
// function dxpr_marketing_cms_form_install_configure_form_alter(&$form, FormStateInterface $form_state) {
//   $form['#submit'][] = 'dxpr_marketing_cms_form_install_configure_submit';
// }

/**
 * Submission handler to sync the contact.form.feedback recipient.
 */
// function dxpr_marketing_cms_form_install_configure_submit($form, FormStateInterface $form_state) {
//   $site_mail = $form_state->getValue('site_mail');
//   ContactForm::load('feedback')->setRecipients([$site_mail])->trustData()->save();
// }

/**
 * Implements hook_install_tasks().
 */
function dxpr_marketing_cms_install_tasks(&$install_state) {
  $isMultilingual = (
    isset($install_state['dxpr_marketing_cms']['enable_multilingual']) && 
    $install_state['dxpr_marketing_cms']['enable_multilingual']
  );
  $tasks = [
    'dxpr_marketing_cms_multilingual_configuration_form' => [
      'display_name' => t('Multilingual set-up'),
      'display' => TRUE,
      'type' => 'form',
      'function' => ConfigureMultilingualForm::class,
    ],
    'dxpr_marketing_cms_configure_multilingual' => [
      'display_name' => t('Multilingual imports'),
      'display' => $isMultilingual,
      'type' => 'batch',
    ],
    'dxpr_marketing_cms_module_keys' => [
      'display_name' => t('Enter API keys'),
      'type' => 'form',
      'function' => ConfigureAPIKeysForm::class,
    ],
    'dxpr_marketing_cms_module_install' => [
      'display_name' => t('Install demo content'),
      'type' => 'batch',
    ],
  ];

  return $tasks;
}

/**
 * Batch job to configure multilingual components.
 *
 * @param array $install_state
 *   The current install state.
 *
 * @return array
 *   The batch job definition.
 */
function dxpr_marketing_cms_configure_multilingual(array &$install_state) {
  $batch = [];

  // If the multilingual config checkbox were checked.
  if (!empty($install_state['dxpr_marketing_cms']['enable_multilingual'])) {

    // If selected languages are available, add them and fetch translations.
    if (!empty($install_state['dxpr_marketing_cms']['multilingual_languages'])) {
      foreach ($install_state['dxpr_marketing_cms']['multilingual_languages'] as $language_code) {
        $batch['operations'][] = [
          'dxpr_marketing_cms_configure_language_and_fetch_translation',
          [$language_code],
        ];
      }
    }
  }

  return $batch;
}

/**
 * Installs the CMS modules in a batch.
 *
 * @param array $install_state
 *   The install state.
 *
 * @return array
 *   A batch array to execute.
 */
function dxpr_marketing_cms_module_install(array &$install_state) {
  $batch = [];
  $operations = [];
  $modules = [
    'default_content',
    'dxpr_marketing_cms_demo_content',
    'gin_toolbar', // will complain about gin not being admin theme during install-time
  ];

  foreach ($modules as $module) {
    $operations[] = ['dxpr_marketing_cms_install_module_batch', [$module]];
  }
  $operations[] = ['dxpr_marketing_cms_cleanup_batch', ['default_content']];
  $operations[] = ['dxpr_marketing_cms_cleanup_batch', ['dxpr_marketing_cms_demo_content']];

  $batch = [
    'operations' => $operations,
    'title' => t('Installing additional modules'),
    'error_message' => t('The installation has encountered an error.'),
  ];
  return $batch;
}

/**
 * Batch function to add selected langauges then fetch all traslation.
 *
 * @param string|array $language_code
 *   Language code to install and fetch all traslation.
 */
function dxpr_marketing_cms_configure_language_and_fetch_translation($language_code) {
  ConfigurableLanguage::createFromLangcode($language_code)->save();
}

/**
 * Implements callback_batch_operation().
 *
 * Performs batch installation of modules.
 */
function dxpr_marketing_cms_install_module_batch($module, &$context) {
  // CMS Modules are not available yet.
  Drupal::service('module_installer')->install([$module], TRUE);
  $context['results'][] = $module;
  $context['message'] = t('Installed %module_name module.', ['%module_name' => $module]);
}

/**
 * Implements callback_batch_operation().
 */
function dxpr_marketing_cms_cleanup_batch($module, &$context) {
  Drupal::service('module_installer')->uninstall(['default_content'], FALSE);

  // We're doing this here because during hook_install it fails due to demo content
  // loading after installation (when default_content module steps in).
  $query = "SELECT nid FROM {node} WHERE uuid = '564f412f-1a80-4a87-840b-d38edeeed383'";
  if ($nid = Drupal::database()->query($query)->fetchField()) {
    $config = Drupal::configFactory()->getEditable('system.site');
    $config->set('page.front', '/node/' . $nid)->save(TRUE);
  }

  $context['message'] = t('Cleanup.');
}