


<?php 
$idade = 70;
if($idade < 16){
    echo " Voce tem: ".$idade. " anos de idade, vocẽ ainda não pode votar nem tirar CNH!";   
} elseif ($idade >= 16 && $idade < 18){
    echo " Voce tem: ".$idade. " anos de idade, vocẽ já pode votar, mas ainda não pode tirar CNH!";
}elseif ($idade >= 18 && $idade <= 75){
    echo " Voce tem: ".$idade. " anos de idade, além de votar vocẽ pode tirar CNH e dirigir!";
} else {
    echo " Voce tem: ".$idade. " anos de idade, seu voto é facultativo e está proibido de dirigir";
}
?> 

<section>
    <nav>
        <ul>
            <li><a href="index.php">Volta ao Menu</li>
   
        </ul>
    </nav>

</section>