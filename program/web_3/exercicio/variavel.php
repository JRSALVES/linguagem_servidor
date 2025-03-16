
<title>Variáveis</title>
<section>
    <nav>
        <ul>
            <li><a href="index.php">Volta ao Menu</li>
        </ul>
    </nav>
</section>
<h4>Tipo inteiro</h4>
<?php
$idade = 58;
echo "A sua idade é: " .$idade. " anos."."<br>";
?>

<p>
    <?php 
    $ano_nascimento = 2025 - $idade;
    echo "ano de nascimento " .$ano_nascimento. "<br>"; 
    $idade_daqui_a_cinco_anos = $idade + 5;
    echo "idade daqui a cinco anos" .$idade_daqui_a_cinco_anos. "<br>";
      
    ?>
</p>

<?php 
$total_de_pedaco_de_bolo = $idade * 8;
echo "Total pedaços de bolo: ".$total_de_pedaco_de_bolo."<br>";
$decadas = $idade / 10;
echo "Dedacas " .$decadas."<br>";
$anos_desde_multiplos_de_9 = $idade % 9;
echo("Calcula resto (Idade / 9) : " .$anos_desde_multiplos_de_9)."<br>";
?>

<h4>Tipo String</h4>
<?php 
$nome = "Jeruso Alves";
echo "Bem-Vindo: ".$nome. "<br>";
echo "Você tem: ".$idade. " anos";
?>
