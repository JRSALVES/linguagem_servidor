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
  <h2>Exemplo #6</h2>
  <h3>if encadeado</h3>
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
    <h1>Veja aqui o exemplo de if encadeado</h1>
 <?php
/*---------------------------------------------------------------------*
 *                  exemplo #2 : require                *
 *---------------------------------------------------------------------*/ 
?>
<h1> O seu pedido está:
<?php
$status = 3;
if ($status == 0) {
   echo "Aguardando confirmação";
} else if ($status == 1) {
       echo "Sendo preparado";
       } else if ($status == 2) {
             echo "A caminho";
             } else if ($status == 3) {
               echo "Entregue";
               } else {
                 echo "Desconhecido";
                }
?>
</h1>