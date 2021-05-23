  <!-- Main Content -->
  <main class="content">
    <h1 class="title new-item">Nova Categoria</h1>

    <form action="../backend/CategoryRepository.php" method="POST">
      <div class="input-field">
        <label for="category-name" class="label">Nome de categoria</label>
        <input type="text" id="category-name"  name="category-name"class="input-text" />
        
      </div>
      <div class="input-field">
        <label for="category-code" class="label">Código de categoria</label>
        <input type="text" id="category-code" name="category-code" class="input-text" />
        
      </div>
      <div class="actions-form">
        <a href="<?php BASE_URL?>/Category" class="action back">Voltar</a>
        <input class="btn-submit btn-action"  type="submit" value="Salvar" />
      </div>
    </form>
  </main>
  <!-- Main Content -->