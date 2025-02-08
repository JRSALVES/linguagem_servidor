<?php
require 'inicio.php';
$idade = 2020 - 2003;
?>

<h1>Ele tem: <?php echo $idade?> anos de idade</h1>

<?php
if($idade >= 18){
    echo 'você é maior de idade!';
} else if ($idade >= 16){
    echo 'Você é menor de idade, mas pode votar!';
} else {
    echo 'Você é menor de idade e não pode votar!';
}
?>

<?php 'fim.php'?>