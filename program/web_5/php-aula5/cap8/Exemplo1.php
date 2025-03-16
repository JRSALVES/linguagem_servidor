
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
  <h2>Exemplo #1</h2>
  <h3>Tratamento de <b>Classes</b>: Criar Objetos</h3>
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
 *                  exemplo #1 : Tratamento de classe             *
 *---------------------------------------------------------------------*/  
class Produto {
public $valor;
public $nome;

public function __construct() {
   
 	$this->valor = 9000.00;
 	$this->nome= "Café com leite";
 }	
}  //xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
echo 'Para criar um objeto da classe Produto, usamos a sintaxe: <p> <strong style="color: red;"><center> $produto = new Produto();</strong></center></p>';



$produto   =  new Produto();


?>
<table border=”1”>
   <tbody>
    <tr>
    <th colspan="2"><img src="img/exemplo1.png"></th>
  </tr>
  <tr> 
    <td><b>Classe</b> </td> <td><i>Produto</i></td>
  </tr>
  <tr>
     <td><b>Atributos</b> </td> <td><i>valor; x'</i></td>
  </tr>
  <tr>
    <th colspan="2">Objeto Instanciado</th>
  </tr>
  <tr> 
    <td><b>Instância de <i>nome</i> </b> </td> <td><?php echo ($produto->nome);?></td>
  </tr>
  <tr> 
    <td><b>Instância de <i>valor</i> </b> </td> <td><?php echo ($produto->valor);?></td>
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
