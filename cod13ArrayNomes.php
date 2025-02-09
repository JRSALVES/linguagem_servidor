<?php 
$nomes = ["André", "Bruno", "Carlos", "Diego", "Eduardo"];  // Using short array syntax
echo $nomes[0];  // Output the first element
$nomes[5] = "Jeruso";  // Adding "Jeruso" to the array

// Loop through the array
for ($i = 1; $i < count($nomes); $i++) {  // Starting at 1 since $nomes[0] is already echoed
    echo $nomes[$i] . "<br>";  // Printing each name with a line break
}

// Checking if index 25 exists in the array
if (array_key_exists(25, $nomes)) {
    echo $nomes[25] . "<br>";  // Will only be printed if index 25 exists
} else {
    echo "Índice 25 não existe no array.<br>";  // If the index doesn't exist
}

echo "O array contém: " . count($nomes) . " nomes.";  // Display the count of elements in the array
?>
