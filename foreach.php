<?php

    $contaCorrente = [
        [
        'titular' => 'Caio',
        'saldo' => 15000.00
        ], 
        [
        'titular' => 'João',
        'saldo' => 150000.00
        ], 
        [
        'titular' => 'Camila',
        'saldo' => 1500000.00
        ]
    ];

    $contaCorrente[] = [
        'titular' => 'Claudia',
        'saldo' => 0.00
    ];

    foreach ($contaCorrente as $conta) {
        echo $conta['titular'] . PHP_EOL;
    } 