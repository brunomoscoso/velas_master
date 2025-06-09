<?php 
session_start();
require '../conexao.php';

if (!isset($_SESSION['user'])) {
  echo "⚠️ Área restrita. Faça login para acessar suas personalizações.";
  exit;
}

$usuario = $_SESSION['user'];

$stmt = $pdo->prepare("SELECT * FROM personalizacoes WHERE usuario_email = ? ORDER BY data_criacao DESC");
$stmt->execute([$usuario]);
$personalizacoes = $stmt->fetchAll();

if (empty($personalizacoes)) {
  echo "<p>Você ainda não fez nenhuma personalização.</p>";
} else {
  foreach ($personalizacoes as $p) {
    echo "<div class='card mb-3 p-3'>";
    echo "<strong>Cor:</strong> " . htmlspecialchars($p['cor']) . "<br>";
    echo "<strong>Aroma:</strong> " . htmlspecialchars($p['aroma']) . "<br>";
    echo "<strong>Data de entrega:</strong> " . htmlspecialchars($p['data_entrega']) . "<br>";
    echo "</div>";
  }
}
