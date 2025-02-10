<?php 
$idade = 20;
echo "<h1>passagem por referencia</h1>";
function modifica(&$a){
    echo 'Internamente (antes): '.$a.'<br>';
    $a = 100;
    echo 'Internamente (depois): ' .$a. '<br>';
}

echo $idade. '<br>';
modifica($idade);
echo $idade;
?>
