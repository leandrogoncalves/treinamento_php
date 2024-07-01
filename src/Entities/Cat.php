<?php

namespace App\Entities;

use App\Entities;

class Cat extends Animal{

  public function run(): string {
    return "Corre!";
  }

  public function makeSound(): string  {
    return "miau!";
  }

}