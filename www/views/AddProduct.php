
    <!-- Main Content -->
    <main class="content">
      <h1 class="title new-item">Novo Produto</h1>
      
      <form action="<?php echo BASE_URL?>/Product/insert" enctype = "multipart/form-data" method="POST">
        <div class="input-field">
          <label for="sku" class="label">SKU</label>
          <input type="text" id="sku" required name="sku" class="input-text" /> 
        </div>
        <div class="input-field">
          <label for="name" class="label">Nome do Produto</label>
          <input type="text" id="name" required name="name"class="input-text" /> 
        </div>
        <div class="input-field">
          <label for="price" class="label">Preço</label>
          <input type="text" id="price" required name="price"class="input-text" /> 
        </div>
        <div class="input-field">
          <label for="quantity" class="label">Quantidade</label>
          <input type="number" id="quantity" required name="quantity"class="input-text" /> 
        </div>
        <div class="input-field">
          <label for="category" class="label">Categoria</label>
        </div>
        <div class="input-field">
          <label for="description" class="label">Descrição</label>
          <textarea id="description" class="input-text" required name="description"></textarea>
        </div>
        <div class="input-field">
          <label for="image" class="label">Selecione uma imagem</label>
          <input id="image" type="file" name="arquivo" class="input-text">
        </div>
        <div class="actions-form">
          <a href="<?php echo BASE_URL?>/Product" class="action back">Voltar</a>
          <p>Para adicionar um novo produto, é obrigatório ter ao menos 1 categoria disponível para seleção</p>
          <input class="btn-submit btn-action" type="submit" value="Salvar Produto" />
        </div>
        
      </form>
    </main>
    <!-- Main Content -->