<?php
require_once '../includes/conexao.php';

$data = json_decode(file_get_contents('php://input'), true);
$ids = $data['ids'] ?? [];

$html = '';

if (!empty($ids)) {
    $placeholders = implode(',', array_fill(0, count($ids), '?'));
    $stmt = $conn->prepare("SELECT * FROM produtos WHERE produto_id IN ($placeholders)");
    $stmt->bind_param(str_repeat('i', count($ids)), ...$ids);
    $stmt->execute();
    $result = $stmt->get_result();
    
    $html .= '<div class="col-12 text-start mb-3">
    <button id="btn-voltar-produtos" class="btn btn-secondary">← Voltar para os Produtos</button>
    </div>';


    while ($row = $result->fetch_assoc()) {
        $nome = htmlspecialchars($row['nome']);
        $preco = number_format($row['preco'], 2, ',', '.');
        $descricao = htmlspecialchars($row['descricao']);

        $html .= '
        <div class="cards col-md-4 mb-4">
          <div class="card h-100 shadow-sm">
            <div class="card-body">
              <h5 class="card-title">' . $nome . '</h5>
              <p class="card-text">' . $descricao . '</p>
              <p class="card-text"><strong>€' . $preco . '</strong></p>
              <button class="btn-favorito favoritado" data-id="' . $row['produto_id'] . '">♥</button>
              <a href="#" class="btn btn-dark">Ver mais</a>
            </div>
          </div>
        </div>';
    }
}

echo $html;
