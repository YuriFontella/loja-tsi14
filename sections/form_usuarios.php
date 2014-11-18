<h1><?php echo $titulo_pagina; ?></h1>
  <form method="post" action="<?php echo URL_BASE; ?>admin/usuarios.php?acao=gravar" role="form">
    <?php
      // se há um id definido (se é uma alteração)
      if (isset($id))
      {
        echo '<input type="hidden" name="id" value="'. $id . '">';
      }
    ?>
    <div class="form-group">
      <label for="nome">Nome:</label>
      <input type="text" name="nome" class="form-control" id="nome" value="<?=isset($data['nome']) ? $data['nome'] : ''; ?>">
    </div>
    <div class="form-group">
      <label for="email">e-mail:</label>
      <input type="text" name="email" class="form-control" id="email" value="<?=isset($data['email']) ? $data['email'] : ''; ?>">
    </div>
    <div class="form-group">
      <label for="login">Login:</label>
      <input type="text" class="form-control" name="login" id="login" value="<?=isset($data['login']) ? $data['login'] : ''; ?>">
    </div>
    <div class="form-group">
      <label for="senha">Senha:</label>
      <input type="password" class="form-control" name="senha" id="senha">
    </div>
    <div class="form-group">
      <label for="confirma_senha">Confirmação da senha:</label>
      <input type="password" class="form-control" name="confirma_senha" id="confirma_senha">
    </div>
    <button type="submit" class="btn btn-default">Gravar</button>
  </form>