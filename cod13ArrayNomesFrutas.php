<?php 
// Declaração de um array de nomes utilizando a sintaxe curta de array
$nomes = ["André", "Bruno", "Carlos", "Diego", "Eduardo"];  
echo "Pessoas" . "<br>";  // Exibe a palavra "Pessoas" seguido de uma quebra de linha

// Exibe o primeiro elemento do array ($nomes[0]) que é "André"
echo $nomes[0];  

// Adiciona o nome "Jeruso" na posição de índice 5 do array
$nomes[5] = "Jeruso";  

// Laço de repetição para exibir todos os nomes do array a partir do índice 1
// O primeiro nome já foi exibido antes, então o loop começa no índice 1
for ($i = 1; $i < count($nomes); $i++) {  
    echo $nomes[$i] . "<br>";  // Exibe cada nome seguido de uma quebra de linha
}

// Declaração de um array associativo chamado "cesta" com frutas e suas quantidades
$cesta = [
    'banana' => 12,
    'laranja' => 6,
    'abacaxi' => 2,
];

// Adiciona a fruta "uva" com quantidade 1 no array associativo "cesta"
$cesta['uva'] = 1;

// Exibe o título "Frutas" seguido de uma quebra de linha
echo "<br>" ."Frutas". "<br>";

// Laço foreach para percorrer o array associativo "cesta" e exibir frutas e quantidades
foreach ($cesta as $fruta => $quantidade) {  
    echo "$fruta: $quantidade<br>";  // Exibe o nome da fruta e sua quantidade
}

// Exibe o título "Acessando índice através de resultados de operações"
echo "<h1> Acessando índice através de resultados de operações</h1>";

// Definição de variáveis para acessar índices do array dinamicamente
$indice = 0;  // Definindo o índice 0
$fruta = 'banana';  // Definindo a chave da fruta "banana"
$nova_fruta = 'melancia';  // Definindo a nova fruta "melancia"

// Exibe o primeiro nome do array, que é "André"
echo $nomes[0]."<br>";

// Exibe o nome que está no índice 0 do array, que também é "André"
echo $nomes[$indice]. "<br>";

// Exibe o nome que está no índice 1 do array, que é "Bruno"
echo $nomes[$indice + 1]."<br>";

// Exibe a quantidade de bananas (valor associado à chave 'banana' no array $cesta)
echo $cesta[$fruta], "<br>";

// Adiciona a fruta "melancia" com quantidade 1 no array associativo $cesta
$cesta[$nova_fruta] = 1;

// Exibe a quantidade de bananas após a adição da melancia
echo $cesta[$fruta]."<br>";

// Exibe a quantidade da fruta "melancia" que foi adicionada ao array
echo $cesta['melancia'];
?>
