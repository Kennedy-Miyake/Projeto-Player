<?php
require_once ("../Item/Item.php");
require_once ("../Item/Ataque.php");
require_once ("../Item/Defesa.php");
require_once ("../Item/Magia.php");
require_once ("../Player/Inventario.php");
require_once ("../Player/Player.php");

$player1 = new Player("Alexandre");
$player2 = new Player("Takiguchi");

$ataque1 = new Ataque("Espada de Fogo");
$defesa1 = new Defesa("Escudo de Ferro");
$magia1 = new Magia("Poção Mana");

$ataque2 = new Ataque("Machado");
$defesa2 = new Defesa("Armadura");
$magia2 = new Magia("Bola de Fogo");

echo "<hr> Jogador 1 - {$player1->getNickname()}<hr>";
$player1->coletarItem($ataque1);
$player1->coletarItem($defesa1);
$player1->coletarItem($magia1);
$player1->coletarItem($ataque2);
$player1->coletarItem($defesa2);
$player1->coletarItem($magia2);
echo "Capacidade do inventário do player {$player1->getNickname()}: {$player1->getNivel()}<br>";

$player1->subirNivel();
$player1->coletarItem($ataque1);

echo "<hr> Jogador 2 - {$player2->getNickname()} <hr>";
$player2->coletarItem($ataque1);
$player2->coletarItem($defesa2);
$player2->coletarItem($magia1);
$player2->coletarItem($ataque2);
$player2->soltarItem("Espada de Fogo");
echo "Capacidade do inventário do player {$player2->getNickname()}: {$player2->getNivel()}<br>";

?>
