<?php
session_start();
$carrinho = $_SESSION['carrinho'] ?? [];

echo "<h2>🛍️ Meu Carrinho</h2>";

// Botão voltar aparece sempre
echo '<button id="btn-voltar-carrinho" class="btn btn-secondary mb-3">← Voltar para os produtos</button>';

// Estrutura da tabela sempre aparece
echo "<table class='table'>";
echo "<thead><tr>
        <th>Produto</th>
        <th>Preço</th>
        <th>Quantidade</th>
        <th>Subtotal</th>
        <th>Ação</th>
    </tr></thead><tbody>";

// Se carrinho estiver vazio, exibe mensagem no corpo da tabela
if (empty($carrinho)) {
    echo "<tr><td colspan='5' class='text-center'>O carrinho está vazio.</td></tr>";
} else {
    $totalGeral = 0;
    foreach ($carrinho as $id => $item) {
        $subtotal = $item['preco'] * $item['quantidade'];
        $totalGeral += $subtotal;

        echo "<tr>";
        echo "<td>" . htmlspecialchars($item['nome']) . "</td>";
        echo "<td>R$ " . number_format($item['preco'], 2, ',', '.') . "</td>";
        echo "<td>" . $item['quantidade'] . "</td>";
        echo "<td>R$ " . number_format($subtotal, 2, ',', '.') . "</td>";
        echo "<td><button class='btn btn-danger btn-sm' onclick='removerDoCarrinho($id)'>Remover</button></td>";
        echo "</tr>";
    }

    echo "<tr><td colspan='3'><strong>Total</strong></td><td colspan='2'>R$ " . number_format($totalGeral, 2, ',', '.') . "</strong></td></tr>";
}

echo "</tbody></table>";
