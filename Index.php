<?php
require 'Cachorro.php';
require 'Gato.php';


$cachorro = new Cachorro("Princesa", "Cão", "Minha casa", "Fêmea");

$gato = new Gato("Melinha", "Gato", "Casa da Vó", "Fêmea");


$cachorro->emitirSom();
echo "\n";
$gato->emitirSom();