<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style_login.css">
    <title>Login_DB</title>
</head>

<body>
    <div class="container">
        <div class="login-container">
            <?php
            session_start();

            // Tenta conectar ao banco de dados
            $mysql = mysqli_connect("localhost", "root", "", "db_php");

            // Verifica se houve erro na conexão
            if (!$mysql) {
                // Se falhou, exibe a mensagem de erro
                echo "Erro de conexão: " . mysqli_connect_error() . '<br>';
            } else {
                // Se a conexão foi bem-sucedida
                echo "Conexão bem-sucedida ao banco de dados!<br><br>";
            }

            // O resto do código continua abaixo...


            // Verificando se os dados de login foram enviados
            if (array_key_exists('email', $_POST) && array_key_exists('senha', $_POST)) {
                // Usando prepared statement para evitar injeção SQL
                $stmt = $db->prepare("SELECT * FROM usuarios WHERE email = :email");
                $stmt->bindParam(':email', $_POST['email']);
                $stmt->execute();

                $linha = $stmt->fetch();

                // Verificando se o usuário existe e se a senha é válida
                if ($linha && password_verify($_POST['senha'], $linha['senha'])) {
                    // Armazenando o ID do usuário na sessão
                    $_SESSION['usuario_id'] = $linha['id'];
                    $usuario = $linha;
                } else {
                    echo "<p style='color: red;'>Email ou senha incorretos!</p>";
                }
            }

            // Verificando se o usuário já está logado
            if (array_key_exists('usuario_id', $_SESSION) && $_SESSION['usuario_id'] && !isset($usuario)) {
                // Consultando os dados do usuário logado
                $stmt = $db->prepare("SELECT * FROM usuarios WHERE id = :id");
                $stmt->bindParam(':id', $_SESSION['usuario_id']);
                $stmt->execute();
                $usuario = $stmt->fetch();
            }
            ?>

            <?php
            if (isset($usuario)) {
                // Exibindo dados do usuário logado
            ?>
                <h1>Seja bem-vindo " <?php echo htmlspecialchars($usuario['nome']); ?>"!</h1>
                <p>O seu e-mail é: <?php echo htmlspecialchars($usuario['email']); ?></p>
            <?php
            } else {
                // Exibindo formulário de login
            ?>
                <h1>Faça o seu Login</h1>
                <form action="" method="POST">
                    <div>
                        <label for="email">E-mail</label>
                        <input type="email" id="email" name="email" required />
                    </div>
                    <div>
                        <label for="senha">Senha</label>
                        <input type="password" id="senha" name="senha" required>
                    </div>
                    <button type="submit">Login</button>
                </form>
            <?php
            }
            ?>
        </div>
    </div>
</body>

</html>