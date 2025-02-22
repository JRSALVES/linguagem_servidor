<?php 
$nomes = ['Jeruso', 'Amadeu'];
$idades = [25, 32];
?>

<ul>
<?php 
    // Usando um loop com índice para acessar os dois arrays simultaneamente
    foreach($nomes as $index => $aluno){
        $idade = $idades[$index];  // Usando o mesmo índice para acessar o array de idades
        echo "<li>$aluno = $idade anos</li>";
    }
?>
</ul>
