<?php

namespace Drupal\city_advisor_widget\Plugin;

use Drupal\Core\Plugin\DefaultPluginManager;
use Drupal\Core\Cache\CacheBackendInterface;
use Drupal\Core\Extension\ModuleHandlerInterface;

/**
 * Provides the City widget plugin manager.
 */
class CityAdvisorWidgetManager extends DefaultPluginManager {


  /**
   * Constructs a new CityAdvisorWidgetManager object.
   *
   * @param \Traversable $namespaces
   *   An object that implements \Traversable which contains the root paths
   *   keyed by the corresponding namespace to look for plugin implementations.
   * @param \Drupal\Core\Cache\CacheBackendInterface $cache_backend
   *   Cache backend instance to use.
   * @param \Drupal\Core\Extension\ModuleHandlerInterface $module_handler
   *   The module handler to invoke the alter hook with.
   */
  public function __construct(\Traversable $namespaces, CacheBackendInterface $cache_backend, ModuleHandlerInterface $module_handler) {

    parent::__construct('Plugin/CityAdvisorWidget', $namespaces, $module_handler, 'Drupal\city_advisor_widget\Plugin\CityAdvisorWidgetInterface', 'Drupal\city_advisor_widget\Annotation\CityAdvisorWidget');

    $this->alterInfo('city_advisor_widget_info');
    $this->setCacheBackend($cache_backend, 'city_advisor_widget_plugins');
  }

}