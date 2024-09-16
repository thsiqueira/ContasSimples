<?php

include "comportamento2.php";

function mostraValores($a, $b){
    echo "Os valores são: $a e $b" . PHP_EOL;
}

function mostraOperacao($sinal, $a, $b) {
        switch ($sinal) {
            case '+':
                echo 'Adição: ' . retornaSoma($a, $b) . PHP_EOL;
                break;
            case '-':
                echo 'Subtração: ' . retornaSubtracao($a, $b) . PHP_EOL;
                break;
            case '*':
                echo 'Multiplicação: ' . retornaMultiplicacao($a, $b) . PHP_EOL;
                break;
            case '/':
                echo 'Divisão: ' . retornaDivisao($a, $b) . PHP_EOL;        
    }
}