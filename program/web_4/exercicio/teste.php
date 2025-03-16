<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Criar diretório se não existir
$path = $_SERVER['DOCUMENT_ROOT'] . '/jrs/linguagem_servidor/program/web_4/exercicio/img';
if (!file_exists($path)) {
    mkdir($path, 0777, true);
}

// Criar o arquivo teste1.txt
$file_path = $path . '/teste1.txt';
$fh = fopen($file_path, 'w');
if (!$fh) {
    die("Erro ao criar o arquivo em $file_path");
}
fwrite($fh, "Arquivo criado com sucesso!");
fclose($fh);

echo "Arquivo criado com sucesso em: $file_path";
