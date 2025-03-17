<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login_DB</title>
</head>

<body>
    <?php
    session_start();
    $db = new PDO('mysql:host=localhost;dbname=db_php;charset=utf8', 'root', 'Idy5i5t4@');

    if (array_key_exists('email', $_POST) && array_key_exists('senha', $_POST)) {
        $res = $db->query("SELECT * FROM 'usuarios' WHERE 'email = '{$_POST['email']}'");
        $linha = $res->fetch();

        if ($linha && $linha['senha'] == $_POST['senha']) {
            $_SESSION['usuario_id'] = $linha['id'];
            $usuario = $linha;
        }
    }

    if (array_key_exists('usuario_id', $_SESSION) && $_SESSION['usuario_id'] && !isset($usuario)) {
        // Corrigindo a consulta SQL, retirando as aspas ao redor de 'usuarios' e 'id'
        $res = $db->query("SELECT * FROM usuarios WHERE id = '{$_SESSION['usuario_id']}'");

        // Corrigindo a chamada ao método fetch()
        $usuario = $res->fetch();
    }
    ?>

    <?php
    if (isset($usuario)) {
    ?>
    <h1>Seja bem-vindo "<?php echo $usuario['nome']; ?>"!</h1>
    <p>O seu e-mail é: <?php echo $usuario['email']; ?></p>
    <?php
    } else {
    ?>
    <h1>Faça o seu Login</h1>
    <form action="" method="POST">
        <div>
            <label for="email">E-mail</label>
            <input type="text" id="email" name="email" />
        </div>
        <div>
            <label for="senha">Senha</label>
            <input type="password" id="senha" name="senha">
        </div>
        <button type="submit">Login</button>
    </form>
    <?php
    }
    ?>
</body>

</html>