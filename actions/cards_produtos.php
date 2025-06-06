<?php
    $conn = new mysqli("localhost", "root", "", "moscosovelas");
    $sql = "SELECT * FROM produtos";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $id = $row['produto_id'];
            $nome = htmlspecialchars($row['nome']);
            $preco = number_format($row['preco'], 2, ',', '.');
            $descricao = htmlspecialchars($row['descricao']);

            echo '
<div class="cards col-md-4 mb-4">
  <div class="card h-100 shadow-sm">
    <div class="card-body">
      <button class="btn-favorito" data-id="' . $id . '">♥</button>
      <h5 class="card-title">' . $nome . '</h5>
      <p class="card-text">' . $descricao . '</p>
      <p class="card-text"><strong>€' . $preco . '</strong></p>
      <button class="btn btn-primary" onclick="adicionarAoCarrinho(' . $id . ')">Adicionar Carrinho</button>
      <a href="#" class="btn btn-dark">Compre agora</a>
    </div>
  </div>
</div>';

        }
    } else {
        echo '<p>Nenhum produto disponível no momento.</p>';
    }
?>