<?php

require 'vendor/autoload.php';
use App\Mago;
use App\Guerreiro;
use App\Arqueiro;

$mago = new Mago();
$mago->Atacar("Accio", "0");

$guerreiro = new Guerreiro();
$guerreiro->Atacar("Avanço de Thorin", "5");

$arqueiro = new Arqueiro();
$arqueiro->Atacar("Flecha de Avaroza", "1");

?>