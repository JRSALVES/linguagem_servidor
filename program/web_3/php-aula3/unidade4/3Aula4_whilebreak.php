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
  <h2>Exemplo #3</h2>
  <h3>Laço de repetição: while / break</h3>
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
    <h1>Veja aqui o exemplo #3</h1>
 <?php
/*---------------------------------------------------------------------*
 *                  exemplo #3 :Comando while /break                   *
 *---------------------------------------------------------------------*/
?>
<h1> do while </h1>
<?php
$i = 0;
 
for ($x = 0; $x < 10; $x++) {
  if ($x == 4) {
    echo "parei aqui <br>";
    break;
  }
  echo "O número é: $x <br>";
}
?>
 