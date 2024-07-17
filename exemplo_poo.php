<?php

class Car {
    public $brand;
    public $color;
    public function drive() {
        echo "The car is driving";
    }
}

$car = new Car();
$car->brand = "Toyota";
$car->color = "Red";
$car->drive();
