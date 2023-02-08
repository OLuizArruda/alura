<?php

class Funcionario extends Pessoa
{
    private string $nome;
    private string $cpf;
    private string $cargo;

    public function __construct(string $nome, CPF $cpf, string $cargo)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->cargo = $cargo;
    }

    public function recuperaNome(): string
    {
        return $this->nome;
    }

    public function recuperaCPF(): string
    {
        return $this->cpf;
    }

    public function recuperaCargo(): string
    {
        return $this->cargo;
    }

    public function alteraNome(string $nome): void
{
    $this->validaNome($nome);
    $this->nome = $nome;
}

}

