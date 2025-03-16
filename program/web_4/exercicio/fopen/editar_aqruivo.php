<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT_FILE</title>
</head>

<body>


    <?php
    // Habilita a exibição de erros
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    // Caminho do arquivo
    $filename = '/opt/lampp/htdocs/jrs/linguagem_servidor/program/web_4/exercicio/img/teste1.txt';

    // Verifica se o arquivo existe antes de tentar abrir
    if (!file_exists($filename)) {
        die("Erro: O arquivo $filename não existe!");
    }

    // Abre o arquivo para adicionar conteúdo (modo 'a' para acrescentar)
    $fh = fopen($filename, 'a');
    if (!$fh) {
        die("Erro ao abrir o arquivo para adicionar conteúdo!");
    }

    // Texto a ser adicionado
    $texto_adicional = "\nCORRIJINDO COM O ACRESCIMO DE UM NOVO TEXTO.";

    // Escreve o texto adicional no arquivo
    fwrite($fh, $texto_adicional);

    // Fecha o arquivo após a escrita
    fclose($fh);

    // Confirmação de sucesso
    echo "<h3>Texto adicionado com sucesso!</h3>";
    ?>
</body>

</html>