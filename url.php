<?php

$url = 'https://alura.com.br';

echo (str_starts_with($url, 'https')) ? 'É uma url segura' : 'Não é uma url segura';
echo PHP_EOL;

echo (str_ends_with($url, '.br')) ? 'É um domínio do Brasil' : 'Não é um domínio do Brasil';
echo PHP_EOL;
