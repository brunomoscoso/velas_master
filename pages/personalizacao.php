<div class="container my-5">
  <h2 class="mb-4">Personalize sua Vela</h2>
  
  <form id="form-personalizacao">
    <!-- Nome -->
    <div class="mb-3">
      <label for="nome" class="form-label">Nome completo</label>
      <input type="text" class="form-control" name="nome" id="nome" required>
    </div>

    <!-- Telefone -->
    <div class="mb-3">
      <label for="telefone" class="form-label">Telefone</label>
      <input type="tel" class="form-control" name="telefone" id="telefone" required>
    </div>

    <!-- Endereço -->
    <div class="mb-3">
      <label for="endereco" class="form-label">Endereço</label>
      <textarea class="form-control" name="endereco" id="endereco" rows="2" required></textarea>
    </div>

    <!-- Email -->
    <div class="mb-3">
      <label for="email" class="form-label">E-mail</label>
      <input type="email" class="form-control" name="email" id="email" required>
    </div>

    <!-- Data de entrega -->
    <div class="mb-3">
      <label for="data_entrega" class="form-label">Data de entrega desejada</label>
      <input type="date" class="form-control" name="data_entrega" id="data_entrega" required>
    </div>

    <!-- Cor -->
    <div class="mb-3">
      <label for="cor" class="form-label">Cor da vela</label>
      <select class="form-select" name="cor" id="cor" required>
        <option value="">Selecione uma cor</option>
        <option value="Branca">Branca</option>
        <option value="Vermelha">Vermelha</option>
        <option value="Roxa">Roxa</option>
        <option value="Amarela">Amarela</option>
        <option value="Azul">Azul</option>
      </select>
    </div>

    <!-- Aroma -->
    <div class="mb-3">
      <label for="aroma" class="form-label">Aroma</label>
      <input type="text" class="form-control" name="aroma" id="aroma" placeholder="Lavanda, Canela, Baunilha...">
    </div>

    <!-- Mensagem -->
    <div class="mb-3">
      <label for="mensagem" class="form-label">Mensagem personalizada (opcional)</label>
      <textarea class="form-control" name="mensagem" id="mensagem" rows="3"></textarea>
    </div>

    <!-- Botões -->
    <div class="d-flex justify-content-between">
      <button type="submit" class="btn btn-success">Enviar Pedido</button>
      <button type="button" class="btn btn-secondary" id="btn-voltar-produtos">Voltar</button>
    </div>

    <div id="mensagem-sucesso" class="mt-3 text-success fw-bold"></div>
  </form>
</div>
