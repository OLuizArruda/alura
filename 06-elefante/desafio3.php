<?php

class Produto
{
    var $nome;
    var $preco;

    function setNome(string $nome)
    {
        $this->nome=$nome;
    }

    function setPreco (float $preco)
    {
        $this->preco=$preco;
    }

    function retornaProduto():string
    {
        return "{$this->nome} , {$this->preco}" . PHP_EOL;
    }
}

$celular = new Produto;
$celular -> setNome("Samsung Galaxy 8888");
$celular -> setPreco(3000);
echo $celular -> retornaProduto() . PHP_EOL;
