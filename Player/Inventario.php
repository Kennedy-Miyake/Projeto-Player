<?php 

require_once ("../Item/Item.php");

class Inventario {
    private array $itens = []; 
    private float $capacidadeMaxima;

    public function __construct() {
        $this->capacidadeMaxima = 20;  
    }

    public function getCapacidadeMaxima(): float {
        return $this->capacidadeMaxima;
    }

    public function adicionar(Item $item): void {
        $tamanhoAtual = $this->calcularTamanhoAtual();
        $tamanhoNovoItem = $item->getTamanho();

        if ($tamanhoAtual + $tamanhoNovoItem <= $this->capacidadeMaxima) {
            array_push($this->itens, $item);
            echo "Item {$item->getNome()} adicionado com sucesso!<br>";
        } else {
            echo "Não é possível adicionar o item {$item->getNome()}. Capacidade máxima foi utrapassada!!<br>";
        }
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
        echo "Item ( {$nome} ) não foi encontrado no inventário.<br>";
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
