<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Template</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

<h2>Acesso a Banco de Dados</h2>
<p>Nesta aula trataremos o acesso a banco de dados</p>

<header>
  <h2>Linguagens de Servidor</h2>
  <h3>Webconferência #4</h3>
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
    <p>Faça a navegação de cada exemplo ao lado, depois veja cada detalhe no código fonte que foi disponibilizado para você.</p>
    <p>Tente reproduzir os exemplos, fazendo passo-a-passo. Qualquue dúvida, por favor contate seu professor ou seu tutor  pelo e-mail.</p>
  <!-- Adicionando o botão de navegação -->
        <form action="../funcoes/index.php" method="get">
            <button type="submit" class="btn">Capítulo 5-Funçoes & Controle de Sessão</button>
        </form>
  </article>
</section>

<footer>
  <p>Prática de comandos PHP</p>
</footer>

</body>
</html>

