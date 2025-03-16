<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/estilo.css">
    <title>Aula_3_Index</title>
</head>

<body>

<h2>Elementos básicos do PHP</h2>
<p>Nesta aula trataremos de variaveis e controle de fluxo(if, case)</p>

<header>
    <h2>Linguagem de Servidor</h2>
    <h3>Webconferência #3 - Unidade 3</h3>
</header>

<section>
    <nav>
        <ul>
            <?php 
            require "menu.php";            
            ?>
        </ul>
    </nav>
<article>
    <h1>Caro Aluno</h1>
    <p>Faça a navegação de cada exemplo ao lado</p>
    <p>Tente reproduzí-los passo-a-passo</p>

    <form action="../unidade4/index.php" method="get">
        <button type="submit" class="btn">Unidade $</button>
    </form>
</article>
</section>

<footer>
    <p>Prática de comandos PHP</p>
</footer>    
</body>
</html>