<?php

$email = 'WaddínsOHN@gmail.com';
$senha = '123ã';

echo (strlen($senha) < 8) ? 'Senha insegura' : 'Senha segura';
echo PHP_EOL;
$posicaoArroba = strpos($email, '@');

$usuario = substr($email, 0, $posicaoArroba);

echo mb_strtoupper($usuario) . PHP_EOL;
echo substr($email, $posicaoArroba + 1) . PHP_EOL;
