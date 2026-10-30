<?php

class Produto {
    // ATRIBUTOS
    public $nome;
    public $preco;

    // MÉTODOS
    public function mostrarProduto() {
        return "Produto: " . $this->nome . " | Preço: R$ " . $this->preco;
    }
}

// OBJETO (Instância)
$notebook = new Produto();