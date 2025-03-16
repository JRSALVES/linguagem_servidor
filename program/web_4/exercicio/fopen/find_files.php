<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FIND_FILES</title>
</head>

<body>
    <?php
    // Usa a função scandir para listar os arquivos no diretório 'img' usando o caminho absoluto
    $arquivos = scandir('/opt/lampp/htdocs/jrs/linguagem_servidor/program/web_4/exercicio/img/');

    // Exibe os arquivos dentro do diretório
    echo '<ul>';

    foreach ($arquivos as $arquivo) {
        // Ignora os diretórios '.' e '..'
        if ($arquivo != '.' && $arquivo != '..') {
            // Exibe cada arquivo como um item da lista
            echo '<li>' . $arquivo . '</li>';
        }
    }

    echo '</ul>';
    ?>
</body>

</html>