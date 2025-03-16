<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Template</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

<h2>Funções em PHP e Controle de sessões</h2>
<p>Nesta aula trataremos a criação e manipulação de funções e o manipulação de sessões</p>

<header>
  <h2>Exemplo #5</h2>
  <h3>Iniciar uma sessão do usuário</h3>
</header>

<section>
  <nav>
    <ul>
      <li><a href="1_chamadaFuncao.php">Chamada de Função</a></li>
       <li><a href="2_passarparametro.php">Função - Passagem Parâmetro</a></li>
      <li><a href="3_parametrovalor.php">Passagem parâmetro-Exemplo2</a></li>
      <li><a href="4_parametroreferencia.php">Função: Parâmetro por referência</a></li>
      <li><a href="5_sessao.php">Iniciar Sessão do Usuárior</a></li>
      <li><a href="8_premio.php">Recupera dados da sessão</a></li>
      <li><a href="index.php">Tela Inicial</a></li>
    </ul>
  </nav>
  
  <article>
    <h1>Veja aqui o exemplo #5</h1>
 <?php
/*---------------------------------------------------------------------*
 *                  exemplo #5 :Iniciar uma sessão do usuário                        *
 *---------------------------------------------------------------------*/
session_start();
if(!array_key_exists('ultimo_login', $_SESSION)){
  $_SESSION['ultimo_login'] = date('H:i:s d/m/Y');
}
if(!array_key_exists('reqs', $_SESSION)){
   $_SESSION['reqs'] = 1;
} else {
  $_SESSION['reqs']++;
}
?>
<h1>
A sua sessão foi iniciada em:<br>
<?php echo $_SESSION['ultimo_login']?>
<br>e você já fez<br>
<?php echo $_SESSION['reqs']?> requisições
</h1>