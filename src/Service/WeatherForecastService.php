<?php

namespace Drupal\city_advisor_widget\Service;

class WeatherForecastService {
    public function getFromCity(string $city) {
        return \Drupal::httpClient()->get("https://api.openweathermap.org/data/2.5/weather?q=$city&APPID=9d0baaeed27e8ef62e83edcb1a68cd7d")->getBody();
    }
}