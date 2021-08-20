<?php

$contasC = [
    '84948949' => [
        "titular" => "Thailan",
        "saldo" => 2000],
    '4565165161' => [
        "titular" => "Luan",
        "saldo" => 1500
    ],
    '484654654' => [
        "titular" => "Milena",
        "saldo" => 5400
    ]
    ];

$contasC['40028922'] = [
    "titular" => "Josemar",
    "saldo" => 4855
];

$contasC['84948949']['saldo'] += 500;


foreach ($contasC as $cpf => $contasCorrentes) {

    echo $cpf . '</br>' . $contasCorrentes['titular'] . '</br>' . $contasCorrentes['saldo'] . PHP_EOL;

}
