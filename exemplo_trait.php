<?php


class Transacao
{
  public function pagar()
  {
    throw new \Exception('Implementar o metodo pagar');
  }
}


trait Cache
{
  public function salvaInformacao()
  {
    echo 'Salvanado informação';
  }
}


class TrasacaoPix extends Transacao
{
  use Cache;

  public function pagar()
  {
    $this->salvaInformacao();
    echo 'Pagando';
  }
}


class TrasacaoTed extends Transacao
{
  use Cache;

  public function pagar()
  {
    $this->salvaInformacao();
    echo 'Pagando';
  }
}