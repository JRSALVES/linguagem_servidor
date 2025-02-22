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
  <h2>Linguagens de Servidor</h2>
  <h3>Webconferência #3 - Unidades 3 </h3>
</header>

<section>
  <nav>
    <ul>
	<!--
      <li><a href="1aula3_exemplo1.php">Manipulação de Dados</a></li>
       <li><a href="2aula3_site.php">Require</a></li>
      <li><a href="3Aula3_ifsimples.php">If Simples</a></li>
      <li><a href="4Aula3_ifelse.php">If...else...</a></li>
      <li><a href="5Aula3_case.php">switch...case</a></li>
      <li><a href="6Aula3_ifcase.php">if encadeado</a></li>
      <li><a href="7aula3_string.php">String</a></li>
      <li><a href="index.php">Tela Inicial</a></li>
	  -->
	  <?php
/*---------------------------------------------------------------------*
 *                  exemplo # : require                *
 *---------------------------------------------------------------------*/ 
require "menu.php";

?>
    </ul>
  </nav>
  
  <article>
    <h1>Caro Aluno</h1>
    <p>Faça a navegação de cada exemplo ao lado, depois veja cada detalhe no código fonte que foi disponibilizado para você.</p>
    <p>Tente reproduzir os exemplos, fazendo passo-a-passo. Qualquue dúvida, por favor contate seu professor ou seu tutor  pelo e-mail.</p>
  
   <!-- Adicionando o botão de navegação -->
        <form action="../unidade4/index.php" method="get">
            <button type="submit" class="btn">Unidade 4</button>
        </form>
		</article>
</section>

<footer>
  <p>Prática de comandos PHP</p>
</footer>

</body>
</html>

