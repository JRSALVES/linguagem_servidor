<?php
session_start();

// Define o fuso horário para GMT-3 (Horário de Brasília)
date_default_timezone_set('America/Sao_Paulo');

// Verifica se a sessão já tem os valores necessários, senão os inicializa
if (!isset($_SESSION['ultimo_login'])) {
    $_SESSION['ultimo_login'] = date('H:i:s d/m/Y');
}

if (!isset($_SESSION['reqs'])) {
    $_SESSION['reqs'] = 1;
} else {
    $_SESSION['reqs']++;
}
?>
