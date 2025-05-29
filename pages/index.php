<?php
require_once '../includes/conexao.php';

$sql = "SELECT * FROM produtos";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/global.css?=v1.7">
    <title>Loja de Velas</title>
</head>
<body>

<header class="bg-white py-2">
  <!-- ... HEADER COMPLETO COMO ESTAVA ... -->
</header>

<div>
  <div id="capa">
    <span class="text-capa">LOJA ONLINE</span>
  </div>
</div>

<section id="area-venda-produtos">
  <div class="container text-center">
    <div class="row">
      <!-- Coluna lateral esquerda: filtros -->
      <div class="col-sm-3">
        <div class="colecoes">
          <div class="filtro-preco">
            <h3>FILTRAR POR PREÇO:</h3>
            <form id="formPreco" method="GET" action="../actions/get_preco.php">
              <input type="range" class="form-range" min="0" max="100" id="customRange1">
              <p class="text-range-preco">Preço: <span id="valorPreco">0€ - 40€</span></p>
              <button type="submit" class="botao-filtrar">FILTRAR</button>
            </form>
          </div> 
          <h3 class="text-colecoes">COLEÇÕES</h3>
          <div class="area-qtd-velas">
            <?php
            $conn = new mysqli("localhost", "root", "", "moscosovelas");
            $sql = "SELECT nome, quantidade_estoque FROM produtos WHERE categoria = 'Artesanal Aromática'";
            $result = $conn->query($sql);
            $total_estoque = 0;
            $produtos = [];
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $produtos[] = $row;
                    $total_estoque += $row['quantidade_estoque'];
                }
                echo "<p class='text-qtd-velas'><strong>VELAS</strong> ($total_estoque)</p>";
                echo "<ul class='lista-velas'>";
                foreach ($produtos as $produto) {
                    $nome = htmlspecialchars($produto['nome']);
                    echo "<li class='produto-lista'>
                            <a href='#' class='link-velas-colecao filtro-vela' data-nome='" . $nome . "'>" . $nome . "</a> (" .
                            $produto['quantidade_estoque'] . ")
                          </li>";
                }
                echo "</ul>";
            } else {
                echo "<ul><li>Nenhuma vela encontrada.</li></ul>";
            }
            ?>
          </div>
        </div>
      </div>

      <!-- Coluna central: cards de produtos -->
      <div class="col-sm-9">
        <div class="row" id="area-produtos">
          <?php
          $sql = "SELECT * FROM produtos";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                  $nome = htmlspecialchars($row['nome']);
                  $preco = number_format($row['preco'], 2, ',', '.');
                  $descricao = htmlspecialchars($row['descricao']);
                  echo '
                  <div class="cards col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                      <div class="card-body">
                        <h5 class="card-title">' . $nome . '</h5>
                        <p class="card-text">' . $descricao . '</p>
                        <p class="card-text"><strong>€' . $preco . '</strong></p>
                        <a href="#" class="btn btn-dark">Ver mais</a>
                      </div>
                    </div>
                  </div>';
              }
          } else {
              echo '<p>Nenhum produto disponível no momento.</p>';
          }
          ?>
        </div>
      </div>
    </div>
  </div>
</section>

<footer>
  <div class="container">
    <div class="row">
      <div class="col text-center">
        <p>Footer Content</p>
      </div>
    </div>
  </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>
