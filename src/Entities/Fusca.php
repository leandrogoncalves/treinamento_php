<?php

namespace App\Entities;

class Fusca extends Car{

    public function __construct(?string $brand = null, ?string $color = null) {
        parent::__construct($brand, $color);
        $this->name = 'Fusca';
    }

    public function show(): string {
        $this->color = 'black';
        return parent::show();
    }

    public function drive(): string {
        $output = PHP_EOL;
        $output .= "O carro {$this->name} está dirigindo";
        return $output;
    }

}