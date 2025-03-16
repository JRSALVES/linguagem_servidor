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
  <h2>Exemplo #4</h2>
  <h3>Chamada de Função com passagem de parâmetro por referência</h3>
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
    <h1>Veja aqui o exemplo #4</h1>
 <?php
/*---------------------------------------------------------------------*
 *                  exemplo #4 :Chamada de Função com passagem de parâmetro por referência                        *
 *---------------------------------------------------------------------*/
$idade = 20;
echo "<h1>Exemplo de função com passagem de parâmetros por referência</h1>";
echo "<h2>Parâmetro: por REFERÊNCIA</h1>";



/*--------------------------------------------------------*
 *                    chamada da função                 *
 *--------------------------------------------------------*/
Function  modifica(&$valorRecebido) { 
  echo 'Internamente (antes>>>>): ' . $valorRecebido . '<br>'; 
  $valorRecebido = 100; 
  echo 'Internamente (depois): ' . $valorRecebido . '<br>'; 
}

echo "Valor da vaiável <strong> idade   </strong> <em> antes</em> da  chamada da função :" .$idade. '<br>'; 
  modifica($idade); 
  echo "Valor da vaiável <strong> idade   </strong> <em>após</em> chamada da função :" .$idade ; 
  /*----------------------------------------------------------*
  ?>
*                     Declaração da função                 *
*----------------------------------------------------------*/

