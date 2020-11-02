<?php
ini_set('display_errors', 1);

require_once "Animal.php";
require_once "Carnivoro.php";
require_once "Herbivoro.php";

use Classes\Animal;
use Classes\Carnivoro;
use Classes\Herbivoro;

  $animal1 = new Carnivoro('carne');
  $animal2 = new Herbivoro('legumes');
  
  $animal1->habitoHalimentar();
  $animal2->habitoHalimentar();


?>