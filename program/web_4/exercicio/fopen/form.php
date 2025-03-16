<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário e Leitura de Arquivo</title>
</head>

<body>

    <h1>Qual o seu nome?</h1>
    <form method="POST">
        <input type="text" name="nome" placeholder="Digite seu nome">
        <button type="submit">Enviar</button>
    </form>

    <?php
    // Caminho do arquivo
    $filename = '/opt/lampp/htdocs/jrs/linguagem_servidor/program/web_4/exercicio/img/nome.txt';

    // Verifica se o formulário foi enviado
    if (isset($_POST['nome'])) {
        // Abre o arquivo para adicionar o nome
        $fh = fopen($filename, 'a+');
        if (!$fh) {
            die("Erro ao abrir o arquivo: " . error_get_last()['message']);
        }

        // Grava o nome no arquivo
        fwrite($fh, $_POST['nome'] . "\n");  // Adiciona uma nova linha
        fclose($fh); // Fecha o arquivo

        echo "Nome gravado com sucesso!";
    }
    ?>

    <hr>

    <!-- Botão para ler o conteúdo do arquivo -->
    <h2>Ler Conteúdo do Arquivo</h2>
    <form method="POST">
        <button type="submit" name="ler_arquivo">Ler Arquivo</button>
    </form>

    <?php
    // Verifica se o botão de leitura foi pressionado
    if (isset($_POST['ler_arquivo'])) {
        // Verifica se o arquivo existe
        if (!file_exists($filename)) {
            die("Erro: O arquivo $filename não existe!");
        }

        // Abre o arquivo para leitura
        $fh = fopen($filename, 'r');
        if (!$fh) {
            die("Erro ao abrir o arquivo para leitura!");
        }

        // Lê o conteúdo do arquivo
        $conteudo = fread($fh, filesize($filename));
        fclose($fh); // Fecha o arquivo

        // Verifica se o conteúdo não está vazio
        if (!empty($conteudo)) {
            // Divide o conteúdo por linhas (cada nome está em uma linha separada)
            $nomes = explode("\n", $conteudo);  // Divide a string por quebras de linha

            // Exibe cada nome como um item de lista
            echo "<ul>";
            foreach ($nomes as $nome) {
                $nome = trim($nome); // Remove espaços extras
                if (!empty($nome)) {
                    echo "<li>" . htmlspecialchars($nome) . "</li>";
                }
            }
            echo "</ul>";
        } else {
            // Caso o arquivo esteja vazio
            echo "O arquivo está vazio.";
        }
    }
    ?>

</body>

</html>