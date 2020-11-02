<?php


namespace Classes;

use PDO;

   class Cadastro 
   {
    private $nome;
    private $telefone;
    private $email;

    public function __construct($nome='', $telefone='', $email='')
    {
      $this->nome = $nome;
      $this->telefone = $telefone;
      $this->email = $email;
    }

    public function exibir()
    {
      echo "<h2>Dados do Usuário</h2>
      Nome:{$this->nome}<br/>
      Telefone:{$this->telefone}<br/>
      Email:{$this->email}<br/><br/>";
    }

    public function inserir()
    {
        $servidor = Conexao::getInstance();
        $conexao = $servidor->getConnection();

        $statement = $conexao->prepare("INSERT INTO cadastro (nome,telefone,email) VALUES (:nomeNovo,:telefoneNovo,:emailNovo)");
        $statement->bindParam(':nomeNovo',$this->nome);
        $statement->bindParam(':telefoneNovo',$this->telefone);
        $statement->bindParam(':emailNovo',$this->email);
        $statement->execute();

        $servidor->closeConnection();  
        $servidor = null;
    }

    public function listar()
    {
        $servidor = Conexao::getInstance();
        $conexao = $servidor->getConnection();
        $listagem = $conexao->query("SELECT nome,telefone,email FROM cadastro");
        $servidor->closeConnection();  
        $servidor = null;
        return $listagem; 
    }

    /**
     * Get the value of nome
     */ 
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */ 
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of telefone
     */ 
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * Set the value of telefone
     *
     * @return  self
     */ 
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }
  }

?>