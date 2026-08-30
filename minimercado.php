<?php

// ==========================================
// MINI MERCADO ADRIANO
// Exemplo de Funções e Estruturas de Repetição
// ==========================================

// Vetor de produtos cadastrados
$produtos = [
    [
        "nome" => "Arroz 5kg",
        "preco" => 25.90,
        "estoque" => 55
    ],
    [
        "nome" => "Feijão 1kg",
        "preco" => 8.50,
        "estoque" => 85
    ],
    [
        "nome" => "Macarrão 500g",
        "preco" => 4.99,
        "estoque" => 60
    ],
    [
        "nome" => "Óleo de Soja",
        "preco" => 7.89,
        "estoque" => 20
    ],
    [
        "nome" => "Leite Integral",
        "preco" => 5.49,
        "estoque" => 80
    ]
];

// ==========================================
// FUNÇÃO PARA LISTAR PRODUTOS
// ==========================================

function listarProdutos($produtos)
{
    echo "<h2>Produtos do Mini Mercado Adriano</h2>";

    foreach ($produtos as $produto)
    {
        echo "Produto: " . $produto["nome"] . "<br>";
        echo "Preço: R$ " . number_format($produto["preco"], 2, ',', '.') . "<br>";
        echo "Estoque: " . $produto["estoque"] . " unidades<br>";
        echo "<hr>";
    }
}

// ==========================================
// FUNÇÃO PARA CALCULAR VALOR TOTAL DO ESTOQUE
// ==========================================

function calcularValorEstoque($produtos)
{
    $total = 0;

    foreach ($produtos as $produto)
    {
        $total += $produto["preco"] * $produto["estoque"];
    }

    return $total;
}

// ==========================================
// FUNÇÃO PARA CONTAR PRODUTOS
// ==========================================

function contarProdutos($produtos)
{
    return count($produtos);
}

// ==========================================
// CHAMANDO AS FUNÇÕES
// ==========================================

listarProdutos($produtos);

echo "<br>";

echo "<strong>Quantidade de Produtos Cadastrados: </strong>"
    . contarProdutos($produtos);

echo "<br><br>";

echo "<strong>Valor Total do Estoque: R$ "
    . number_format(calcularValorEstoque($produtos), 2, ',', '.')
    . "</strong>";

?>