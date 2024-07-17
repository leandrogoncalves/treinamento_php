<?php
require __DIR__ . '/vendor/autoload.php';

use App\Factories\CarFactory;
use App\Entities\Gol;
use App\Entities\Car;


try {
  $collection = [
    [
      'name' => 'Gol', 
      'brand' => 'Volkswagen', 
      'color' => 'Red',
      'class' => Gol::class
    ],
    [
      'name' => 'Fusca', 
      'brand' => 'Volkswagen', 
      'color' => 'Black',
      'class' => App\Entities\Fusca::class
    ],
    [
      'name' => 'Relampago McCarthy', 
      'brand' => 'MonsterDog', 
      'color' => 'Yellow',
      'class' => App\Entities\MonsterCar::class
    ]
  ];

  foreach ($collection as $carData) {
    $carFactory = new CarFactory(new $carData['class']);
    $carFactory->setBrand($carData['brand']);
    $carFactory->setColor($carData['color']);
    $car = $carFactory->getCar();
    $car->show();
    $car->drive();
    echo PHP_EOL;
  }


} catch (Exception $e) {
  echo $e->getMessage();
}