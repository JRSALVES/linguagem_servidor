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
  <h2>Exemplo #2</h2>
  <h3>Chamada de Função com passagem de parâmetro</h3>
</header>

<section>
  <nav>
    <ul>
      <li><a href="1_chamadaFuncao.php">Chamada de Função</a></li>
       <li><a href="2_passarparametro.php">Função - Passagem Parâmetro</a></li>
      <li><a href="3_parametrovalor.php">Passagem parâmetro-Exemplo2</a></li>
      <li><a href="4_parametroreferencia.php">Função: Parâmetro por referência</a></li>
      <li><a href="5_sessao.php">Iniciar Sessão do Usuárior</a></li>
      <li><a href="8_premio.php">Recupera dados da sessão</a></li>
      <li><a href="index.php">Tela Inicial</a></li>
    </ul>
  </nav>
  
  <article>
    <h1>Veja aqui o exemplo #2</h1>
 <?php
/*---------------------------------------------------------------------*
 *                  exemplo #2 :Chamada de Função com passagem de parâmetro                         *
 *---------------------------------------------------------------------*/

/*----------------------------------------------------------*
 *                     Declaração da função                 *
 *----------------------------------------------------------*/
function informaIntervaloIMC($valorRecebido){ // declaração da função
    
    echo "<h1>Exemplo de função com passagem de parâmetros</h1>";
    //
    echo "<h2>O IMC recebido foi: ".$valorRecebido."</h2>";
    
    echo "<h2>-----------------------------------------</h2>";
    return 0;

    }
 /*--------------------------------------------------------*
  *                    Sucessivas chamadas                 *
  *--------------------------------------------------------*/
  $valorDOIMC=135;
  

  informaIntervaloIMC($valorDOIMC );  
    
    
?>