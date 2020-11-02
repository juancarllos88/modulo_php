<?php

   namespace Classes;

   class Carnivoro extends Animal
   {

    public function habitoHalimentar(){
      echo "Animias Carnivoros comem {$this->getCome()}<br/>" ;
    }

  }

?>