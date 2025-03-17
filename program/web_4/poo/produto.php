<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>

<body>

    <?php
    class Produto
    {
        public $nome;
        public $valor;
        public $promocao;

        // Construtor para inicializar os valores
        public function __construct($nome, $valor, $promocao = false)
        {
            $this->nome = $nome;
            $this->valor = $valor;
            $this->promocao = $promocao;
        }

        // Método para aplicar a promoção
        public function aplicar_promocao()
        {
            if ($this->promocao) {
                return $this->valor * 0.9; // Aplica 10% de desconto
            }
            return $this->valor; // Retorna o valor normal se não estiver em promoção
        }
    }

    // Criando uma lista de produtos
    $produtos = [
        new Produto('Pão', 1, false),    // Em promoção
        new Produto('Leite', 5, false),   // Sem promoção
        new Produto('Queijo', 15, true),  // Em promoção
        new Produto('Presunto', 35, true),  // Em promoção
        new Produto('Fatia de Bolo', 15, true),  // Em promoção
        new Produto('Café', 15, true),  // Em promoção
        new Produto('pão de Queijo', 2, true)   // Em promoção
    ];

    echo '<h1>Produtos</h1>';

    // Exibindo os produtos
    foreach ($produtos as $produto) {
        echo "Nome: " . $produto->nome . "<br>";
        echo "Valor: R$ " . number_format($produto->valor, 2, ',', '.') . "<br>";

        // Exibir o valor promocional apenas se o produto estiver em promoção
        if ($produto->promocao) {
            echo "Valor com promoção: R$ " . number_format($produto->aplicar_promocao(), 2, ',', '.') . "<br>";
        }

        echo "<br>"; // Separação entre os produtos
    }
    ?>

</body>

</html>