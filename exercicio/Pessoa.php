<?php

  class Pessoa
  {

    protected $nome;

    public function __construct($nome)
    {
      $this->nome = $nome;
    }

    public function escreverNome(){
      echo "Meu nome é: {$this->nome}";
    }



  }
?>