<?php
// Obtém as informações da biblioteca GD instalada no servidor
$gd_info = gd_info();

echo "<h2>Informações da Biblioteca GD</h2>";
echo "<ul>";

// Percorre todas as informações da GD e exibe em uma lista formatada
foreach ($gd_info as $key => $value) {
    // Verifica se o valor é booleano (true/false) e transforma em uma mensagem legível
    if (is_bool($value)) {
        $value = $value ? '✅ Suportado' : '❌ Não suportado';
    }

    // Exibe cada item como um elemento de lista (li) com a chave e o valor correspondente
    echo "<li><strong>$key:</strong> $value</li>";
}

echo "</ul>";
