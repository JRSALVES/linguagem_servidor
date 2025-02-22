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
  <h2>Exemplo #5</h2>
  <h3>switch...case</h3>
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
    <h1>Veja aqui o exemplo do uso de case</h1>
 <?php
/*---------------------------------------------------------------------*
 *                  exemplo #2 : require                *
 *---------------------------------------------------------------------*/ 
?>
<h1> O seu pedido está:</h1>
<?php
$status = 0;
switch ($status) {
    case 0:
        echo 'Aguardando confirmação';
         break;
    case 1:
        echo 'Sendo preparado';
        break;
    case 2:
        echo 'A caminho';
        break;
    case 3:
        echo 'Entregue';
        break;
    default: // caso não se encaixe em nenhuma outra
        echo 'Desconhecido';
        break;
}
?>
