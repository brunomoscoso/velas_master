<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/global.css?v=2.1">
    <title>Loja de Velas</title>
</head>
<body>

<header class="bg-white py-2">
  <div class="container-fluid">
    <!-- Mobile -->
    <div class="d-flex d-lg-none justify-content-between align-items-center">
      <a href="" class="logo-mobile">
        <img src="../assets/images/logo/moscoso.png" alt="Logo" class="img-mobile-logo">
      </a>
      <div class="container-mobile-icons">
        <a class="nav-link-menu" href="#"><img src="../assets/images/icons/person_24dp_000000_FILL0_wght400_GRAD0_opsz24.png" alt=""></a>
        <a class="nav-link-menu" href="#"><img src="../assets/images/icons/shopping_bag_24dp_000000_FILL0_wght400_GRAD0_opsz24.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
          <img src="../assets/images/icons/menu_24dp_434343_FILL0_wght400_GRAD0_opsz24 (1).svg" alt="" class="botao-mobile">
        </button>
      </div>
    </div>

    <!-- Desktop -->
    <div class="row align-items-center d-none d-lg-flex text-center">
      <div class="col-lg-3">
        <div class="menu d-flex justify-content-start gap-3">
          <a href="#" class="link-menu img-icons link-colecao" >COLEÇÃO</a>
          <a href="#" class="link-menu img-icons link-personalizacao" id="">PERSONALIZAÇÃO</a>
        </div>
      </div>
      <div class="col-lg-5">
        <a href="http://localhost/velas_master/pages/index.php" id="logo">
          <img id="img-logo" class="img-fluid" src="../assets/images/logo/moscoso.png" alt="Logo">
        </a>
      </div>
      <div class="col-lg-3">
        <div class="icons d-flex justify-content-end gap-3">
          <a href="#" class="img-icons" id="icon-login"><img src="../assets/images/icons/person_24dp_000000_FILL0_wght400_GRAD0_opsz24.png" alt=""></a>
          <a href="#" class="img-icons" id="icon-favorite"><img src="../assets/images/icons/favorite_24dp_000000_FILL0_wght400_GRAD0_opsz24.png" alt=""></a>
          <a href="#" class="img-icons link-carrinho"><img src="../assets/images/icons/shopping_bag_24dp_000000_FILL0_wght400_GRAD0_opsz24.png" alt="">(<span id="contador-carrinho">0</span>)</a>
          <a href="#" class="img-icons"><img src="../assets/images/icons/search_24dp_000000_FILL0_wght400_GRAD0_opsz24.png" alt=""></a>
        </div>
      </div>
      <div class="col-lg-1">
        <nav class="navbar bg-white justify-content-end p-0">
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </nav>
      </div>
    </div>
  </div>

  <!-- Offcanvas Menu -->
  <div class="offcanvas offcanvas-end text-bg-white" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
    <div class="offcanvas-header">
      <img class="img-logo-nav" src="../assets/images/logo/moscoso.png" alt="Logo Offcanvas">
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Fechar"></button>
    </div>
    <div class="offcanvas-body">
      <div class="d-none d-lg-block">
        <a class="nav-link link-somos" href="#">Quem Somos</a>
        <a class="nav-link link-grupo" href="#">Grupo Moscoso</a>
        <a class="nav-link" href="#">Contactos</a>
      </div>
      <div class="d-block d-lg-none">
        <a class="nav-link link-colecao" href="#">COLEÇÃO</a>
        <a class="nav-link link-personalizacao" href="#">PERSONALIZAÇÃO</a>
        <a class="nav-link link-somos" href="#">Quem Somos</a>
        <a class="nav-link link-grupo" href="#">Grupo Moscoso</a>
        <a class="nav-link" href="#"><img src="../assets/images/icons/person_24dp_000000_FILL0_wght400_GRAD0_opsz24.png" alt=""> Conta</a>
        <a class="nav-link link-carrinho" href="#" ><img src="../assets/images/icons/shopping_bag_24dp_000000_FILL0_wght400_GRAD0_opsz24.png" alt="" > Sacola</a>
        <a class="nav-link" href="#"><img src="../assets/images/icons/search_24dp_000000_FILL0_wght400_GRAD0_opsz24.png" alt=""> Buscar</a>
        <hr>
      </div>
    </div>
  </div>
</header>

<div id="capa">
  <span class="text-capa">LOJA ONLINE</span>
</div>
<div id="section-colecao"></div>
<div id="area-login"></div>
<div id="area-carrinho"></div>

<section id="area-venda-produtos">
  <div class="container text-center">
    <div class="row">
      <!-- Filtros -->
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
          <div id="area-qtd-velas"></div>
        </div>
      </div>
      <!-- Produtos -->
      <div class="col-sm-9">
        <div class="row" id="area-produtos"></div>
      </div>
    </div>
  </div>
</section>

<footer class="bg-light text-dark mt-5 pt-4 pb-3 border-top">
  <div class="container">
    <div class="row">
      <!-- Institucional -->
      <div class="col-md-3 mb-3">
        <h5>Institucional</h5>
        <ul class="list-unstyled">
          <li><a href="#" class="text-decoration-none text-dark link-quem-somos">Quem Somos</a></li>
          <li><a href="#" class="text-decoration-none text-dark link-grupo-moscoso">Grupo Moscoso</a></li>
          <li><a href="#" class="text-decoration-none text-dark">Contactos</a></li>
        </ul>
      </div>

      <!-- Navegação -->
      <div class="col-md-3 mb-3">
        <h5>Navegação</h5>
        <ul class="list-unstyled">
          <li><a href="#" class="text-decoration-none text-dark link-colecao">Coleção</a></li>
          <li><a href="#" class="text-decoration-none text-dark link-personalizacao">Personalização</a></li>
        </ul>
      </div>

      <!-- Contato -->
      <div class="col-md-3 mb-3">
        <h5>Contato</h5>
        <p class="mb-1">📍 Rua das Velas, 123<br>Lisboa - Portugal</p>
        <p class="mb-1">📞 +351 912 345 678</p>
        <p>✉️ contato@moscosovelas.pt</p>
      </div>

      <!-- Redes sociais -->
      <div class="col-md-3 mb-3">
        <h5>Siga-nos</h5>
        <div class="d-flex gap-2">
          <a href="#" target="_blank"><img src="../assets/images/icons/facebook.svg" alt="Facebook" width="24"></a>
          <a href="#" target="_blank"><img src="../assets/images/icons/instagram.svg" alt="Instagram" width="24"></a>
          <a href="#" target="_blank"><img src="../assets/images/icons/youtube.svg" alt="YouTube" width="24"></a>
        </div>
      </div>
    </div>

    <hr>

    <div class="row">
      <div class="col text-center">
        <small>&copy; 2025 Moscoso Velas. Todos os direitos reservados.</small>
      </div>
    </div>
  </div>
</footer>


<script src="../assets/js/global.js?v=2.4"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>
