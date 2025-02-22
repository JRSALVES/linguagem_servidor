<?php
$status = 1;
?>

<h1> Status do pedido:
    <?php
    switch($status){
        case 0:
            echo 'Aguardando confirmação';
        break;

        case 1:
            echo 'Sendo preparado';
        break;
        
        case 2:
            echo 'A caminho';
        break;

        case 3:
            echo 'Entregue';
        break;

        default:
            echo 'Desconhecido';
        break;
    }
    ?>
</h1>