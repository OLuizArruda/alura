<?php

class Produto
{
    var $nome;
    var $preco;
    var $peso;

    function setNome(string $nome)
    {
        $this->nome=$nome;
    }

    function setPreco(float $preco)
    {
        $this->preco=$preco;
    }

    function setPeso($peso)
        {
        $this->peso=$peso;
    }

    function retornaProduto(): string
    {
        return "{$this->nome} , {$this->preco} , {$this->peso}";
    }

}

$tv = new Produto;
$tv-> setNome("Televisao");
$tv-> setPreco(1500);
$tv-> setPeso("2kg");
echo $tv-> retornaProduto() . PHP_EOL;
