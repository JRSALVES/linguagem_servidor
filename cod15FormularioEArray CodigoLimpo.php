<!--Definindo os sabores disponíveis-->
<?php 
$sabores = ['Mussarela', 'Calabresa', 'Portuguesa']; 
?>

<!-- Formulário -->
<form method="GET">
    <?php foreach ($sabores as $sabor) { ?>
        <input type="checkbox" name="sabores[]" id="<?php echo $sabor; ?>" value="<?php echo $sabor; ?>">
        <label for="<?php echo $sabor; ?>"><?php echo $sabor; ?></label>
    <?php } ?>
    <button type="submit">Enviar</button>
</form>

<!-- Lista de sabores escolhidos -->
<ul>
<?php 
if (isset($_GET['sabores'])) {
    foreach ($_GET['sabores'] as $sabor) {
        echo "<li>Você escolheu o sabor <strong>" . htmlspecialchars($sabor) . "</strong></li>"; 
    }
} else {
    echo "<li>Nenhum sabor selecionado.</li>";
}
?>
</ul>
