<?php

namespace Drupal\city_advisor_widget\Plugin;

use Drupal\Component\Plugin\PluginInspectionInterface;

/**
 * Defines an interface fot city advisor widget plugins.
 */

interface CityAdvisorWidgetInterface extends PluginInspectionInterface {
    /**
     * Returns the renderable widget for the provided city.
     *
     * @param string $city
     * The name of the city to build the widget for.
     *
     * @return array
     * The renderable array.
     */
    public function buildWidget($city);
}