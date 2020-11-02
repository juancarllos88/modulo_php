<?php

  class Produto {

    private $codigo;
    private $nome;
    private $preco;

    public function __construct($codigo=0,$nome="Juan",$preco=150){
      $this->codigo = $codigo;
      $this->nome = $nome;
      $this->preco = $preco;
    }

    public function imprimirProduto(){
      echo "Produto: {$this->nome} ";
    }

    public function __destruct(){
      echo "Objeto destruido";
    }
    
  }
?>