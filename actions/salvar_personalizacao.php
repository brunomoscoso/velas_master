<?php
session_start();
require_once '../includes/conexao.php';

header('Content-Type: application/json');

// Verifica se os campos obrigatórios foram enviados
if (
    empty($_POST['nome']) ||
    empty($_POST['telefone']) ||
    empty($_POST['endereco']) ||
    empty($_POST['email']) ||
    empty($_POST['data_entrega']) ||
    empty($_POST['cor']) ||
    empty($_POST['aroma'])
) {
    echo json_encode(['status' => 'erro', 'mensagem' => 'Todos os campos obrigatórios devem ser preenchidos.']);
    exit;
}

$usuario_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];
$email = $_POST['email'];
$data_entrega = $_POST['data_entrega'];
$cor = $_POST['cor'];
$aroma = $_POST['aroma'];
$mensagem = isset($_POST['mensagem']) ? $_POST['mensagem'] : null;

$stmt = $conn->prepare("INSERT INTO personalizacoes 
(usuario_id, nome_cliente, telefone, endereco, email, data_entrega, cor, aroma, mensagem)
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");

$stmt->bind_param(
    "issssssss",
    $usuario_id,
    $nome,
    $telefone,
    $endereco,
    $email,
    $data_entrega,
    $cor,
    $aroma,
    $mensagem
);

if ($stmt->execute()) {
    echo json_encode(['status' => 'sucesso', 'mensagem' => 'Personalização registrada com sucesso!']);
} else {
    echo json_encode(['status' => 'erro', 'mensagem' => 'Erro ao salvar a personalização.']);
}

$stmt->close();
$conn->close();
