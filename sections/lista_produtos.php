<h1><?php echo $titulo_pagina; ?> <small><a href="#" data-toggle="modal" data-target="#dep" class="pull-right">Incluir Departamento</a></small></h1>
<table class="table table-hover table-striped">
  <thead>
    <tr>
      <th>Código</th><th>Nome</th><th>Departamento</th><th>Preço</th><th>Ações</th>
    </tr>
  </thead>
  <tbody>
    <?php
      foreach($registros as $registro)
      {
        echo "
          <tr>
            <td>" . $registro['id'] . "</td>
            <td>{$registro['nome_produto']}</td>
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
  </tbody>
</table>
<div class="form-group"><button type="button" class="btn btn-default" onclick="document.location='<?=URL_BASE;?>admin/produtos.php?acao=incluir';">Novo</button></div>

<?php require_once("departamento-modal.php") ?>