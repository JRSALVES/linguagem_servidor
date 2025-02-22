<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Template</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

<h2>Elementos Básicos do PHP-Parte I xxx</h2>
<p>Nesta aula trataremos variáveis e controle de Fluxo (if, case)</p>

<header>
  <h2>Exemplo #7</h2>
  <h3>String</h3>
</header>

<section>
  <nav>
    <ul>
   <?php
/*---------------------------------------------------------------------*
 *                  exemplo # : require                *
 *---------------------------------------------------------------------*/ 
require "menu.php";

?>
    </ul>
  </nav>
  
  <article>
    <h1>Veja aqui o exemplo #7</h1>
 <?php
/*---------------------------------------------------------------------*
 *                  exemplo #2 : require                *
 *---------------------------------------------------------------------*/ 

$nomex = "João da Silva";
$mensagem = 'Seja bem-vindo(a)';
$mensagem_final = $mensagem . ',' . $nomex; // 'Seja bemvindo(a), João da Silva'
echo($mensagem_final)
?>