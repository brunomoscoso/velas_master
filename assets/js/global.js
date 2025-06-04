// 🔁 Carrega os cards dos produtos
function carregarVelas() {
  fetch('http://localhost/velas_master/actions/cards_produtos.php')
    .then(response => response.text())
    .then(html => {
      document.getElementById('area-produtos').innerHTML = html;
    })
    .catch(error => {
      document.getElementById('area-produtos').innerHTML = '<p>Erro ao carregar os produtos.</p>';
      console.error('Erro:', error);
    });
}

// 🔁 Carrega a quantidade de velas (coleções)
function carregarQuantidadeVelas() {
  fetch('http://localhost/velas_master/actions/quantidade_velas.php')
    .then(response => response.text())
    .then(html => {
      document.getElementById('area-qtd-velas').innerHTML = html;
    })
    .catch(error => {
      document.getElementById('area-qtd-velas').innerHTML = '<p>Erro ao carregar as coleções.</p>';
      console.error('Erro:', error);
    });
}

// 👤 Área de login
function configurarLogin() {
  const linkLogin = document.getElementById('icon-login');

  if (!linkLogin) return;

  linkLogin.addEventListener('click', function (e) {
    e.preventDefault();

    fetch('http://localhost/velas_master/pages/area_login_usuario.php')
      .then(response => response.text())
      .then(html => {
        document.getElementById('area-login').innerHTML = html;
        document.getElementById('area-venda-produtos').style.display = 'none';

        // Ativa o botão de voltar da área de login
        setTimeout(configurarBotaoVoltarLogin, 100);
      })
      .catch(error => {
        console.error('Erro ao carregar conteúdo:', error);
      });
  });
}

// ⭐ Sistema de favoritos
function configurarFavoritos() {
  // Clique no botão de favorito
  document.addEventListener('click', function (e) {
    if (e.target.classList.contains('btn-favorito')) {
      e.preventDefault();
      const id = e.target.getAttribute('data-id');
      e.target.classList.toggle('favoritado');

      let favoritos = JSON.parse(localStorage.getItem('favoritos')) || [];

      if (favoritos.includes(id)) {
        favoritos = favoritos.filter(item => item !== id);
      } else {
        favoritos.push(id);
      }

      localStorage.setItem('favoritos', JSON.stringify(favoritos));
    }
  });

  const iconFavorite = document.getElementById('icon-favorite');
  if (iconFavorite) {
    iconFavorite.addEventListener('click', function (e) {
      e.preventDefault();

      const favoritos = JSON.parse(localStorage.getItem('favoritos')) || [];

      fetch('http://localhost/velas_master/actions/get_favoritos.php', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json'
        },
        body: JSON.stringify({ ids: favoritos })
      })
        .then(res => res.text())
        .then(html => {
          document.getElementById('area-produtos').innerHTML = html;

          // Ativa o botão de voltar da área de favoritos
          setTimeout(configurarBotaoVoltarFavoritos, 100);
        })
        .catch(error => {
          console.error('Erro ao carregar favoritos:', error);
        });
    });
  }
}

// 🔙 Botão de voltar da área de login
function configurarBotaoVoltarLogin() {
  const btnVoltar = document.getElementById('btn-voltar-produtos');
  if (btnVoltar) {
    btnVoltar.addEventListener('click', function () {
      document.getElementById('area-login').innerHTML = '';
      document.getElementById('area-venda-produtos').style.display = 'block';
      carregarVelas();
      carregarQuantidadeVelas();
    });
  }
}

// 🔙 Botão de voltar da área de favoritos
function configurarBotaoVoltarFavoritos() {
  const btnVoltar = document.getElementById('btn-voltar-produtos');
  if (btnVoltar) {
    btnVoltar.addEventListener('click', function () {
      document.getElementById('area-venda-produtos').style.display = 'block';
      carregarVelas();
      carregarQuantidadeVelas();
    });
  }
}

// 🚀 Quando o DOM estiver pronto, chama todas as funções
document.addEventListener('DOMContentLoaded', function () {
  carregarVelas();
  carregarQuantidadeVelas();
  configurarLogin();
  configurarFavoritos();
});

