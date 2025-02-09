<form method="GET">
    <input type="checkbox" name="sabores[]" id="mussarela" value="Mussarela">
    <label for="mussarela">Mussarela</label>

    <input type="checkbox" name="sabores[]" id="calabresa" value="Calabresa">
    <label for="calabresa">Calabresa</label>

    <input type="checkbox" name="sabores[]" id="portuguesa" value="Portuguesa">
    <label for="portuguesa">Portuguesa</label>

    <button type="submit">Enviar</button>
</form>

<ul>
<?php 
// Verifica se o formulário foi enviado e se há valores no array 'sabores'
if (isset($_GET['sabores'])) {
    $sabores = $_GET['sabores']; // Atribui os sabores recebidos à variável
    foreach ($sabores as $sabor) {
        echo "<li>$sabor</li>"; // Exibe cada sabor selecionado
    }
} else {
    echo "<li>Nenhum sabor selecionado.</li>"; // Exibe mensagem caso nada seja selecionado
}
?>
</ul>
