<?php

ini_set('display_errors', 1);

require_once "autoload.php";

use Classes\Cadastro;

$cadastro = new Cadastro();
$tabela = $cadastro->listar();

// $servidor = new PDO('mysql:host=localhost:3306;dbname=php_unipe','root','php_unipe');
// $tabela = $servidor->query("SELECT nome,telefone,email FROM cadastro");

if($tabela) {
    echo "
    <table border='1'>
        <tr>
            <td>NOME</td>
            <td>TELEFONE</td>
            <td>EMAIL</td>
        </tr>
    ";
    foreach($tabela as $linha) {
        echo "<tr>
              <td>" . $linha['nome'] . "</td>
              <td>" . $linha['telefone'] . "</td>
              <td>" . $linha['email'] . "</td>
              </tr>";
    }
    
    echo "</table><br><br>";
    echo"
    <a href='index.html'>
    <button>Cadastrar</button>
    </a>";
}

//$servidor = null;
$cadastro = null;



?>