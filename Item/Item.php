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
}
?>