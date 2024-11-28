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
    }
    public function getInventario(): Inventario {
        return $this->inventario;
    }
}

?>