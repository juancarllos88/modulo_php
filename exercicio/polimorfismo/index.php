<?php

ini_set('display_errors', 1);

require_once "autoload.php";

use Classes\Conta;
use Classes\ContaCorrente;
use Classes\ContaPoupanca;



  $contaCorrente = new ContaCorrente(200);
  $contaPoupanca = new ContaPoupanca(500);

  $contaCorrente->saca(100);
  $contaPoupanca->saca(100);

  $contaCorrente->imprimeExtrato();
  $contaPoupanca->imprimeExtrato();


?>