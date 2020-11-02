<?php
ini_set('display_errors', 1);
//require_once "conexao.php"
  $servidor = new PDO('mysql:host=localhost:3306;dbname=php_unipe','root','php_unipe');
  
  $statement = $servidor->prepare("INSERT INTO famosos (nome) VALUES (:nomeNovo)");
  $nome = "Rayra";
  $statement->bindParam(':nomeNovo',$nome);
  $statement->execute();

  //$servidor->exec("insert into famosos (nome) VALUES ('Suelen')");

  // $result = $servidor->query("SELECT * FROM famosos");
  // if($result){
  //   foreach($result as $row){
  //     echo "Id: {$row['id']}  nome: {$row['nome']} <br/>";
  //   }
  // }

  //redirecionar
  //header("Location: insert.php");

  //$servidor->exec("DELETE FROM famosos where ID = 2");

  $servidor= null;
?>