
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
  <h2>Exemplo #1</h2>
  <h3>Conexão com o Banco de Dados</h3>
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
    <h1>Veja aqui o resultado do acesso ao BD</h1>
    <?php
/*---------------------------------------------------------------------*
 *                  exemplo #1 : Conexão com o BD                      *
 *---------------------------------------------------------------------*/  
$mysql =mysqli_connect("localhost", "root", "", "vendas");
if (!$mysql) {
    echo mysqli_connect_error();
} else {
    echo ("Conexão com o BD OK");
}

?>
  </article>
</section>

<footer>
  <p>Prática de comandos PHP</p>
</footer>

</body>
</html>

