<?php

namespace App\Entities;

class Fusca extends Car{

    public function __construct(?string $brand = null, ?string $color = null) {
        parent::__construct($brand, $color);
        $this->name = 'Fusca';
    }

    public function show(): void {
        $this->color = 'black';
        parent::show();
    }

    public function drive(): void {
        echo PHP_EOL;
        echo "O carro {$this->name} está dirigindo";
    }

}