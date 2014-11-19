<div class="col-md-12">

  <h1><?php echo $titulo_pagina; ?></h1>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Código</th><th>Produto</th><th>Departamento</th><th>Preço</th><th>Ações</th>
      </tr>
    </thead>
    <tbody>
      <?php if(count($registros) > 0): ?>
      <?php foreach($registros as $registro): ?>

        <tr>
          <td><?php echo $registro['id'] ?></td>
          <td>             
            <!-- validando o left join da imagem -->            
            <?php if($registro['foto']): ?>
              <img src="<?php echo URL_BASE ?>assets/img/<?php echo $registro['foto'] ?>" width='65' height='40'>
            <?php else: ?>
              <img src="<?php echo URL_BASE ?>assets/img/default.jpeg" width='65' height='40'>
            <?php endif ?>

            <?php echo $registro['nome_produto'] ?>
          </td>
          <td><?php echo $registro['nome_departamento'] ?></td>
          <td>R$ <?php echo number_format($registro['preco'], 2, ',', '.') ?></td>
          <td class='acoes'>
            <a href='<?php echo URL_BASE ?>admin/produtos.php?acao=alterar&id=<?php echo $registro['id'] ?>'>Alterar</a>&nbsp;&nbsp;
            <a href='javascript:if(confirm("Confirma a exclusão?")) { document.location="<?php echo URL_BASE ?>admin/produtos.php?acao=excluir&id=<?php echo $registro['id'] ?>"}'>Excluir</a>
          </td>
        </tr>

      <?php endforeach ?>
      <?php else: ?>
        <tr><td colspan="5">Nenhum produto cadastrado!</td></tr>
      <?php endif ?>
    </tbody>
  </table>
  <div class="form-group"><button type="button" class="btn btn-default" onclick="document.location='<?=URL_BASE;?>admin/produtos.php?acao=incluir';">Novo</button></div>

</div>