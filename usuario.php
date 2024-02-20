<?php

$nome = 'Franklín Nascimento';
$email = ' WaddínsOHN@gmail.com ';
$senha = '123ã';

// echo (strlen($senha) < 8) ? 'Senha insegura' : 'Senha segura';
// echo PHP_EOL;
$posicaoArroba = strpos($email, '@');

$usuario = substr($email, 0, $posicaoArroba);

// echo mb_strtoupper($usuario) . PHP_EOL;
// echo substr($email, $posicaoArroba + 1) . PHP_EOL;

list($nome, $sobrenome) = explode(' ', $nome);
// var_dump($nome, $sobrenome);

echo trim($email) . PHP_EOL;

echo "Nome: {$nome}" . PHP_EOL;
echo "Sobrenome: {$sobrenome}" . PHP_EOL;

$csv = 'Waddinsohn Franklin,34,waddinsohn@gmail.com,09041989';
var_dump(explode(',', $csv));
