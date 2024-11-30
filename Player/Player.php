<?php

class Player {
    private string $nickname;
    private int $nivel;
    private Inventario $inventario;

    public function __construct(string $nickname) {
        $this->setNickname($nickname);
        $this->nivel = 1;
        $this->inventario = new Inventario();
    }

    public function setNickname(string $nickname): void {
        $this->nickname = $nickname;
    }
    public function setNivel(int $nivel): void {
        $this->nivel = $nivel;
    }
    public function getNickname(): string {
        return $this->nickname;
    }
    public function getNivel(): int {
        return $this->nivel;
    }
    public function subirNivel(): void {
        $this->nivel++;
        $this->inventario->atualizarCapacidade($this->nivel);
        echo "Parabéns, {$this->nickname}! Você subiu para o nível {$this->nivel}. Sua capacidade de inventário agora é {$this->inventario->getCapacidadeMaxima()}.<br>";
    }
    public function coletarItem(Item $item): void {
        $this->inventario->adicionar($item);
    }
    public function soltarItem(string $nome): void {
        $this->inventario->remover($nome);
    }
    public function infoCapacidade(): void {
        $this->inventario->capacidadeLivre();
    }
}
?>