<?php
// Array para receber nomes
$nomes = [];



do {
    echo "\nMenu de Opções\n\n";
    // Exibe as opções no menu
    echo "1 - Adicionar\n";
    echo "2 - Listar\n";
    echo "3 - Sortear\n";
    echo "4 - Limpar\n";

    // Solicita a escolha do usuário
    $opcao = readline('Digite uma opção: ');

    switch ($opcao) {
        case 1:
            // Adiciona um novo nome à lista
            $nomes[] = readline('Digite um novo nome: ');
            echo "Nome adicionado!\n\n";
            break;

        case 2:
            // Lista os nomes
            if (empty($nomes)) {
                echo "---------------------\n";
                echo "Nenhum nome adicionado ainda.\n\n";
            } else {
                echo '-------------------';
                echo "\nLista de Nomes:\n";
                foreach ($nomes as $nome) {
                    echo "$nome\n"; // Exibe cada nome
                }
                echo '---------------------';
                echo "\n";
            }
            break;

        case 3:
            if (count($nomes) >= 2) {
                $indice = array_rand($nomes);
                echo "\n----------------------------\n";
                echo "Nome sorteado: " . $nomes[$indice] . "\n";
                unset($nomes[$indice]);
            }

            break;

        case 4:
            echo "Saindo do programa...\n";
            break;

        default:
            echo "Opção inválida. Tente novamente.\n\n";
            break;
    }
} while ($opcao != 4);  // O programa continua até o usuário escolher sair