<?php 
$alunos = ["Jeruso", "Maria", "Cicero", "Bete", "Tata"];
echo "Busca por indice [1]: ".$alunos[1]."<br>";
?>

<?php 
for($i = 0; $i < count($alunos); $i++){
echo "Busca com uso for " .$alunos[$i]. "<br>";
}
?>

<section>
    <nav>
        <ul>
            <li><a href="index.php">Volta ao Menu</li>
      
        </ul>
    </nav>
</section>
