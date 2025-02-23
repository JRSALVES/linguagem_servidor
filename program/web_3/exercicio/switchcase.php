<!-- Exibe um título indicando o status do pedido -->
<h4>Seu pedido está:  
    <!-- Define um span para aplicar um estilo diferente ao texto do status -->
    <span style="font-family: 'Courier New', Courier, monospace; font-size: 20px;">
        <?php 
        // Define o status do pedido (neste caso, 1)
        $status = 1;
        
        // Usa switch-case para determinar a mensagem correspondente ao status
        switch($status){
            case 0:
                echo 'Aguardando confirmação'; // Se status for 0, exibe "Aguardando confirmação"
                break;
                case 1:
                    echo "Sendo Preparado"; // Se status for 1, exibe "Sendo Preparado"
                    break;
                    case 2:
                        echo "A caminho"; // Se status for 2, exibe "A caminho"
                        break;
                        case 3:
                            echo "Entregue"; // Se status for 3, exibe "Entregue"
                            break;
                            case 4:
                                echo "Cancelado"; // Se status for 4, exibe "Cancelado"
                                break;
                            }
                            ?>
    </span>
</h4>
<section>
    <nav>
        <ul>
            <li><a href="index.php">Volta ao Menu</li>
        </ul>
    </nav>
</section>
