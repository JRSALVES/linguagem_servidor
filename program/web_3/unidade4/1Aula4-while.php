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
  <h2>Exemplo #1</h2>
  <h3>Laço de repetição: while </h3>
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
 *                  exemplo #1 :Comando while                          *
 *---------------------------------------------------------------------*/
?>
<h1> teste </h1>
<?php
$indice = 11;
while ($indice <= 10) {
    ?>
    <br>
    <?php
    echo $indice *7;
   
    $indice++;
}
?>
<br>
==================