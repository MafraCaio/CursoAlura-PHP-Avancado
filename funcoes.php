<?php

    function exibeMensagem(string $mensagem) {
        echo $mensagem . '<br>';
    }

    function saque(array $conta, float $valor): array
    {
        if($valor > $conta['saldo']){
            exibeMensagem("{$conta['titular']} voce não pode sacar um valor maior que seu saldo");
        } else {
            $conta['saldo'] -= $valor;
        }
        return $conta;   
    }

    function deposito(array $conta, float $valor): array 
    {
        if($valor > 0){
            $conta['saldo'] += $valor;
        } else {
            exibeMensagem("{$conta['titular']} não é possivel depositar um valor negativo");
        }
        return $conta;
    }

    