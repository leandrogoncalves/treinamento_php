<?php

$hoje = date('Y-m-d');
$outroDia = date('1990-11-16');

echo $hoje;
echo PHP_EOL;
echo $outroDia;

echo PHP_EOL;
echo PHP_EOL;

$hoje = strtotime($hoje);
$outroDia = strtotime($outroDia);
echo $hoje;
echo PHP_EOL;
echo $outroDia;

$diferenca = $hoje - $outroDia;
echo PHP_EOL;
echo PHP_EOL;
echo $diferenca;

$diferenca_dias = $diferenca / (60*60*24);
echo PHP_EOL;
echo PHP_EOL;
echo $diferenca_dias;

$anos = $diferenca_dias/365;
echo PHP_EOL;
echo PHP_EOL;
echo round($anos);