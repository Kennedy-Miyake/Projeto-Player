<?php 

require_once("Item.php");

class Inventario {
    private array $itens = []; 
    private float $capacidadeMaxima;

    public function __construct() {
        $this->atualizarCapacidade(); 
    }
}
