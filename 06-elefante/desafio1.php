<?php

class Produto
{
    var $nome;
    var $descricao;
    var $preco;
    var $peso;

   /* function retornaProduto(): String
    {
        return "{$this->nome} , {$this->descricao} , {$this->preco} , {$this->peso}";
    }*/

    function setName(String $nome)
    {
       $this->nome = $nome; 
    }

    function getName()
    {
        return strtoupper($this->nome);
    }

    function setDescricao(String $descricao)
    {
        $this->descricao = $descricao;
    }

    function getDescricao ():string 
    {
        return strtoupper($this->descricao);
    }

    function setPreco(float $preco)
    {
        $this->preco = $preco;
    }

    function getPreco():float
    {
        return $this->preco;
    }

    function setPeso(float $peso)
    {
        $this->peso = $peso;
    }

    function getPeso(): float
    {
        return $this->peso;
    }
}

$microondas = new Produto;
$microondas->setName('Eletrolux 12345');
$microondas->descricao = '1500 litros, branco, 110vw';
$microondas->preco = 3000;
$microondas->peso = '7 kilos';
echo $microondas->getName();

//echo $microondas->retornaProduto() . PHP_EOL;