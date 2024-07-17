<?php

namespace App\Entities;

class Gol extends Car {

    public function __construct(?string $brand = null, ?string $color = null) {
        parent::__construct($brand, $color);
        $this->name = 'Gol';
    }
    public function drive(): void {
        echo PHP_EOL;
        echo "O carro {$this->name} está dirigindo";
    }

}