<?php 

// Função anônima que calcula o dobro de um número
$dobro = function ($x) {
    return $x * 2;
};

$numero = 5; // Definir um número para calcular o dobro
echo "O dobro de " . $numero . " = " . $dobro($numero) . "<br>";

// Função anônima que soma dois valores
$funcao = function($valor1, $valor2) {
    return "A soma de $valor1 e $valor2 = " . ($valor1 + $valor2) . "<br>";
};

// Chamando a função e exibindo o resultado
echo $funcao(3, 7);
echo $funcao(10, 7);
echo $funcao(20, 7);
echo $funcao(30, 7);
echo $funcao(35, 7); // Usar echo em vez de print_r()

// Aplicando array_map para dobrar os valores do array
$resultado = array_map(function($x) {
    return $x * 2;
}, [0, 1, 2, 4, 8]);

// Exibir o array formatado usando a tag <pre>
/**
 * saída sem <pre> Array ( [0] => 0 [1] => 1 [2] => 2 [3] => 4 [4] => 8 )
 * 
 * 
 * saída com <pre>
 * Array
 *(
 *  [0] => 0
 *   [1] => 1
 *   [2] => 2
 *   [3] => 4
 *   [4] => 8
 *)
 *
 *
 */
echo "<pre>";
print_r($resultado);
echo "</pre>";
?>

