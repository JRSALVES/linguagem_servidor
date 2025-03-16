
<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Template</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

<h2>Manipulação de Arquivos</h2>
<p>Nesta aula trataremos como manipular arquivos com PHP</p>


<header>
  <h2>Exemplo #3</h2>
  <h3>Criar arquivo </h3>
</header>

<section>
  <nav>
    <ul>
      <li><a href="exemplo1.php">Retorna o Caminho</a></li>
      <li><a href="exemplo2.php">Mostra Conteúdo do Diretorio</a></li>
      <li><a href="exemplo3.php">Verifica Existência de  Arquivo</a></li>
      <li><a href="exemplo4.php">Escrever no arquivo</a></li>
      <li><a href="exemplo5.php">Excluir Arquivo</a></li>
      <li><a href="exemplo6.php">Lendo Conteúdo</a></li>
	  
       <li><a href="index.php">Retorna ao Menu principal</a></li>
    </ul>
  </nav>
  
  <article>
    <h1>Veja aqui o resultado </h1>
 <?php
/*---------------------------------------------------------------------*
 *                  exemplo #Cria verificar existencia de arquivo            *
 *---------------------------------------------------------------------*/ 
 $nomeDoArquivo = "Exemplo3.php";
$diretorioAtual = getcwd(); 

 //Comando para tocar o carcter "\" por "/"

$diretorioAtual= str_replace('\\', '/', $diretorioAtual);

echo ("Diretorio Atualx: ". $diretorioAtual."<br>");
   //$fh = fopen($diretorioAtual,'teste1.txt', 'r');

   
  if(!file_exists($nomeDoArquivo)) {
  die("<br>Arquivo ".$nomeDoArquivo." não existe no diretório");
  
} else {
   echo("<br>OK, arquivo ".$nomeDoArquivo. " encontrado<br>");	
   //Exemplo de diretorio: 'C:/wamp64/www/aula7/'
   $fh = fopen($diretorioAtual.'/'.$nomeDoArquivo, 'r');
   if($fh){
     fclose($fh);
}}
$diretorio = scandir($diretorioAtual);
echo '<ul>';
   foreach($diretorio as $a){
       echo '<li>' . $a . '</li>';
}
echo '</ul>';
?>


  </article>
</section>

<footer>
  <p>Prática de comandos PHP</p>
</footer>

</body>
</html>
