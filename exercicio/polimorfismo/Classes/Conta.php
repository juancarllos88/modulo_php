<?php

namespace Classes;

  class Conta
  {

    protected $saldo;

    public function __construct($saldo=0){
      $this->saldo= $saldo;
    }

    public function imprimeExtrato()
    {
      echo "Seu saldo atual é R$ {$this->saldo}<br/>";
    }

    public function saca($valor)
    {
      if($this->saldo >= $valor){
        $this->setSaldo($this->saldo - $valor);
      }else{
        echo "Sem grana";
      }
    }

    public function deposita($valor)
    {
      $this->setSaldo($this->saldo + $valor);
    }

    /**
     * Get the value of saldo
     */ 
    public function getSaldo()
    {
        return $this->saldo;
    }

    /**
     * Set the value of saldo
     *
     * @return  self
     */ 
    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;

        return $this;
    }
  }


?>