<?php
session_start();
$produto_id = intval($_POST['produto_id'] ?? 0);

if (isset($_SESSION['carrinho'][$produto_id])) {
    unset($_SESSION['carrinho'][$produto_id]);
    echo json_encode(['status' => 'ok']);
} else {
    echo json_encode(['status' => 'erro', 'mensagem' => 'Produto não encontrado no carrinho.']);
}
