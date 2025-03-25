<?php

require_once ("Animal.php");

use Index\Animal;

class Cachorro extends Animal{
    public function emitirSom(){
        echo "Au au";
    }
}
