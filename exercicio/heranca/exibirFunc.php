<?php
// require_once "classes/Funcionario.php";
// require_once "classes/Gerente.php";
// require_once "classes/Programador.php";
ini_set('display_errors', 1);

require_once "autoload.php";

use Classes\Funcionario;
use Classes\Gerente;
use Classes\Programador;



  $nome = $_POST['nome'];
  $salario = $_POST['salario'];
  $cargo = $_POST['cargo'];
  $observacao = $_POST['observacao'];

  if($cargo == "1"){
    $funcionario = new Gerente($nome, $salario, $observacao);
  }else{
    $funcionario= new Programador($nome, $salario, $observacao);
  }
  $funcionario->relatorioFunc();


?>