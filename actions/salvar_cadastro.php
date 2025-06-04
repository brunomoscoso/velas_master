<?php
require_once '../includes/conexao.php'; // Conecta ao banco

// Validação básica dos dados
$nome     = trim($_POST['nome'] ?? '');
$email    = trim($_POST['email'] ?? '');
$telefone = trim($_POST['telefone'] ?? '');
$endereco = trim($_POST['endereco'] ?? '');
$idade    = intval($_POST['idade'] ?? 0);
$senha    = $_POST['senha'] ?? '';
$confirmar_senha = $_POST['confirmar_senha'] ?? '';

// Verifica se todos os campos obrigatórios estão preenchidos
if (!$nome || !$email || !$telefone || !$endereco || !$idade || !$senha || !$confirmar_senha) {
    echo 'Preencha todos os campos.';
    exit;
}

// Verifica se as senhas coincidem
if ($senha !== $confirmar_senha) {
    echo 'As senhas não coincidem.';
    exit;
}

// Verifica se o e-mail já existe
$stmt = $conn->prepare("SELECT usuario_id FROM usuarios WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    echo 'E-mail já cadastrado.';
    exit;
}

// Criptografa a senha
$senha_hash = password_hash($senha, PASSWORD_DEFAULT);

// Insere no banco
$stmt = $conn->prepare("INSERT INTO usuarios (nome, email, telefone, endereco, idade, senha, data_cadastro) VALUES (?, ?, ?, ?, ?, ?, NOW())");
$stmt->bind_param("ssssis", $nome, $email, $telefone, $endereco, $idade, $senha_hash);

if ($stmt->execute()) {
    echo 'Cadastro realizado com sucesso!';
} else {
    echo 'Erro ao cadastrar usuário.';
}
?>
