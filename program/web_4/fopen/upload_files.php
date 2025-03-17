<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPLOAD_FILES</title>
</head>

<body>
    <?php
    function is_jpg($name)
    {
        return substr($name, -4) === '.jpg';
    }

    // Verifica se um arquivo foi enviado
    if (array_key_exists('arquivo', $_FILES)) {
        $f = $_FILES['arquivo'];

        // Verifica se o arquivo enviado é um jpg
        if (!is_jpg($f['name'])) {
            echo '<p style="color:red">Erro! Envie apenas JPGs!</p>';
        } else {
            // Caminho absoluto para salvar o arquivo
            $target = '/opt/lampp/htdocs/jrs/linguagem_servidor/program/web_4/exercicio/img/' . date('U') . $f['name'];

            // Move o arquivo para o diretório 'img' com um nome único
            if (move_uploaded_file($f['tmp_name'], $target)) {
                echo '<p style="color:green">Arquivo enviado com sucesso!</p>';
            } else {
                echo '<p style="color:red">Erro ao mover o arquivo.</p>';
            }
        }
    }
    ?>

    <h1>Adicione uma foto</h1>
    <form enctype="multipart/form-data" method="POST">
        <input type="file" name="arquivo">
        <button type="submit">Enviar</button>
    </form>

    <h2>Fotos enviadas</h2>

    <?php
    // Lê os arquivos do diretório 'img'
    $fotos = scandir('/opt/lampp/htdocs/jrs/linguagem_servidor/program/web_4/exercicio/img');

    // Exibe as imagens .jpg
    foreach ($fotos as $f) {
        if (is_jpg($f)) {
            // Caminho absoluto para exibir a imagem corretamente
            echo '<img src="http://localhost/jrs/linguagem_servidor/program/web_4/exercicio/img/' . $f . '" width="300" alt="Imagem"/>';
        }
    }
    ?>

</body>

</html>