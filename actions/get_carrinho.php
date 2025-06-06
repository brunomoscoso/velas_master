<?php
session_start();
$conn = new mysqli("localhost", "root", "", "moscosovelas");

if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados.");
}

$produto_id = intval($_POST['produto_id'] ?? 0);

// Busca o produto no banco
$sql = "SELECT * FROM produtos WHERE produto_id = $produto_id";
$result = $conn->query($sql);

if ($result->num_rows === 1) {
    $produto = $result->fetch_assoc();
    
    // Verifica se já existe no carrinho
    $quantidadeAtual = $_SESSION['carrinho'][$produto_id]['quantidade'] ?? 0;

    if ($quantidadeAtual + 1 <= $produto['quantidade_estoque']) {
        // Adiciona ou atualiza no carrinho
        $_SESSION['carrinho'][$produto_id] = [
            'nome' => $produto['nome'],
            'preco' => $produto['preco'],
            'quantidade' => $quantidadeAtual + 1
        ];
        $totalItens = array_sum(array_column($_SESSION['carrinho'], 'quantidade'));
        echo json_encode(['status' => 'ok', 'total' => $totalItens]);
    } else {
        echo json_encode(['status' => 'erro', 'mensagem' => 'Produto sem estoque']);
    }

} else {
    echo json_encode(['status' => 'erro', 'mensagem' => 'Produto não encontrado']);
}
?>
