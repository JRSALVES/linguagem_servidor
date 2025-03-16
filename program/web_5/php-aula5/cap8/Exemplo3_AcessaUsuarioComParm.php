
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
  <h2>Exemplo #3</h2>
  <h3>Tratamento de <b>Construtor </b>da Classe com passagem de Parâmetros</h3>
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
 *                  exemplo #3 : Tratamento do construtor da classe
 *---------------------------------------------------------------------*/ 


class Usuario{
  public      $nomeDoUsuario;
  protected $cpfDoUsuario;
  private     $emailDoUsuario;

    public function __construct($nome, $cpf, $email) {
    
    
    $this->nomeDoUsuario = $nome;
    $this->cpfDoUsuario = $cpf;
    $this->emailDoUsuario = $email;
  }

  public function getCpf (){
    return $this->cpfDoUsuario;
  }


  public function getNome(){
    return $this->nomeDoUsuario;
  }

  function getEmail(){
    return $this->emailDoUsuario;
  }

}
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$usuario = new Usuario($nome, $cpf, $email);
       
    
    ?>
    <table border=”1”>
   <tbody>
    <tr>
    <th colspan="2"><img src="img/exemplo3.png"></th>
  </tr>
  <tr> 
    <td><b>Classe</b> </td> <td><i>Usuario</i></td>
  </tr>
  <tr>
     <td><b>Atributos</b> </td> <td><i>nomeDoUsuario ; cpfDoUsuario ;emailDoUsuario </i></td>
  </tr>
  <tr>
    <th colspan="2">Objeto Instanciado</th>
  </tr>
  <tr> 
    <td><b>Instância de <i>nomeDoUsuario </i> </b> </td> <td><?php echo $usuario->getNome();?></td>
  </tr>
  <tr> 
    <td><b>Instância de <i>CPF</i> </b> </td> <td><?php echo $usuario->getCpf();?></td>
  </tr>
   <tr> 
    <td><b>Instância de <i>email</i> </b> </td> <td><?php echo $usuario->getEmail();?></td>
  </tr>
   </tbody>
  </table>





  </article>
</section>

<footer>
  <p>Prática de comandos PHP</p>
</footer>

</body>
</html>
