<?php
ini_set('display_errors', 1);

require_once "autoload.php";

use Classes\Veiculo;
use Classes\Moto;
use Classes\Carro;

use Interfaces\ICaracteristicas;

$nome = $_POST['nome'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$tipo = $_POST['tipo'];

if($tipo == "1"){
  $veiculo = new Carro($nome, $marca, $modelo);
  $labelTipo = 'Carro';
}else{
  $veiculo = new Moto($nome, $marca, $modelo);
  $labelTipo = 'Moto';
}
  echo "Detalhes do(a) {$labelTipo} <br/>"; 
  $veiculo->exibeNome();
  $veiculo->exibeMarca();
  $veiculo->exibeModelo();

?>