//area usuario
document.addEventListener('DOMContentLoaded', function () {
  const linkLogin = document.getElementById('icon-login');

  linkLogin.addEventListener('click', function (e) {
    e.preventDefault();

    fetch('http://localhost/velas_master/pages/area_login_usuario.php')
      .then(response => response.text())
      .then(html => {
        // Mostra login, esconde produtos
        document.getElementById('area-login').innerHTML = html;
        document.getElementById('area-venda-produtos').style.display = 'none';

        // Espera o DOM da nova área ser injetado
        setTimeout(() => {
          const btnVoltar = document.getElementById('btn-voltar-produtos');
          if (btnVoltar) {
            btnVoltar.addEventListener('click', function () {
              document.getElementById('area-login').innerHTML = '';
              document.getElementById('area-venda-produtos').style.display = 'block';
            });
          }
        }, 100); // pequeno delay opcional para garantir que o DOM foi renderizado
      })
      .catch(error => {
        console.error('Erro ao carregar conteúdo:', error);
      });
  });
});

//area favortio
document.addEventListener('DOMContentLoaded', function () {
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
});

document.getElementById('icon-favorite').addEventListener('click', function (e) {
  e.preventDefault();

  const favoritos = JSON.parse(localStorage.getItem('favoritos')) || [];

  fetch('../actions/get_favoritos.php', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json'
    },
    body: JSON.stringify({ ids: favoritos })
  })
    .then(res => res.text())
    .then(html => {
      document.getElementById('area-produtos').innerHTML = html;
    })
    .catch(error => {
      console.error('Erro ao carregar favoritos:', error);
    });
});

let produtosOriginais = ''; // Para guardar os produtos iniciais

document.addEventListener('DOMContentLoaded', function () {
  const areaProdutos = document.getElementById('area-produtos');
  produtosOriginais = areaProdutos.innerHTML; // Salva os cards iniciais

  // Quando clicar no botão de voltar
  document.addEventListener('click', function (e) {
    if (e.target && e.target.id === 'btn-voltar-produtos') {
      e.preventDefault();

      // Restaura os cards originais
      areaProdutos.innerHTML = produtosOriginais;
    }
  });
}); 