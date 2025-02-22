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
  <h2>Linguagens de Servidor</h2>
  <h3>Webconferência #4 - Unidade 4</h3>
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
    <h1>Caro Aluno</h1>
    <p>Faça a navegação de cada exemplo ao lado, depois veja cada detalhe no código fonte que foi disponibilizado para vo~e.</p>
    <p>Tente reproduzir os exemplos, fazendo passo-a-passo. Qualquue dúvida, por favor contate seu professor ou seu tutor  pelo e-mail.</p>
  <!-- Adicionando o botão de navegação -->
        <form action="../unidade3/index.php" method="get">
            <button type="submit" class="btn">Unidade 3</button>
        </form>
  </article>
</section>

<footer>
  <p>Prática de comandos PHP</p>
</footer>

</body>
</html>

