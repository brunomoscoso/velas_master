<?php
session_start();
require '../conexao.php';

// Coleta os dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];
$cor = $_POST['cor'];
$aroma = $_POST['aroma'];
$data_entrega = $_POST['data_entrega'];

// Verifica se o usuário está logado
$usuario_email = isset($_SESSION['user']) ? $_SESSION['user'] : null;

// Apenas usuários logados podem ver depois
$sql = "INSERT INTO personalizacoes (nome_cliente, email_cliente, telefone, endereco, cor, aroma, data_entrega, usuario_email)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $pdo->prepare($sql);
$result = $stmt->execute([$nome, $email, $telefone, $endereco, $cor, $aroma, $data_entrega, $usuario_email]);

if ($result) {
    // Envia email de confirmação (para todos)
    $assunto = "Confirmação da sua encomenda na Loja de Velas";
    $mensagem = "Olá $nome,\n\nSua encomenda foi recebida com sucesso!\nCor: $cor\nAroma: $aroma\nData de Entrega: $data_entrega\n\nObrigado!";
    mail($email, $assunto, $mensagem, "From: no-reply@lojadavelas.com");

    echo json_encode(['status' => 'sucesso', 'mensagem' => 'Personalização enviada com sucesso!']);
} else {
    echo json_encode(['status' => 'erro', 'mensagem' => 'Erro ao salvar a personalização.']);
}

