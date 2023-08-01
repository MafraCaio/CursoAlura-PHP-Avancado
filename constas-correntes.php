<?php

    $conta1 = [
        'titular' => 'Caio',
        'saldo' => 15000.00
    ];
    $conta2 = [
        'titular' => 'João',
        'saldo' => 150000.00
    ];
    $conta3 = [
        'titular' => 'Camila',
        'saldo' => 1500000.00
    ];

    $contaCorrente = [$conta1, $conta2, $conta3];

    for($i = 0; $i < count($contaCorrente); $i++){
        echo $contaCorrente[$i]['titular'] . PHP_EOL;
    }