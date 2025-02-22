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
  <h2>Exemplo #4</h2>
  <h3>if...else...</h3>
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
    <h1>Veja aqui o exemplo if simples</h1>
 <?php
/*---------------------------------------------------------------------*
 *                  exemplo #2 : require                *
 *---------------------------------------------------------------------*/ 
$idade = 16;
if ($idade >= 18) {
    echo 'Você é maior de idade';
    } else if ($idade >= 16) {
    echo 'Você é menor de idade, mas pode votar';
    } else {
    echo 'Você é menor de idade e não pode votar';
    }
?>