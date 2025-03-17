<?php
require 'inverter.php';

try {
    echo inverter(0) . '<br>';
} catch (Exception $e) {
    echo "Um erro aconteceu :( <br>";
    echo "Detalhes do erro: <ul>";
    echo "<li>Código: " . $e->getCode() . "</li>";
    echo "<li>Mensagem: " . $e->getMessage() . "</li>";  // Corrigido o erro na tag </li>
    echo '</ul>';
}