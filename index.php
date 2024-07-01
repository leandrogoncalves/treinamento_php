<?php
require __DIR__ . '/vendor/autoload.php';

use App\Entities\Car;

try {
  $car = new Car("Toyota", "Blue");
  $car->setColor("green");
  $car->drive();
} catch (Exception $e) {
  echo $e->getMessage();
}