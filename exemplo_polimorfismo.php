<?php
require __DIR__ . '/vendor/autoload.php';

use App\Entities\Animal;
use App\Entities\Dog;
use App\Entities\Cat;
use App\Entities\Vet;

$dog = new Dog();
$vet = new Vet($dog);
echo $vet->treat();

echo PHP_EOL;
echo PHP_EOL;

$cat = new Cat();
$vet = new Vet($cat);
echo $vet->treat();
