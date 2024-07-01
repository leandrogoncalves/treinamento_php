<?php
/*
$hoje = new DateTime();
$data_nascimento = new DateTime('1990-11-16');

echo $hoje->format('d/m/Y');
echo PHP_EOL;
echo $data_nascimento->format('d/m/Y');

$diferenca = $hoje->diff($data_nascimento);
echo PHP_EOL;
echo "A diferenca em dias é: {$diferenca->days}";

$diferenca_em_anos = round($diferenca->days/365);
echo PHP_EOL;
echo "A diferenca em anos é: {$diferenca_em_anos}";
*/
/*
$date = new DateTime(); 
$date->add(new DateInterval('P10D')); // Adiciona 10 dias 
echo $date->format('d/m/Y'); // Exibe '2024-06-28'
*/

/*
$date1 = new DateTime('2024-08-10'); 
$date2 = new DateTime('2024-07-15'); 
if ($date1 < $date2) { 
  echo "A {$date1->format('d/m/Y')} é anterior à {$date2->format('d/m/Y')}";
} else {
  echo "A {$date2->format('d/m/Y')} é anterior à {$date1->format('d/m/Y')}";
}
*/
/*
$date = new DateTime('now', new DateTimeZone('America/Sao_Paulo'));
echo $date->format('Y-m-d H:i:s'); // Exibe a data e hora em São Paulo
*/

