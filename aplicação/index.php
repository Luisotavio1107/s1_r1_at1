<?php

class Produto {
    // Atributos
    public $nome;
    public $preco;

    // Construtor para facilitar a definição dos dados ao instanciar
    public function __construct($nome, $preco) {
        $this->nome = $nome;
        $this->preco = $preco;
    }

    // Método para exibir as informações do produto
    public function mostrarProduto() {
        return "Produto: " . $this->nome . " - R$ " . number_format($this->preco, 2, ',', '.') . "\n";
    }
}

// Instanciando dois produtos diferentes (Objetos)
$produto1 = new Produto("Smartphone Galaxy", 2499.90);
$produto2 = new Produto("Notebook Dell", 4800.00);

// Executando o método mostrarProduto() para cada objeto
echo $produto1->mostrarProduto();
echo $produto2->mostrarProduto();