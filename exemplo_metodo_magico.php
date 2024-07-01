<?php
require __DIR__ . '/vendor/autoload.php';

use App\Entities\Exemplo;

$obj = new Exemplo();
// $obj->metodoX('meu exemplo com um argumento');
// echo PHP_EOL;
// $obj->metodoX('meu exemplo com dois argumento', 'blabla');
$obj->nome = 'João';

echo $obj->nome;
