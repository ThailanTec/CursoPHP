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

foreach ($contasC as  $contasCorrentes) {

    echo $contasCorrentes['titular'] . PHP_EOL;

}