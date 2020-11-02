<?php


  class Fisica extends Pessoa
  {
    private $cpf;

    public function __construct($nome,$cpf)
    {
      parent::__construct($nome);
      $this->cpf = $cpf;
    }

    public function escreverNome(){
      echo "Meu nome é: {$this->nome} com cpf {$this->cpf}";
    }

    public function validarCPF()
    {
      echo "CPF VALIDADO";
    }


  }

?>