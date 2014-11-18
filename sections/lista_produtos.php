<h1><?php echo $titulo_pagina; ?></h1>
<table class="table table-hover table-striped">
  <thead>
    <tr>
      <th>Código</th><th>Produto</th><th>Departamento</th><th>Preço</th><th>Ações</th>
    </tr>
  </thead>
  <tbody>
    <?php if(count($registros) > 0): ?>
    <?php
      foreach($registros as $registro)
      {
        echo "
          <tr>
            <td>" . $registro['id'] . "</td>
            <td>
              <img src='". URL_BASE ."assets/img/{$registro['foto']}' width='65' height='40'>
              {$registro['nome_produto']}
            </td>
            <td>{$registro['nome_departamento']}</td>
            <td>{$registro['preco']}</td>
            <td class='acoes'>
              <a href='" . URL_BASE . "admin/produtos.php?acao=alterar&id={$registro['id']}'>Alterar</a>&nbsp;&nbsp;
              <a href='javascript:if(confirm(\"Confirma a exclusão?\")){document.location=\"" . URL_BASE . "admin/produtos.php?acao=excluir&id={$registro['id']}\";}'>Excluir</a>
            </td>
          </tr>
        ";
      }
    ?>
    <?php else: ?>
      <tr><td colspan="5">Nenhum produto cadastrado!</td></tr>
    <?php endif ?>
  </tbody>
</table>
<div class="form-group"><button type="button" class="btn btn-default" onclick="document.location='<?=URL_BASE;?>admin/produtos.php?acao=incluir';">Novo</button></div>