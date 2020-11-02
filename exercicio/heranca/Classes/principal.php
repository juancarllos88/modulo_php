<?php

require_once "Funcionario.php";
require_once "Gerente.php";
require_once "Programador.php";


$funcionario1 = new Gerente("Juan", 1000, "projeto 1");
$funcionario1->relatorioFunc();
echo "Projeto Atual: {$funcionario1->getProjeto()}<br/><br/>";
$funcionario2 = new Programador("Carlos", 5000, "Java");
$funcionario2->relatorioFunc();
echo "Linguagem : {$funcionario2->getLinguagem()}<br/><br/>";
?>