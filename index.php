<?php

require 'funcoes.php';

$contasC = [
    '84948949' => [
        "titular" => "Thailan",
        "saldo" => 2000],
    '4565165161' => [
        "titular" => "Luan",
        "saldo" => 4000
    ],
    '484654654' => [
        "titular" => "Milena",
        "saldo" => 6000
    ]
];

$contasC['40028922'] = [
    "titular" => "Josemar",
    "saldo" => 3000
];

letrasUp($contasC['84948949']);

$contasC['40028922'] = sacar($contasC['40028922'], 500);

unset($contasC['40028922']);


foreach ($contasC as $cpf => $contasCorrentes) {

    ['titular'=>$titular , 'saldo' => $saldo] = $contasCorrentes;

    echo $cpf . '</br>' . $titular . '</br>' . $saldo. '</br>' . PHP_EOL;

}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Conta Corrente</title>
</head>
<body>
<h1>Contas Correntes</h1>


    <?php foreach ($contasC as $cpf => $contasCorrentes){ ?>
        <dl>
            <dt>
               <?= $contasCorrentes['titular']; ?> - <?= $cpf ?>;
            </dt>
            <dt>
                <?=  $contasCorrentes['saldo']; ?>
            </dt>
        <?php  }  ?>
        </dl>

</body>
</html>




