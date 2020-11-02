<?php

require_once "Pessoa.php";
require_once "Fisica.php";


$pessoa = new Fisica("juan","01383281459");
$pessoa2 = new Pessoa("carlos","01383281459");
$pessoa->escreverNome();
$pessoa2->escreverNome();

?>