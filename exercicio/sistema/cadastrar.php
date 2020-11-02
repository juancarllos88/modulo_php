<?php

ini_set('display_errors', 1);

require_once "autoload.php";

use Classes\Cadastro;

  $nome = $_POST['nome'];
  $telefone = $_POST['telefone'];
  $email = $_POST['email'];

  //$servidor = new PDO('mysql:host=localhost:3306;dbname=php_unipe','root','php_unipe');
  //$statement = $servidor->prepare("INSERT INTO cadastro (nome,telefone,email) VALUES (:nomeNovo,:telefoneNovo,:emailNovo)");
  //$statement->bindParam(':nomeNovo',$nome);
  //$statement->bindParam(':telefoneNovo',$telefone);
  //$statement->bindParam(':emailNovo',$email);
  //$statement->execute();

  $cadastro = new Cadastro($nome,$telefone,$email);
  $cadastro->inserir();
  $cadastro->exibir();

  $cadastro = null;

  //$servidor= null;
  //header("Location: lista_usuarios.php");

  echo"
    <a href='index.html'>
    <button> Cadastrar </button>
    </a>  
    <a href='lista_usuarios.php'>
    <button> Listagem </button>
    </a>";

?>