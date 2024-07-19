<?php

namespace App\Entities;

use App\Entities\Contracts\CarInterface;

class MonsterCar implements CarInterface {

    protected ?string $name;
    protected ?string $brand;
    protected ?string $color;


    public function setBrand($brand): void
    {
        $this->brand = $brand . ' Monster';
    }

    public function setColor($color): void
    {
        $this->color = $color . ' Monster';
    }

    public function show(): string
    {
        $output = PHP_EOL;
        $output .= "Este é um carro monstro";
        return $output;
    }

    public function isCar(): bool
    {
        return true;
    }

    public function drive(): string
    {
        $output = PHP_EOL;
        $output .= "Este é um carro pula e dá mortal";
        return $output;
    }

}