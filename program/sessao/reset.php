<?php
session_start();
session_destroy(); // Destroi todos os dados da sessão
header("Location: index.php"); // Redireciona para a página principal
exit;
?>
