<?php
session_start();

if (isset($_SESSION['user'])) {
    var_dump($_SESSION['user']);
}
echo '<br>';
var_dump($_SESSION['person']);


// trecho abaixo eu acrescenter
echo '<h1>SESSION</h1>';
