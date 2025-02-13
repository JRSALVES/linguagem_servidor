<?php require_once 'session.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de Sessão</title>
</head>
<body>
    <h1>
        A sua sessão foi iniciada em
        <?php echo $_SESSION['ultimo_login']; ?>
        e você já fez 
        <?php echo $_SESSION['reqs']; ?> requisições.
    </h1>

    <?php require_once 'premio.php'; ?>

    <br>
    <a href="reset.php">
        <button>Resetar Sessão</button>
    </a>
</body>
</html>
