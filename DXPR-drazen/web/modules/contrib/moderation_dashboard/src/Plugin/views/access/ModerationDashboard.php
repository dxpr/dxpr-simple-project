<?php

namespace Drupal\moderation_dashboard\Plugin\views\access;

use Drupal\Core\Cache\Cache;
use Drupal\Core\Cache\CacheableDependencyInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\views\Plugin\views\access\AccessPluginBase;
use Symfony\Component\Routing\Route;

/**
 * Access plugin that provides access control for Scheduler.
 *
 * @ingroup views_access_plugins
 *
 * @ViewsAccess(
 *   id = "moderation_dashboard",
 *   title = @Translation("Moderation Dashboard Access"),
 *   help = @Translation("Custom access to the Moderation Dashboard."),
 * )
 */
class ModerationDashboard extends AccessPluginBase implements CacheableDependencyInterface {

  /**
   * {@inheritdoc}
   */
  public function access(AccountInterface $account) {
    return \Drupal::service('moderation_dashboard.access_checker')->access($account);
  }

  /**
   * {@inheritdoc}
   */
  public function alterRouteDefinition(Route $route) {
    $route->setRequirement('_access_moderation_dashboard', 'TRUE');
  }

  /**
   * {@inheritdoc}
   */
  public function getCacheContexts() {
    return ['user'];
  }

  /**
   * {@inheritdoc}
   */
  public function getCacheTags() {
    return [];
  }

  /**
   * {@inheritdoc}
   */
  public function getCacheMaxAge() {
    return Cache::PERMANENT;
  }

}
