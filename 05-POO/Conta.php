<?php


class Conta
{
    private string $cpfTitular;
    private string $nomeTitular;
    private float $saldo;
    private static $numeroDeContas = 0;

    public function __construct(string $cpfTitular, string $nomeTitular)
    {
        echo "Criando Nova Conta" . PHP_EOL;
        $this->cpfTitular = $cpfTitular;
        $this->validaNomeTitular ($nomeTitular);
        $this->nomeTitular = $nomeTitular;
        $this->saldo = 0;
        
        self::$numeroDeContas++;
    }

    public function sacar(float $valorASacar): void
    {
        if($valorASacar > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }   

        $this->saldo -= $valorASacar;
    }

    public function depositar(float $valorADepositar): void
    {
        if ($valorADepositar < 0){
            echo "O valor precisa ser positivo";
            return;
        }
       
            $this->saldo += $valorADepositar;
    }

    public function transferir (float $valorTransferir, Conta $contaDestino): void
    {
        if ($valorTransferir > $this->saldo){
            echo "Saldo Indiposnível";
            return;
        }
        $this->sacar($valorTransferir);
        $contaDestino->depositar($valorTransferir);
    }

    public function recuperaSaldo(): float
{
    return $this->saldo;

}

    /*public function defineCpfTitular(string $cpf): void
    {
        $this->cpfTitular = $cpf;
    }*/


    public function recuperarCpfTitular(): string
    {
        return $this->cpfTitular;
    }

    /*public function defineNomeTitular(string $nome): void
    {
        $this->nomeTitular = $nome;
    }*/
    
    public function recuperaNomeTitular(): string
    {
        $this->nomeTitular;
    }

    private function validaNomeTitular(string $nomeTitular)
    {
        if(strlen($nomeTitular) < 5){
            echo "Nome precisa ter no mínimo 5 caracteres";
            exit();
        }
    }

    public static function recuperaNumeroDeContas(): int
    {
        return self::$numeroDeContas;
    }
}