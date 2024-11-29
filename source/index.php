<?php
require_once ("../Item/Item.php");
require_once ("../Item/Ataque.php");
require_once ("../Item/Defesa.php");
require_once ("../Item/Magia.php");
require_once ("../Player/Inventario.php");

$espada = new Ataque("Espada");
$escudo = new Defesa("Escudo");
$feitiço = new Magia("Feitiço de Fogo");
$machado = new Ataque("Machado");
$capa = new Defesa("Capa Mágica");
$feitiçoDeGelo = new Magia("Feitiço de Gelo");

$inventarioPlayer1 = new Inventario();
$inventarioPlayer2 = new Inventario();

$inventarioPlayer1->adicionar($espada);
$inventarioPlayer1->adicionar($escudo);
$inventarioPlayer1->adicionar($feitiço);
$inventarioPlayer1->adicionar($machado);
$inventarioPlayer1->adicionar($capa);
$inventarioPlayer1->adicionar($feitiçoDeGelo);

$inventarioPlayer2->adicionar($espada);
$inventarioPlayer2->adicionar($feitiço);
$inventarioPlayer2->adicionar($machado);
$inventarioPlayer2->adicionar($escudo);
$inventarioPlayer2->adicionar($feitiçoDeGelo);

$inventarioPlayer1->atualizarCapacidade(2); 

$inventarioPlayer2->atualizarCapacidade(3);

?>
