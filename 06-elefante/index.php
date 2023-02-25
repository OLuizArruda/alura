<?php


class Produto 
{
  var $nome;
  var $descricao;
  var $valor;
  
  function retornaProduto(): String
  {
        return "{$this->nome} , {$this->descricao} , {$this->valor} <hr>";
  }
}


$tv = new Produto;
$tv->nome = 'TV';
$tv->descricao = 'Smart TV';
$tv->valor = 4500.00;

$geladeira = new Produto;
$geladeira->nome = 'Geladeira';
$geladeira->descricao = 'Degelo MAX';
$geladeira->valor = 8000;

$PS4 = new Produto;
$PS4->nome = 'PS4';
$PS4->descricao = 'Sony Playstation 4';
$PS4->valor = 7000;

echo $tv->retornaProduto() . PHP_EOL;
echo $geladeira->retornaProduto() . PHP_EOL;
echo $PS4->retornaProduto() . PHP_EOL;
