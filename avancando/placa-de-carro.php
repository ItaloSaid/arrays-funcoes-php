<?php

$carros = [
    'LMS-2232' => [
        'marca' => 'VW',
        'modelo' => 'Golf'
    ],
    'KLM-1324' => [
        'marca' => 'Ford',
        'modelo'=> 'Fiesta'
    ],
    'OPN-5612' => [
        'marca' => 'Fiat',
        'modelo' => 'Uno'
    ]
];

foreach ($carros as $placas => $carro){
    echo $placas . ": " . $carro['marca'] . PHP_EOL;
}