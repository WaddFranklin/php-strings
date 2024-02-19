<?php

$nome = 'Franklin Nascimento';
$ehDaMinhaFamília = str_contains($nome, 'Nascimento');

echo ($ehDaMinhaFamília) ? "{$nome} é da minha família" . PHP_EOL : "{$nome} não é da minha família" . PHP_EOL;
