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

    public function show(): void
    {
        echo PHP_EOL;
        echo "Este é um carro monstro";
    }

    public function isCar(): bool
    {
        return true;
    }

    public function drive(): void
    {
        echo PHP_EOL;
        echo "Este é um carro pula e dá mortal";
    }

}