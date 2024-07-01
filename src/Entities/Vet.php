<?php

namespace App\Entities;

use App\Entities\Animal;

class Vet {

  private Animal $animal;

  public function __construct(Animal $animal) {
    $this->animal = $animal;
  }

  public function treat(): string {
    $output = "O veterinario esta tratando o animal que faz o som: ";
    $output .= $this->animal->makeSound();
    return $output;
  }
}