<?php

namespace App\Entities\Abstractions;

abstract class AnimalAbstract {

    protected string $species;

    public function getSpecies() {
        return $this->species;
    }

    public function makeSound() {
        echo "Woof";
    }

    abstract public function run();
}