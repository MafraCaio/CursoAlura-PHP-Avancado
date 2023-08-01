<?php

require 'funcoes.php';

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

    // Saques
    $contaCorrente[1] = saque($contaCorrente[1], 250.00);
    $contaCorrente[3] = saque($contaCorrente[3], 250.00);

    // Depositos
    $contaCorrente[0] = deposito($contaCorrente[0], 5000.00);
    $contaCorrente[2] = deposito($contaCorrente[2], -100.00);
    unset($contaCorrente[2]);

    ?>

    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <h1>Contas correntes</h1>
        <dl>
            <?php foreach($contaCorrente as $cpf => $conta){ ?>
            <dt>
                <h3><?= $conta['titular'];?> - <?=$cpf?></h3>
            </dt>
            <dd>
                <?= "Saldo: $conta[saldo]" ?>;
            </dd>
            <?php } ?>
        </dl>
    </body>
    </html>


