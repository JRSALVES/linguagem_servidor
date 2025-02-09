<?php 
// Declaração de um array de nomes utilizando a sintaxe curta de array
$nomes = ["André", "Bruno", "Carlos", "Diego", "Eduardo"]; 
$nomes[6] = "Jeruso";  // Adicionando "Jeruso" ao final do array
?>

<!-- Exibindo os nomes em uma lista não ordenada -->
<ul>
    <?php 
    // Loop para percorrer o array de nomes
    foreach($nomes as $nome){  // Corrigido: $nomes em vez de $nomes novamente
        echo "<li>$nome</li>";  // Exibe cada nome dentro de uma tag <li>
    }
    ?>
</ul>

<?php 
// Declaração do array associativo de frutas com quantidades
$cesta['banana'] = 12;
$cesta['laranja'] = 6;
$cesta['abacaxi'] = 2;
?>

<!-- Exibindo as frutas e suas quantidades em uma lista não ordenada -->
<ul>
    <?php 
    // Loop para percorrer o array associativo de frutas e quantidades
    foreach($cesta as $fruta => $quantidade){  // Corrigido: usando $fruta e $quantidade
        echo "<li>$quantidade unidade(s) de $fruta</li>";  // Exibe o nome da fruta e sua quantidade
    }
    ?>
</ul>
