<?php


namespace Classes;

use Interfaces\ICaracteristicas;

   class Moto extends Veiculo implements ICaracteristicas
   {

    public function exibeNome()
    {
      echo "Nome: {$this->getNome()} <br/>";
    }

    public function exibeMarca()
    {
      echo "Marca: {$this->getMarca()} <br/>";
    }

    public function exibeModelo()
    {
      echo "Modelo: {$this->getModelo()} <br/>";
    }
  

  }

?>