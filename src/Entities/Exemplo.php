<?php

namespace App\Entities;

class Exemplo {

  public function __set($name, $value) {
    $this->{$name} = $value;
  }

  public function __get($name) {
    if(property_exists($this, $name)) {
      return $this->{$name};
    }
  }

  public function __call($name, $arguments) {
    if ($name == 'metodoX') {
        if (count($arguments) == 1) {
          $this->metedoXComUmArgumento($arguments[0]);
        } elseif (count($arguments) == 2) {
          $this->metedoXComDoisArgumentos($arguments[0], $arguments[1]);
        }
    }
  }

  private function MetedoXComUmArgumento($argumento) {
    print($argumento);
  }

  private function MetedoXComDoisArgumentos($argumento1, $argumento2) {
    print($argumento1);
    print(PHP_EOL);
    print($argumento2);
  }
}