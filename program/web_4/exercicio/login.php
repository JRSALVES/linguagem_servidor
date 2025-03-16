<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="/jrs/linguagem_servidor/program/css/style_login.css">
</head>

<body>

    <div class="container">
        <div class="login-container">
            <?php
            session_start();

            // Usuários e senhas (em um sistema real, use um banco de dados)
            $usuarios = [
                'matheus' => [
                    'senha' => '123456',
                    'mensagens' => 42
                ],
                'joao' => [
                    'senha' => 'joao_eh_demais',
                    'mensagens' => 12
                ],
                'maria' => [
                    'senha' => '123',
                    'mensagens' => 0
                ],
            ];

            // Verifica se o formulário foi submetido
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $usuario = $_POST['usuario'] ?? '';
                $senha = $_POST['senha'] ?? '';

                // Verifica se as informações do usuário e senha são válidas
                if (!empty($usuario) && !empty($senha) && array_key_exists($usuario, $usuarios) && $usuarios[$usuario]['senha'] === $senha) {
                    $_SESSION['usuario'] = $usuario; // Inicia a sessão com o usuário
                } else {
                    $erro = "Usuário ou senha inválidos!";
                }
            }

            // Se o usuário estiver logado
            if (isset($_SESSION['usuario'])) {
                $dados_usuario = $usuarios[$_SESSION['usuario']];
            ?>
                <h1>Seja bem-vindo, "<?php echo htmlspecialchars($_SESSION['usuario']); ?>"!</h1>
                <p>Você tem <?php echo $dados_usuario['mensagens']; ?> mensagens não lidas.</p>
                <a href="logout.php">Sair</a>
            <?php
            } else {
            ?>
                <h1>Faça seu login!</h1>

                <?php if (isset($erro)) {
                    echo "<p style='color: red;'>$erro</p>";
                } ?>

                <form action="" method="post">
                    <div class="input-group">
                        <label for="usuario">Usuário: </label>
                        <input type="text" id="usuario" name="usuario" required>
                    </div>
                    <div class="input-group">
                        <label for="senha">Senha: </label>
                        <input type="password" id="senha" name="senha" required>
                    </div>
                    <button type="submit">Login</button>
                </form>
            <?php
            } // Fim do if
            ?>
        </div>
    </div>

</body>

</html>