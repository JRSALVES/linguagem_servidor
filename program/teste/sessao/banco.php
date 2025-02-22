<?php 
    // Conectar ao banco de dados
    $mysql = mysqli_connect("localhost", "jeruso", "Idy5i5t4@", "php_teste");

    // Verificar se a conexão foi bem-sucedida
    if (!$mysql) {
        die("Erro na conexão: " . mysqli_connect_error());
    } else {
        echo "<br>Conexão bem-sucedida!<br>";
    }

    // Configurar o charset
    mysqli_set_charset($mysql, 'utf8');

    // Realizar a consulta
    $resultado = mysqli_query($mysql, "SELECT * FROM usuarios");

    // Verificar se há resultados
    if ($resultado) {
        $linha = mysqli_fetch_assoc($resultado);
        echo "<br>Nome do usuário: " . $linha['nome'] . "<br>";
    } else {
        echo "<br>Erro na consulta: " . mysqli_error($mysql) . "<br>";
    }

    // Fechar a conexão (boa prática)
    mysqli_close($mysql);
?>
