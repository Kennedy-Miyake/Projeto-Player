<?php 

require_once("Item.php");

class Inventario {
    private array $itens = []; 
    private float $capacidadeMaxima;

    public function __construct() {
        $this->capacidadeMaxima = 20;
    }

    public function getCapacidadeMaxima(): float {
        return $this->capacidadeMaxima;
    }
    public function adicionar(Item $itens): void {
        array_push($this->itens, $itens);
    }
    public function remover(string $nome): void {
        foreach ($this->itens as $indice => $item) {
            if ($item->getNome() === $nome) { 
                unset($this->itens[$indice]);
                $this->itens = array_values($this->itens); 
                echo "Item ( {$nome} ) foi removido com sucesso.<br>";
                return; 
            }
        }
        echo "Item ( {$nome} ) não encontrado no inventário.<br>";
    }
    public function atualizarCapacidade(int $nivel): void {
        $this->capacidadeMaxima += ($nivel * 3);
    }
    public function calcularTamanhoAtual(): int {
        $tamanhoTotal = 0;
        foreach ($this->itens as $item) {
            $tamanhoTotal += $item->getTamanho();
        }
        return $tamanhoTotal;
    }    
}
?>