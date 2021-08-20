<?php

function sacar(array $conta, int $valorSaque) : array
{

    if ($valorSaque > $conta['saldo']){
        echo "Você não pode sacar esse valor";
    }
    else{
        $conta['saldo'] -= $valorSaque;
    }

    return $conta;

}

function depositar($conta, float $valorDeposito) : array
{

    if ($valorDeposito > 0 ){
        $conta['saldo'] += $valorDeposito;
    }else{
        echo "Valor de deposito indisponivel.";
    }




    return $conta;
}

function letrasUp( array &$conta){

    $conta['titular'] = mb_strtoupper($conta['titular']);

}