<div class="cadastro-container">
  <h2>Criar Conta</h2>

  <form id="form-cadastro" method="POST" action="#">
    <label for="nome">Nome completo</label>
    <input type="text" id="nome" name="nome" required>

    <label for="email">E-mail</label>
    <input type="email" id="email" name="email" required>

    <label for="telefone">Telefone</label>
    <input type="text" id="telefone" name="telefone" required>

    <label for="endereco">Endereço</label>
    <input type="text" id="endereco" name="endereco" required>

    <label for="idade">Idade</label>
    <input type="number" id="idade" name="idade" required min="0">

    <label for="senha">Senha</label>
    <input type="password" id="senha" name="senha" required>

    <label for="confirmar_senha">Confirmar Senha</label>
    <input type="password" id="confirmar_senha" name="confirmar_senha" required>

    <button type="submit">Cadastrar</button>
  </form>

  <div id="mensagem-cadastro" class="mensagem-retorno"></div>

  <div class="col-12 text-start mb-3">
    <button id="btn-voltar-produtos">← Voltar para os Produtos</button>
  </div>
</div>
