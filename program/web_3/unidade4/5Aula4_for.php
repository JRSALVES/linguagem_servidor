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
  <h2>Exemplo #5</h2>
  <h3>Laço de repetição: for</h3>
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
    <h1>Veja aqui o exemplo #5</h1>
 <?php
/*---------------------------------------------------------------------*
 *                  exemplo #4 :Comando while / continue                  *
 *---------------------------------------------------------------------*/
?>
<h1> for </h1>
                                  
<?php
for ($i=0; $i <= 4; $i++) {
    echo $i."<br>";
}


?>