<?php

class Item {
    private string $name;
    private int $tamanho;
    private string $classe;

    public function __construct(string $name, int $tamanho, string $classe) {
        $this->getName($name);
        $this->getTamanho($tamanho);
        $this->getclasse($classe);
    }

    public function getName(): string {
        return $this->name;
    }
    public function  setName(string $name): void {
        $this->name = $name;
    }
    public function getTamanho(): int {
        return $this->tamanho;
    }
    public function setTamanho(int $tamanho): void {
        $this->tamanho = $tamanho;
    }
    public function getClasse(): string {
        return $this->classe;
    }
    public function setClasse(string $classe): void {
        $this->classe = $classe;
    }
    
 
}
?>