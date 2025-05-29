<?php
require_once '../includes/conexao.php';

$nome = isset($_POST['nome']) ? $_POST['nome'] : '';

$stmt = $conn->prepare("SELECT * FROM produtos WHERE nome = ?");
$stmt->bind_param("s", $nome);
$stmt->execute();
$result = $stmt->get_result();

$html = '';

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $nome = htmlspecialchars($row['nome']);
        $preco = number_format($row['preco'], 2, ',', '.');
        $descricao = htmlspecialchars($row['descricao']);

        $html .= "
        <div class='cards col-md-4'>
          <div class='card h-100 shadow-sm'>
            <div class='card-body'>
              <h5 class='card-title'>$nome</h5>
              <p class='card-text'>$descricao</p>
              <p class='card-text'><strong>€$preco</strong></p>
              <a href='#' class='btn btn-dark'>Ver mais</a>
            </div>
          </div>
        </div>";
    }
} else {
    $html = "<p>Nenhuma vela encontrada.</p>";
}

echo $html;
