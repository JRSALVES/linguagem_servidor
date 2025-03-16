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
  <h2>Exemplo #7</h2>
  <h3>Tratamento de array com foreach</h3>
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
 *                  exemplo #7 : array  com foreach                    *
 *---------------------------------------------------------------------*/
  $listaNomes = ["André1xx", "Bruno2xx", "Carlos3", "Diego4", "Eduardo5"];
 ?>
  <ul>
  <?php 
    foreach($listaNomes as $meuItem){
         if ($meuItem!="Carlos3"){
          echo "<li>$meuItem Você eh LINDO</li>"; 
         }
         echo "<li>$meuItem </li>"; 
        }
  ?> 
</ul>