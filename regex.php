<?php

$telefones = [
    '(25) 99999 - 9999',
    '(31) 98888 - 8888',
    '(41) 97777 - 7777',
];

foreach($telefones as $telefone) {
    $regex = '/^(\([0-9]{2}\)) 9?[0-9]{4} - [0-9]{4}$/';
    $telefoneValido = preg_match(
        $regex,
        $telefone,
        $verificacoes,
    );

    // var_dump($verificacoes);
    echo ($telefoneValido) ? 'Telefone Válido' : 'Telefone Inválido';
    echo PHP_EOL;

    echo preg_replace(
        $regex,
        '(XX) \2',
        $telefone,
    ) . PHP_EOL;
}