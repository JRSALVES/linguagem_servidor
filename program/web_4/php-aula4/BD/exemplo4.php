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
  <h2>Exemplo #4</h2>
  <h3>Acesso a Várias linhas com PDO</h3>
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
 *                  exemplo #4 : Acesso várias linhas  com PDO                *
 *---------------------------------------------------------------------*/  

$db = new PDO('mysql:host=127.0.0.1;dbname=vendas;charset=utf8', 'root', '');
$consulta = $db->query('SELECT * FROM clientes where id>1     order by email ');
$usuarios = $consulta->fetchAll();
 echo '<h1>Lista de Usuários</h1>'; 
    echo '<table>';
    echo '<caption>Lista de Usuários</caption>';
    echo '<thead>';
    echo '<tr>';
    echo '<th>ID</th>';
    echo '<th>Nome</th>';
    echo '<th>Email</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';
    
    foreach ($usuarios as $user) {
        echo '<tr>';
        echo '<td>' . htmlspecialchars($user['id']) . '</td>';
        echo '<td>' . htmlspecialchars($user['nome']) . '</td>';
        echo '<td>' . htmlspecialchars($user['email']) . '</td>';
        echo '</tr>';
    }
    
    echo '</tbody>';
    echo '</table>';
    ?>
  </article>
</section>

<footer>
  <p>Prática de comandos PHP</p>
</footer>

</body>
</html>

