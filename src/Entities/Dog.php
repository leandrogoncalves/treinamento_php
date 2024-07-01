<?php

namespace App\Entities;

use App\Entities\Animal;

class Dog extends Animal {

  public function run(): string {
    return "Corre!";
  }

  public function makeSound(): string {
    return "auau!";
  }

}