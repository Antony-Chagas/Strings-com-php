<?php

$nome = 'Vinícius Dias';
$email = ' vinícius@alura.com.br ';
$senha = 'áéíóú';

echo strlen($senha) . PHP_EOL;

if (strlen($senha) < 8) {
    echo 'Senha insergura' . PHP_EOL;
}

$posicaoDoArroba = strpos($email, '@');

$usuario = substr($email, 0, $posicaoDoArroba);

echo strtoupper($usuario) . PHP_EOL;
echo substr($email, $posicaoDoArroba + 1) . PHP_EOL;

list($nome, $sobrenome) = explode(' ', $nome);

echo 'Nome: ' . $nome . PHP_EOL;
echo 'Sobrenome: ' . $sobrenome . PHP_EOL;

$csv = 'Vinicius Dias,24,vinicius@alura.com.br';
var_dump(explode(',', $csv));

echo trim($email) . PHP_EOL;