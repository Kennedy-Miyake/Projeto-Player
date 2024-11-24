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
    public function getCapacidadeMaxima(): float {
        return $this->capacidadeMaxima;
    }
    public function adicionar(Item $itens): void {
        $pesoAtual = $this->calcPesoAtual(); 
        if ($pesoAtual + $itens->getPeso() <= $this->capacidadeMaxima) { 
            array_push($this->itens, $itens); 
            echo "<li>O item ( {$itens->getNome()} ) foi adicionado com sucesso </li>";
        } else {
            echo "<li>O item ( {$itens->getNome()} ) ultrapassou o limite máximo </li>";
        }
    }
}
