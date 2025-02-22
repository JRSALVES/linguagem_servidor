<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Template</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

<h2>Elementos Básicos do PHP-Parte I</h2>
<p>Nesta aula trataremos variáveis e controle de Fluxo (if, case)</p>

<header>
  <h2>Exemplo #1</h2>
  <h3>Manipulaçao de dados</h3>
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
    <h1>Veja aqui o exemplo #1</h1>
 <?php
/*---------------------------------------------------------------------*
 *                  exemplo #4 : Acesso várias linhas  com PDO                *
 *---------------------------------------------------------------------*/ 

$idade = 20;
echo("A Idade é=  $idade anos");
?>
<p>
<?php
$idade_daqui_cinco = $idade + 5; // 25
echo("Idade + 5:  $idade_daqui_cinco");
$ano_nascimento = 2024 - $idade; // 2002
echo("<br>");
echo("Ano de Nascimentoxxxxxxxxxxxxxxxxxxxxxx:  $ano_nascimento");
?>
<p>
    <?php


$total_de_pedacos_de_bolo = $idade * 8; //160 = 8 pedaçospor aniversário
$decadas = $idade/10; // 2 décadas
$anos_desde_multiplo_de_9 = 13 / 9; // 2, pois fez 18 (9*2) há 2 anos
echo("Calcula resto (Idade / 9): $anos_desde_multiplo_de_9");
?>