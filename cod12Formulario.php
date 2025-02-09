<?php
require 'inicio.php';
?>

<h1>Meu Formulário</h1>

<?php 
if(isset($_POST['nome_usuario'])){
    echo '<h2>Olá, ' . $_POST['nome_usuario']. '</h2>';
}
?>

<form>
    <label for="campo_de_nome">Digite o seu nome:</label>
    <input type= "text"name="nome_usuario" id="campo_de_nome" />
    <button type="submit">Enviar</button>
</form>

<?php 
require 'fim'
?>