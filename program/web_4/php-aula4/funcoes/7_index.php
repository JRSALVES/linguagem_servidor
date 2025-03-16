<?php require_once '6_sessao.php'; ?>
<h1>
A sua sessão foi iniciada em:<br>
<?php echo $_SESSION['ultimo_login']?>
<br>e você já fez<br>
<?php echo $_SESSION['reqs']?> requisições
</h1>