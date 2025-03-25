<?php
namespace Index;

abstract class Animal {
    public $nome;
    public $especie;
    public $habitat;
    public $genero;

    public function __construct($nome, $especie, $habitat, $genero) {
        $this->nome = $nome;
        $this->especie = $especie;
        $this->habitat = $habitat;
        $this->genero = $genero;
    }

    public function emitirSom() {
        echo "O animal está emitindo um som";
    }
}
?>