<?php

$contasCorrentes= [
    '123.456.789-10' => [
        'titular' => 'Italo',
        'saldo' => 1000
    ] ,
    '123.456.789-11' =>[
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    '123.456.789-12' =>[
        'titular' => 'Alberto',
        'saldo' => 300
    ]
];

$contasCorrentes ['123.456.789-13'] = [
        'titular' => 'Claudia',
        'saldo' => 5000
];


foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . " " . $conta['titular'] . PHP_EOL;
}