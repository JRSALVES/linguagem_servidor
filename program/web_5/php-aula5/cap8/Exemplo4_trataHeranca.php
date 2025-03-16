
<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Template</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>

<h2>Manipulação de Arquivos</h2>
<p>Nesta aula trataremos o paradigma  de <b>Orientação a Objetos</b> com PHP</p>


<header>
  <h2>Exemplo #4</h2>
  <h3>Tratamento de <b>Herança</b></h3>
</header>

<section>
  <nav>
    <ul>
      <li><a href="exemplo1.php">Classe: Criar Objeto</a></li>
      <li><a href="exemplo2.php">Construtor da Classe</a></li>
      <li><a href="exemplo3.php">Construtor Com Parâmetros</a></li>
      <li><a href="exemplo4.php">Herança</a></li>
      <li><a href="index.php">Retorna ao Menu principal</a></li>
    </ul>
  </nav>
  
  <article>
    <h1>Veja aqui o resultado </h1>
 <?php
/*---------------------------------------------------------------------*
 *                  exemplo #2 : mostrar todos os arquivos de um diretorio             *
 *---------------------------------------------------------------------*/ 

require_once 'Exemplo4_Colaborador.php';
require_once 'Exemplo4_RegistroFuncional.php';

$nomeColaborador = $_POST['nomeColaborador'];
$numFuncional = $_POST['numeroFuncional'];
$endereco = $_POST['ender'];
$registroFunc = new RegistroFuncional($nomeColaborador, $endereco , $numFuncional);
?>
<table border=”1”>
   <tbody>
    <tr>
    <th colspan="2"><img src="img/exemplo4.png"></th>
  </tr>
  <tr> 
    <td><b>Super Classe</b> </td> <td><i>Colaborador</i></td>
  </tr>
  <tr> 
    <td><b>Classe Filha </b> </td> <td><i>RegistroFuncional</i></td>
  </tr>
  
   </tbody>
  </table>

<?php
$registroFunc->mostraDadosDoColaborador();
$registroFunc->setNumerCarteiraProfissional("SP1234");
$registroFunc->setValorDaRenumeracao(11890.00);
//
$registroFunc->gerarRecibo(04, 03, 2024);
    
?>
   </article>
</section>

<footer>
  <p>Prática de comandos PHP</p>
</footer>

</body>
</html>
