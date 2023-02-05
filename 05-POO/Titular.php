<?php

class Titular
{
    private string $cpf;
    private string $nome;


    public function __construct(string $cpf, string $nome)
    {
       $this->cpf = $cpf;
       $this->validaNomeTitular($nome);
       $this->nome = $nome; 
    }

public function recuperaCpf($cpf): string
{
    return $this->cpf;
}

public function recuperaNome($nome): string
{
    return $this->nome;
}

private function validaNomeTitular(string $nomeTitular)
{
    if(strlen($nomeTitular) < 5){
        echo "Nome precisa ter no mínimo 5 caracteres";
        exit();
    }
}






}