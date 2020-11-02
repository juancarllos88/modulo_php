<?php

namespace Classes;

use PDO;

  class Conexao
  {

    private $conexao;

    public function __construct($conexao)
    {
      $this->conexao = $conexao;
    }

    public static function getInstance()
    {
      $instancia = new Conexao(new PDO('mysql:host=localhost:3306;dbname=php_unipe','root','php_unipe'));
      return $instancia;
    }
    
    public function getConnection()
    {
      return $this->conexao;
    }

    public function closeConnection()
    {
      $this->conexao = null;
    }



  }




?>