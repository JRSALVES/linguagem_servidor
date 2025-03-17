<?php
// Função para verificar se o arquivo é uma imagem JPG
function is_jpg($name)
{
    return substr($name, -4) === '.jpg';
}

// Verifica se o arquivo foi enviado
if (array_key_exists('arquivo', $_FILES)) {
    $f = $_FILES['arquivo'];

    // Verifica se o arquivo enviado é uma imagem JPG
    if (!is_jpg($f['name'])) {
        echo "<p>Erro! Envie apenas JPGs.</p>";
    } else {
        // Cria uma imagem a partir do arquivo enviado
        $img = imagecreatefromjpeg($f['tmp_name']);

        // Define o nome final para salvar a imagem no diretório
        $nome_final = '/opt/lampp/htdocs/jrs/linguagem_servidor/program/web_4/exercicio/img/' . date('U') . $f['name'];

        // Redimensiona a imagem para 300x300 pixels
        $quadrada = imagescale($img, 300, 300);

        // Aplica filtro, se selecionado
        if ($_POST['filtro'] > -1) {
            imagefilter($quadrada, $_POST['filtro']);
        }

        // Salva a imagem no diretório
        imagejpeg($quadrada, $nome_final);

        echo "<p>Imagem enviada com sucesso!</p>";
    }
}
?>

<h1>Adicione uma foto: </h1>
<form enctype="multipart/form-data" method="POST">
    <input type="file" name="arquivo" />
    <br>
    <label for="filtro">Escolha o filtro desejado</label>
    <select name="filtro" id="filtro">
        <option value="-1">Nenhum</option>
        <option value="<?php echo IMG_FILTER_GRAYSCALE ?>">Preto e Branco</option>
        <option value="<?php echo IMG_FILTER_MEAN_REMOVAL ?>">Rabisco</option>
        <option value="<?php echo IMG_FILTER_NEGATE ?>">Negativo</option>
    </select>
    <button type="submit">Enviar</button>
</form>

<h2>Fotos Enviadas</h2>

<?php
// Caminho para o diretório de imagens
$dir = "/opt/lampp/htdocs/jrs/linguagem_servidor/program/web_4/exercicio/img/"; // Diretório relativo das imagens

// Verifica se o diretório existe
if (!is_dir($dir)) {
    echo "<p style='color:red;'>Erro: O diretório de imagens não foi encontrado.</p>";
} else {
    // Obtém todos os arquivos do diretório
    $fotos = scandir($dir);

    // Exibe as imagens JPG
    foreach ($fotos as $f) {
        if ($f !== "." && $f !== ".." && is_jpg($f)) {
            // Exibe a imagem na tela com o caminho correto
            echo '<img src="http://localhost/jrs/linguagem_servidor/program/web_4/exercicio/img/' . $f . '" width="300" style="margin:5px;"/>';
        }
    }
}
?>