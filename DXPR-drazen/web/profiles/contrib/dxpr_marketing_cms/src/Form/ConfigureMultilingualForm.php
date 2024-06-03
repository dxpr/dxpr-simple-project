<?php

namespace Drupal\dxpr_marketing_cms\Form;

use Drupal\Core\Extension\InfoParserInterface;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\StringTranslation\TranslationInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\Core\Language\LanguageManager;
use Drupal\Core\Config\ConfigFactoryInterface;
use Drupal\Core\DependencyInjection\ContainerInjectionInterface;
use Drupal\Core\StringTranslation\StringTranslationTrait;

/**
 * Defines form for selecting DXPR Marketing CMS Multilingual configuration options form.
 */
class ConfigureMultilingualForm extends FormBase implements ContainerInjectionInterface {

  use StringTranslationTrait;

  /**
   * The Drupal application root.
   *
   * @var string
   */
  protected $root;

  /**
   * The info parser service.
   *
   * @var \Drupal\Core\Extension\InfoParserInterface
   */
  protected $infoParser;

  /**
   * The form helper.
   *
   * @var \Drupal\dxpr_marketing_cms\AssemblerFormHelper
   */
  protected $formHelper;

  /**
   * The config factory service.
   *
   * @var \Drupal\Core\Config\ConfigFactoryInterface
   */
  protected $configFactory;

  /**
   * Configure Multilingual Form constructor.
   *
   * @param string $root
   *   The Drupal application root.
   * @param \Drupal\Core\Extension\InfoParserInterface $info_parser
   *   The info parser service.
   * @param \Drupal\Core\StringTranslation\TranslationInterface $translator
   *   The string translation service.
   * @param \Drupal\dxpr_marketing_cms\Form\FormHelper $form_helper
   *   The form helper.
   * @param \Drupal\Core\Config\ConfigFactoryInterface $config_factory
   *   The config factory service.
   */
  public function __construct($root, InfoParserInterface $info_parser, TranslationInterface $translator, FormHelper $form_helper, ConfigFactoryInterface $config_factory) {
    $this->root = $root;
    $this->infoParser = $info_parser;
    $this->stringTranslation = $translator;
    $this->formHelper = $form_helper;
    $this->configFactory = $config_factory;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->getParameter('app.root'),
      $container->get('info_parser'),
      $container->get('string_translation'),
      $container->get('dxpr_marketing_cms.form_helper'),
      $container->get('config.factory')
    );
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'dxpr_marketing_cms_multilingual_configuration';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state, array &$install_state = NULL) {
    // Native language list building code taken from core install step
    if (count($install_state['translations']) > 1) {
      $files = $install_state['translations'];
    }
    else {
      $files = [];
    }

    $standard_languages = LanguageManager::getStandardLanguageList();
    $select_options = [];
    $browser_options = [];

    $form['#title'] = 'Choose language';

    // Build a select list with language names in native language for the user
    // to choose from. And build a list of available languages for the browser
    // to select the language default from.
    // Select lists based on all standard languages.
    foreach ($standard_languages as $langcode => $language_names) {
      $select_options[$langcode] = $language_names[1];
    }
    // Add languages based on language files in the translations directory.
    if (count($files)) {
      foreach ($files as $langcode => $uri) {
        $select_options[$langcode] = isset($standard_languages[$langcode]) ? $standard_languages[$langcode][1] : $langcode;
      }
    }
    asort($select_options);

    $default_langcode = $this->configFactory->getEditable('system.site')->get('default_langcode');

    // Save the default language name.
    $default_language_name = $select_options[$default_langcode];

    // Remove the default language from the list of multilingual languages.
    if (isset($select_options[$default_langcode])) {
      unset($select_options[$default_langcode]);
    }

    if (isset($browser_options[$default_langcode])) {
      unset($browser_options[$default_langcode]);
    }

    $form['#title'] = $this->t('Multilingual configuration');
    
    $form['enable_multilingual'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Enable multilingual'),
      '#default_value' => TRUE,
    ];
    
    $form['multilingual_languages'] = [
      '#type' => 'select',
      '#title' => $this->t("Additional site languages"),
      '#description' => '<strong>' . $default_language_name . '</strong> ' . $this->t("is the default language."),
      '#options' => $select_options,
      '#multiple' => TRUE,
      '#size' => 8,
      '#attached' => [
        'library' => [
          'dxpr_marketing_cms/choices',
        ],
      ],
      '#attributes' => [
        'style' => 'width:100%;',
        'class' => ['choices-select'],
      ],
      '#states' => [
        'visible' => [
          ':input[name="enable_multilingual"]' => ['checked' => TRUE],
        ],
        'invisible' => [
          ':input[name="enable_multilingual"]' => ['checked' => FALSE],
        ],
      ],
    ];

    $form['multilingual_demo_content'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Multilingual demo content'),
      '#description' => $this->t('Checking this will automatically install the Spanish language on your website. You can easily remove it later.'),
      '#default_value' => TRUE,
      '#states' => [
        'visible' => [
          ':input[name="enable_multilingual"]' => ['checked' => TRUE],
        ],
        'invisible' => [
          ':input[name="enable_multilingual"]' => ['checked' => FALSE],
        ],
      ],
    ];
    
    
    $form['actions'] = [
      'continue' => [
        '#type' => 'submit',
        '#value' => $this->t('Continue'),
        '#button_type' => 'primary',
      ],
      '#type' => 'actions',
      '#weight' => 5,
    ];    

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    global $install_state;

    // Get the value of enable multilingual checkbox.
    $enable_multilingual = $form_state->getValue('enable_multilingual');
    if (isset($enable_multilingual)
        && $enable_multilingual == TRUE) {
          $install_state['dxpr_marketing_cms']['enable_multilingual'] = TRUE;

        // Get list of selected multilingual languages.
        $multilingual_languages = $form_state->getValue('multilingual_languages');
        if (isset($multilingual_languages)
            && is_array($multilingual_languages)
            && count($multilingual_languages) > 0) {
          $multilingual_languages = array_filter($multilingual_languages);
        }
        else {
          $multilingual_languages = [];
        }
        if ($form_state->getValue('multilingual_demo_content')) {
          $multilingual_languages['es'] = 'es';
        }
        $install_state['dxpr_marketing_cms']['multilingual_languages'] = $multilingual_languages;
    }
    else {
      $install_state['dxpr_marketing_cms']['enable_multilingual'] = FALSE;
    }

  }

}
