// 🔁 Carrega os cards dos produtos
function carregarColecao() {
  const linkColecao = document.getElementById('link-colecao');

  if (linkColecao) {
    linkColecao.addEventListener('click', function (e) {
      e.preventDefault();

      fetch('http://localhost/velas_master/actions/cards_colecao.php')
        .then(response => response.text())
        .then(html => {
          // Substitui o conteúdo da área com os cards
          document.getElementById('area-produtos').innerHTML = html;
        })
        .catch(error => {
          document.getElementById('area-produtos').innerHTML = '<p>Erro ao carregar os produtos.</p>';
          console.error('Erro:', error);
        });
    });
  }
}

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


//Formulário de personalização
function configurarFormularioPersonalizacao() {
  const form = document.getElementById('form-personalizacao');
  const mensagemDiv = document.getElementById('mensagem-sucesso');
  const btnVoltar = document.getElementById('btn-voltar-produtos');

  if (!form) return;

  // Envio do formulário via AJAX
  form.addEventListener('submit', function (e) {
    e.preventDefault();

    const formData = new FormData(form);

    fetch('http://localhost/velas_master/actions/salvar_personalizacao.php', {
      method: 'POST',
      body: formData
    })
      .then(res => res.json())
      .then(data => {
        if (data.status === 'sucesso') {
          mensagemDiv.textContent = data.mensagem;
          mensagemDiv.style.color = 'green';
          form.reset();
        } else {
          mensagemDiv.textContent = data.mensagem;
          mensagemDiv.style.color = 'red';
        }
      })
      .catch(err => {
        mensagemDiv.textContent = 'Erro ao enviar o formulário.';
        mensagemDiv.style.color = 'red';
        console.error('Erro:', err);
      });
  });

  // Botão voltar para os produtos
  if (btnVoltar) {
    btnVoltar.addEventListener('click', function () {
      document.getElementById('area-login').innerHTML = '';
      document.getElementById('area-venda-produtos').style.display = 'block';
      carregarVelas();
      carregarQuantidadeVelas();
    });
  }
}

function configurarLinkPersonalizacao() {
  const link = document.getElementById('link-personalizacao');

  if (!link) return;

  link.addEventListener('click', function (e) {
    e.preventDefault();

    fetch('http://localhost/velas_master/pages/personalizacao.php')
      .then(response => response.text())
      .then(html => {
        // Esconde os produtos e mostra a área de personalização
        document.getElementById('area-login').innerHTML = html;
        document.getElementById('area-venda-produtos').style.display = 'none';

        // Ativa os eventos do formulário
        setTimeout(configurarFormularioPersonalizacao, 100);
      })
      .catch(error => {
        console.error('Erro ao carregar personalização:', error);
      });
  });
}

//Cadastro de usuário
function configurarCadastro() {
  const formCadastro = document.getElementById('form-cadastro');
  const mensagem = document.getElementById('mensagem-cadastro');

  if (!formCadastro) return;

  formCadastro.addEventListener('submit', function (e) {
    e.preventDefault();

    const formData = new FormData(formCadastro);

    fetch('http://localhost/velas_master/actions/salvar_cadastro.php', {
      method: 'POST',
      body: formData
    })
      .then(res => res.text())
      .then(texto => {
        mensagem.innerText = texto;
        mensagem.style.color = texto.includes('sucesso') ? 'green' : 'red';

        if (texto.includes('sucesso')) {
          formCadastro.reset(); // limpa o formulário
        }
      })
      .catch(error => {
        mensagem.innerText = 'Erro ao cadastrar.';
        mensagem.style.color = 'red';
        console.error('Erro:', error);
      });
  });
}
function configurarLinkCriarConta() {
  document.addEventListener('click', function (e) {
    if (e.target && e.target.id === 'link-cadastro') {
      e.preventDefault();

      fetch('http://localhost/velas_master/pages/area_cadastro.php')
        .then(res => res.text())
        .then(html => {
          document.getElementById('area-login').innerHTML = html;
          configurarCadastro();
          configurarBotaoVoltarCadastro(); // ativa o envio do formulário de cadastro
        })
        .catch(error => {
          console.error('Erro ao carregar cadastro:', error);
        });
    }
  });
}
function configurarBotaoVoltarCadastro() {
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


// 🚀 Quando o DOM estiver pronto, chama todas as funções
document.addEventListener('DOMContentLoaded', function () {
  carregarQuantidadeVelas();
  carregarColecao();
  carregarVelas();
  configurarLogin();
  configurarFavoritos();
  configurarFormularioPersonalizacao();
  configurarLinkPersonalizacao();
  configurarCadastro();
  configurarLinkCriarConta();
  configurarBotaoVoltarCadastro();
});

