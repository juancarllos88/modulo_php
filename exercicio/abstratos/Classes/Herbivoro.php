<?php

   namespace Classes;

   class Herbivoro extends Animal
  {

    public function habitoHalimentar(){
      echo "Animias Herbivoros comem {$this->getCome()}<br/>" ;
    }

  }

?>