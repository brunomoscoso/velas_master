<?php
session_start();
require_once '../includes/conexao.php';

header('Content-Type: application/json');

$email = $_POST['email'] ?? '';
$senha = $_POST['senha'] ?? '';

if (empty($email) || empty($senha)) {
    echo json_encode(['status' => 'erro', 'mensagem' => 'Preencha todos os campos.']);
    exit;
}

$sql = "SELECT id, senha FROM usuarios WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $usuario = $result->fetch_assoc();

    if (password_verify($senha, $usuario['senha'])) {
        $_SESSION['user_id'] = $usuario['id']; // Define sessão
        echo json_encode(['status' => 'sucesso', 'mensagem' => 'Login realizado com sucesso.']);
    } else {
        echo json_encode(['status' => 'erro', 'mensagem' => 'Senha incorreta.']);
    }
} else {
    echo json_encode(['status' => 'erro', 'mensagem' => 'Usuário não encontrado.']);
}

$stmt->close();
$conn->close();
