<?php
session_start();
require_once '../includes/conexao.php';

if (!isset($_SESSION['user_id'])) {
    echo json_encode(['status' => 'nao_autenticado']);
    exit;
}
$usuario_id = $_SESSION['user_id'];

$sql = "SELECT * FROM personalizacoes WHERE usuario_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $usuario_id);
$stmt->execute();
$result = $stmt->get_result();
?>

<div class="container mt-4">
  <h2>Minhas Personalizações</h2>

  <?php if ($result->num_rows > 0): ?>
    <div class="row">
      <?php while ($row = $result->fetch_assoc()): ?>
        <div class="col-md-6">
          <div class="card mb-3">
            <div class="card-body">
              <h5 class="card-title"><?= htmlspecialchars($row['nome_cliente']) ?></h5>
              <p><strong>Data de Entrega:</strong> <?= htmlspecialchars($row['data_entrega']) ?></p>
              <p><strong>Cor:</strong> <?= htmlspecialchars($row['cor']) ?></p>
              <p><strong>Aroma:</strong> <?= htmlspecialchars($row['aroma']) ?></p>
              <p><strong>Mensagem:</strong> <?= htmlspecialchars($row['mensagem']) ?></p>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
    </div>
  <?php else: ?>
    <p>Você ainda não fez nenhuma personalização.</p>
  <?php endif; ?>

</div>

<?php
$stmt->close();
$conn->close();
?>
