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
    <link rel="stylesheet" href="../assets/css/global.css?=v1.9">
    <title>Loja de Velas</title>
</head>
<body>

<header class="bg-white py-2">
  <div class="container-fluid">
    
    <!-- Linha para mobile: logo à esquerda e botão à direita -->
    <div class="d-flex d-lg-none justify-content-between align-items-center">
      <!-- Logo -->
      <a href="" class="logo-mobile">
        <img src="../assets/images/logo/moscoso.png" alt="Logo" class="img-mobile-logo">
      </a>
      <!-- Botão hamburguer -->
      <div class="container-mobile-icons">
      <a class="nav-link-menu" href="#"><img src="../assets/images/icons/person_24dp_000000_FILL0_wght400_GRAD0_opsz24.png" alt=""></a>
      <a class="nav-link-menu" href="#"><img src="../assets/images/icons/shopping_bag_24dp_000000_FILL0_wght400_GRAD0_opsz24.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
          <img src="../assets/images/icons/menu_24dp_434343_FILL0_wght400_GRAD0_opsz24 (1).svg" alt="" class="botao-mobile">
        </button>
      </div>
    </div>

    <!-- Linha para telas médias e grandes -->
    <div class="row align-items-center d-none d-lg-flex text-center">

      <!-- Menu lateral -->
      <div class="col-lg-3 coluna">
        <div class="menu d-flex justify-content-start gap-3">
          <a href="#" class="link-menu img-icons">COLEÇÃO</a>
          <a href="#" class="link-menu img-icons">PERSONALIZAÇÃO</a>
        </div>
      </div>

      <!-- Logo central -->
      <div class="col-lg-5">
        <a href="http://localhost/velas_master/pages/index.php" id="logo">
          <img id="img-logo" class="img-fluid" src="../assets/images/logo/moscoso.png" alt="Logo">
        </a>
      </div>

      <!-- Ícones -->
      <div class="col-lg-3 coluna">
        <div class="icons d-flex justify-content-end gap-3">
          <a href="#" class="img-icons" id="icon-login"><img src="../assets/images/icons/person_24dp_000000_FILL0_wght400_GRAD0_opsz24.png" alt=""></a>
          <a href="#" class="img-icons" id="icon-favorite"><img src="../assets/images/icons/favorite_24dp_000000_FILL0_wght400_GRAD0_opsz24.png" alt=""></a>
          <a href="#" class="img-icons"><img src="../assets/images/icons/shopping_bag_24dp_000000_FILL0_wght400_GRAD0_opsz24.png" alt=""></a>
          <a href="#" class="img-icons"><img src="../assets/images/icons/search_24dp_000000_FILL0_wght400_GRAD0_opsz24.png" alt=""></a>
        </div>
      </div>

      <!-- Botão de menu (aparece também no desktop) -->
      <div class="col-lg-1 coluna">
        <nav class="navbar bg-white justify-content-end p-0">
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </nav>
      </div>
    </div>
  </div>

  <!-- MENU OFFCANVAS -->
  <div class="offcanvas offcanvas-end text-bg-white" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
    <div class="offcanvas-header">
      <img class="img-logo-nav" src="../assets/images/logo/moscoso.png" alt="Logo Offcanvas">
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Fechar"></button>
    </div>

    <div class="offcanvas-body">
      
      <!-- CONTEÚDO DESKTOP -->
      <div class="d-none d-lg-block">
        <a class="nav-link" href="#">Quem Somos</a>
        <a class="nav-link" href="#">Grupo Moscoso</a>
        <a class="nav-link" href="#">Contactos</a>
      </div>

      <!-- CONTEÚDO MOBILE -->
      <div class="d-block d-lg-none">
        <a class="nav-link" href="#">COLEÇÃO</a>
        <a class="nav-link" href="#">PERSONALIZAÇÃO</a>
        <a class="nav-link" href="#"><img src="../assets/images/icons/person_24dp_000000_FILL0_wght400_GRAD0_opsz24.png" alt=""> Conta</a>
        <a class="nav-link" href="#"><img src="../assets/images/icons/shopping_bag_24dp_000000_FILL0_wght400_GRAD0_opsz24.png" alt=""> Sacola</a>
        <a class="nav-link" href="#"><img src="../assets/images/icons/search_24dp_000000_FILL0_wght400_GRAD0_opsz24.png" alt=""> Buscar</a>
        <hr>
      </div>

    </div>
  </div>
</header>

<div>
  <div id="capa">
    <span class="text-capa">LOJA ONLINE</span>
  </div>
</div>
<div id="area-login"></div>
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
    // Primeiro, calcula o total e guarda os produtos
    while($row = $result->fetch_assoc()) {
        $produtos[] = $row;
        $total_estoque += $row['quantidade_estoque'];
    }
  
    // Mostra o total antes da lista
    echo "<p class='text-qtd-velas'><strong>VELAS</strong> ($total_estoque)</p>";
    echo "<ul class='lista-velas'>";

    // Agora mostra a lista
    foreach ($produtos as $produto) {
        echo "<li class='produto-lista'>" . "<a href='' class='link-velas-colecao'>" .htmlspecialchars($produto['nome']) . "</a>" . " (" . $produto['quantidade_estoque'] . ")</li>";
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
<script src="../assets/js/global.js?=v1.1"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>
