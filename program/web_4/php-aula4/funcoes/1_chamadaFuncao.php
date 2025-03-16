<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Template</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

<h2>Funções em PHP e Controle de sessões</h2>
<p>Nesta aula trataremos a criação e manipulação de funções e o manipulação de sessões</p>

<header>
  <h2>Exemplo #1</h2>
  <h3>Chamada de Função</h3>
</header>

<section>
  <nav>
    <ul>
      <li><a href="1_chamadaFuncao.php">Chamada de Função</a></li>
       <li><a href="2_passarparametro.php">Função - Passagem Parâmetro</a></li>
      <li><a href="3_parametrovalor.php">Passagem parâmetro-Exemplo2</a></li>
      <li><a href="4_parametroreferencia.php">Função: Parâmetro por referência</a></li>
      <li><a href="5_sessao.php">Iniciar Sessão do Usuárior</a></li>
      <li><a href="6_grava_Login.php">Grava Login</a></li>
      <li><a href="8_premio.php">Recupera dados da sessão</a></li>
      <li><a href="index.php">Tela Inicial</a></li>
    </ul>
  </nav>
  
  <article>
    <h1>Veja aqui o exemplo #1</h1>
 <?php
/*---------------------------------------------------------------------*
 *                  exemplo #1 :Chamada de Função                          *
 *---------------------------------------------------------------------*/


echo "<h1>Exemplo de função: Declaração e Chamada</h1>";
dizer_ola_mundo(); // chamada da função
/*----------------------------------------------------------*
 *                     Declaração da função                 *
 *----------------------------------------------------------*/
function dizer_ola_mundo(){ // declaração da função
  
    echo "Olá mundo-04/11/2024<br>";
    }
 /*--------------------------------------------------------*
  *                    Sucessivas chamadas                 *
  *--------------------------------------------------------*/
  
    
    dizer_ola_mundo(); // chamada da função
    dizer_ola_mundo(); // chamada da função    
?>