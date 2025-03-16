<?php
session_start();

var_dump(session_id());

$_SESSION['user'] = 'Alexandre';
$_SESSION['person'] = [
    'name' => 'Jeruso',
    'age' => 57
];
