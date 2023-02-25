<?php

class Produto
{
    var $nome;
    var $descricao;
    var $preco;

    function __construct(string $nome, string $descricao, float $preco)
    {
        $this->nome         = $nome;
        $this->descricao    = $descricao;
        $this->preco        = $preco;        
    }

    function mostraProduto ()
    {
        return "{$this->nome} , {$this->descricao} , {$this->preco}" . PHP_EOL;
    }

    function __destruct()
    {
        echo "iniciando o metodo destrutor principal" . PHP_EOL;
    }
}

$tv = new Produto ('TV', 'Super Amoled', 9050);
echo $tv -> mostraProduto();


?>



































<?php

class Item
{
    var $nome;
    var $descricao;
    var $preco;

    function __construct(string $nome, string $descricao, float $preco)
    {
        $this->nome         = $nome;
        $this->descricao    = $descricao;
        $this->preco        = $preco;
    }

    function mostraProduto ()
    {
       return "{$this->nome} , {$this->descricao} , {$this->preco}" . PHP_EOL; 
    }

    function __destruct()
    {
        echo "iniciando o metodo destrutor" . PHP_EOL;
    }
}

$geladeira = new Item ('Geladeira', 'Frost Free Eletrolux 2k litros', 5700);
echo $geladeira -> mostraProduto();
