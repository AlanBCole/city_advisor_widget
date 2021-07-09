<?php

namespace Drupal\city_advisor_widget\Plugin\CityAdvisorWidget;

use Drupal\city_advisor_widget\Plugin\CityAdvisorWidgetBase;

/**
 * Provides a weather forecast CityAdvisorWidget plugin.
 *
 * @CityAdvisorWidget(
 *   id = "weather_forecast",
 *   label = @Translation("Weather Forecast")
 * )
 */
class WeatherForecast extends CityAdvisorWidgetBase {
  /**
   * {@inheritDoc}
   */
  public function buildWidget($city) {
    return [
      'theme' => 'city_advisor_widget_weather_forecast',
      '#forecast' => \Drupal::service('city_advisor_widget.weather_forecast_service')->getFromCity($city),
    ];
  }
}