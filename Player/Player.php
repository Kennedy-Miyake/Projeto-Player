<?php

class Player {
    private string $nickname;
    private int $nivel;
    //private Inventario $inventario;

    public function __construct(string $nickname) {
        $this->setNickname($nickname);
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
    }
}

?>