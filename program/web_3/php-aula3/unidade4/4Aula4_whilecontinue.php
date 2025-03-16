<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Template</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

<h2>Elementos Básicos do PHP-Parte II</h2>
<p>Nesta aula trataremos controle de Fluxo (while e for)</p>

<header>
  <h2>Exemplo #4</h2>
  <h3>Laço de repetição: while / continue</h3>
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
    <h1>Veja aqui o exemplo #4</h1>
 <?php
/*---------------------------------------------------------------------*
 *                  exemplo #4 :Comando while / continue                  *
 *---------------------------------------------------------------------*/
?>
<h1> while - Continue </h1>
<?php
for ($x = 0; $x < 10; $x++) {
  if ($x == 4) {
    echo "............> <br>";
    continue;
  }
  echo "O número é: $x <br>";
  echo ">>>>>>>>>>>>>>>>>>>>>>>>>.. <br>";
  echo "<<<<<<<<<<<<<<<<<<<<<<<<< <br>";
}
?>