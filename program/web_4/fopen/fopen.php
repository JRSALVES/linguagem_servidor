<?php
// Criar diretório se não existir
if (!file_exists('img')) {
    mkdir('img', 0777, true);
}

// Criar arquivo
$fh = fopen('img/teste1.txt', 'w');
if (!$fh) {
    die("Erro ao criar o arquivo!");
}
fwrite($fh, "Arquivo criado com sucesso!\n");
fclose($fh);
echo "Arquivo criado com sucesso!<br>";

// Abrir o arquivo para leitura
$fh = fopen('img/teste1.txt', 'r');
if (!$fh) {
    die("Erro ao abrir o arquivo para leitura!");
}

// Ler conteúdo do arquivo
$conteudo = fread($fh, filesize('img/teste1.txt'));
fclose($fh);
echo "Conteúdo do arquivo: <br><pre>$conteudo</pre>";
