<?php

namespace Drupal\dxpr_marketing_cms\Form;

use Drupal\Core\Config\ConfigFactoryInterface;
use Drupal\Core\DependencyInjection\ContainerInjectionInterface;
use Drupal\Core\Extension\InfoParserInterface;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\StringTranslation\TranslationInterface;
use Drupal\dxpr_builder\Service\DxprBuilderJWTDecoder;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Defines form for entering DXPR Builder product key and Google Cloud Translation API key.
 */
class ConfigureAPIKeysForm extends FormBase implements ContainerInjectionInterface {

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
   * @var \Drupal\dxpr_marketing_cms\FormHelper
   */
  protected $formHelper;

  /**
   * The config factory service.
   *
   * @var \Drupal\Core\Config\ConfigFactoryInterface
   */
  protected $configFactory;

  /**
   * JWT service to manipulate the DXPR JSON token.
   *
   * @var \Drupal\dxpr_builder\Service\DxprBuilderJWTDecoder
   */
  protected $jwtDecoder;

  /**
   * Configure API Keys Form constructor.
   *
   * @param string $root
   *   The Drupal application root.
   * @param \Drupal\Core\Extension\InfoParserInterface $info_parser
   *   The info parser service.
   * @param \Drupal\Core\StringTranslation\TranslationInterface $translator
   *   The string translation service.
   * @param \Drupal\dxpr_marketing_cms\FormHelper $form_helper
   *   The form helper.
   * @param \Drupal\Core\Config\ConfigFactoryInterface $config_factory
   *   The config factory service.
   * @param \Drupal\dxpr_builder\Service\DxprBuilderJWTDecoder $jwtDecoder
   *   Parsing DXPR JWT token.
   */
  public function __construct($root, InfoParserInterface $info_parser,
  TranslationInterface $translator,
  FormHelper $form_helper,
  ConfigFactoryInterface $config_factory,
  DxprBuilderJWTDecoder $jwtDecoder) {
    $this->root = $root;
    $this->infoParser = $info_parser;
    $this->stringTranslation = $translator;
    $this->formHelper = $form_helper;
    $this->configFactory = $config_factory;
    $this->jwtDecoder = $jwtDecoder;
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
      $container->get('config.factory'),
      $container->get('dxpr_builder.jwt_decoder'),
    );
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'dxpr_marketing_cms_api_keys_configuration';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state, array &$install_state = NULL) {
    $form['#title'] = $this->t('API Keys Configuration');

    $form['json_web_token'] = [
      '#type' => 'textarea',
      '#title' => $this->t('DXPR Builder product key'),
      '#description' => $this->t('Create a free account at <a href="https://dxpr.com/pricing" target="_blank">DXPR.com</a> and find your key in the <a href="https://app.dxpr.com/getting-started" target="_blank">Get Started dashboard</a>.'),
    ];


    
    // if (isset($install_state['dxpr_marketing_cms']['enable_multilingual']) && 
    // $install_state['dxpr_marketing_cms']['enable_multilingual']) {
      $form['google_translation_key'] = [
        '#type' => 'textfield',
        '#title' => $this->t('Google Cloud Translation API key (optional)'),
        '#description' => $this->t('Get a key from <a href="https://console.cloud.google.com/marketplace/product/google/translate.googleapis.com" target="_blank">cloud.google.com</a>.'),
      ];
    // }
    
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
    $json_web_token = $form_state->getValue('json_web_token');
    if (!empty($json_web_token)) {
      $this->configFactory->getEditable('dxpr_builder.settings')->set('json_web_token', $json_web_token)->save();
    }

    $google_translation_key = $form_state->getValue('google_translation_key');
    if (!empty($google_translation_key)) {
      $this->configFactory->getEditable('tmgmt.translator.google')->set('settings.api_key', $google_translation_key)->save();
    }
  }

  /**
   * {@inheritdoc}
   *
   * @phpstan-param array<string, mixed> $form
   */
  public function validateForm(array &$form, FormStateInterface $form_state): void {
    if ($form_state->getValue('json_web_token')) {
      $jwtPayloadData = $this->jwtDecoder->decodeJwt($form_state->getValue('json_web_token'));
      if ($jwtPayloadData['sub'] === NULL || $jwtPayloadData['scope'] === NULL) {
        $form_state->setErrorByName('json_web_token', $this->t('Your DXPR Builder product key can’t be read, please make sure you copy the whole key without any trailing or leading spaces into the form.'));
      }
      elseif ($jwtPayloadData['dxpr_tier'] === NULL) {
        $form_state->setErrorByName('json_web_token', $this->t('Your product key (JWT) is outdated and not compatible with DXPR Builder version 2.0.0 and up. Please follow instructions <a href=":uri">here</a> to get a new product key.', [
          ':uri' => 'https://app.dxpr.com/download/all#token',
        ]));
      }
    }
  }


}
