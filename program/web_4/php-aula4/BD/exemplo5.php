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
  <h2>Exemplo #5</h2>
  <h3>Acesso a dados com PDO</h3>
</header>

<section>
  <nav>
    <ul>
      <li><a href="exemplo1.php">Conexão com BD</a></li>
      <li><a href="exemplo2.php">Acesso a dados (MySQLI)</a></li>
      <li><a href="exemplo3.php">Acesso a Dados (Conexão com PDO)</a></li>
      <li><a href="exemplo4.php">Acessor várias linhas (Conexão com PDO)</a></li>
      <li><a href="exemplo5.php">INSERT (Conexão com PDO)</a></li>
      <li><a href="exemplo6.php">UPDATE (Conexão com PDO)</a></li>
      <li><a href="exemplo7.php">DELETE (Conexão com PDO)</a></li>
      <li><a href="index.php">Retorna ao Menu principal</a></li>
    </ul>
  </nav>
  
  <article>
    <h1>Veja aqui o resultado do acesso ao BD</h1>
 <?php
/*---------------------------------------------------------------------*
 *                  exemplo #5 : INSERT  com PDO                *
 *---------------------------------------------------------------------*/  
 
try {
$pdo = new PDO('mysql:host=localhost;dbname=vendas;charset=utf8', 'root', 'admin');
$stmt = $pdo->prepare('INSERT INTO clientes (nome,email,telefone,cep,rua,rua_no,cidade,estado,doc,infos)
 VALUES(:nome,:email,:telefone,:cep,:rua,:rua_no,:cidade,:estado,:doc,:infos)');
$stmt->execute(array(
    ':nome' => 'NapoleaoBONAPARTE',
	':email' => 'Napoleaox@xxx.com',
	':telefone'=> 22882396,
	':cep'     => 3882,
	':rua'     => 'Rua França-xx',
	':rua_no'=> 2889,
	':cidade'=> 'Sampa',
	':estado'=> 'SP',
	':doc'=>18,
	':infos'=>'confidencial'
  ));

  echo ("Inclusão efetuada com Sucesso: ".$stmt->rowCount(). " linha incluída <br> Faça a consulta" );
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();}
 
?>
  </article>
</section>

<footer>
  <p>Prática de comandos PHP</p>
</footer>

</body>
</html>

