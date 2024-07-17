<?php

namespace App\Factories;

use App\Entities\Contracts\CarInterface;

class CarFactory {

    protected CarInterface $car;

    public function __construct(CarInterface $car)
    {
        $this->car = $car;
    }

    public function setBrand($brand) {
        $this->car->setBrand($brand);
    }

    public function setColor($color) {
        $this->car->setColor($color);
    }

    public function getCar() {
        return $this->car;
    }

}