<?php
$conn = new mysqli("localhost", "root", "", "moscosovelas");

$sql = "SELECT nome, quantidade_estoque FROM produtos WHERE categoria = 'Artesanal Aromática'";
$result = $conn->query($sql);

$total_estoque = 0;
$produtos = [];

if ($result->num_rows > 0) {
    // Primeiro, calcula o total e guarda os produtos
    while($row = $result->fetch_assoc()) {
        $produtos[] = $row;
        $total_estoque += $row['quantidade_estoque'];
    }
    // Mostra o total antes da lista
    echo "<p class='text-qtd-velas'><strong>VELAS</strong> ($total_estoque)</p>";
    echo "<ul class='lista-velas'>";

    // Agora mostra a lista
    foreach ($produtos as $produto) {
        echo "<li class='produto-lista'>" . "<a href='' class='link-velas-colecao'>" .htmlspecialchars($produto['nome']) . "</a>" . " (" . $produto['quantidade_estoque'] . ")</li>";
    }

    echo "</ul>";
} else {
    echo "<ul><li>Nenhuma vela encontrada.</li></ul>";
}
?>