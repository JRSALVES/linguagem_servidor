
<?php 
$status = 0;
?>

<h1>Stutus do pedido: 
    <?php 
    if($status == 0){
        echo 'Aguardenado confirmação';
    } else if ($status == 1){
        echo 'Sendo preparado';
    } else if($status == 2){
        echo 'A caminho';
    } elseif($status == 3){
        echo 'Entregue';
    } else{
        echo 'Desconhecido';
    }
?>
</h1>