<?php

class Conta
{
public $cpfTitular;
public $nomeTitular;
public $saldo = 0;


public function sacar (float $valorSaque)
{

if ($valorSaque > $this->saldo){

    echo 'Saldo indisponivel para saque';
    return;
}

    $this->saldo -= $valorSaque;



}

public function depositar(float $valorDeposito){

    if ($valorDeposito < 0){
        echo "O valor precisa ser maior que 0.";
        return;
    }

        $this->saldo += $valorDeposito;


}

    public function transferir($valorTransferir, $contaDest){

        if ($valorTransferir > $this->saldo){
            echo "Valor indisponivel para transferencia";
            return;
        }

            $this->sacar($valorTransferir);
            $contaDest->depositar($valorTransferir);

    }

}

$Conta1 = new Conta();
$Conta2 = new Conta();


$Conta1 -> nomeTitular = 'Thailan';
$Conta1 -> saldo = 2700;
$Conta1 -> cpfTitular = '123.456.789.00';
//$Conta1 ->sacar(800);
//$Conta1 -> depositar(1200);
$Conta1 -> transferir(2800, $Conta2);

var_dump($Conta2);
var_dump($Conta1);


