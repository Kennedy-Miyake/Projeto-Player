<?php 

require_once("Item.php");

class Inventario {
    private array $itens = []; 
    private float $capacidadeMaxima;

    public function __construct() {
        $this->atualizarCapacidade(); 
    }
    public function atualizarCapacidade(int $nivel): void {
        $this->capacidadeMaxima = 20 + ($this->nivel * 3);
    }
}
