<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Template</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>

<h2>Elementos Básicos do PHP-Parte II</h2>
<p>Nesta aula trataremos controle de Fluxo (while e for)</p>

<header>
  <h2>Exemplo #6</h2>
  <h3>Tratamento de array</h3>
</header>

<section>
  <nav>
    <ul>
      <li><a href="1Aula4-while.php">Comando while</a></li>
       <li><a href="2Aula4-dowhile.php">Comando do while</a></li>
      <li><a href="3Aula4_whilebreak.php">while com break</a></li>
      <li><a href="4Aula4_whilecontinue.php">while com continue</a></li>
      <li><a href="5Aula4_for.php">comando for</a></li>
      <li><a href="6Aula4_array.php">Array</a></li>
      <li><a href="7Aula4_arrayforeach.php">Array com foreach</a></li>
      <li><a href="index.php">Tela Inicial</a></li>
    </ul>
  </nav>
  
  <article>
    <h1>Veja aqui o exemplo #6</h1>
 <?php
/*---------------------------------------------------------------------*
 *                  exemplo #6 : array                                  *
 *---------------------------------------------------------------------*/
$nomes1 = "André";
$nomes2 = "Bruno" ;
$nomes3 =  "Carlos"; 
$nomes4 =  "Diego";
$nomes5 = "Eduardo";

?>
<ul> 
  <li><?php echo $nomes1?>  </li> 
  <li><?php echo $nomes2 ?> </li> 
  <li><?php echo $nomes3 ?> </li> 
  <li><?php echo $nomes4 ?> </li> 
  <li><?php echo $nomes5 ?> </li>
</ul>