<?php
session_start(); // Inicia a sessão
session_destroy(); // Destroi a sessão, removendo todos os dados de login

// Redireciona o usuário para a página inicial
header("Location: login.php");
exit(); // Encerra o script