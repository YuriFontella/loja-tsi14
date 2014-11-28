<div class="col-md-12">

  <h1>Carrinho <?php echo $_SESSION['carrinho'] ?></h1>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Produto</th>
        <th>Valor</th>
        <th>Detalhes</th>
        <th>Opções</th>
      </tr>
    </thead>
    <tbody>
      <?php if(count($carrinho) > 0): ?>
      <?php foreach($carrinho as $row): ?>      
      <tr>
        <td><p><?php echo $row['nome'] ?></p></td>
        <td><p>R$ <?php echo number_format($row['preco'], 2, ',', '.') ?></p></td>
        <td><p><?php echo substr($row['detalhes'], 0, 80) ?>...</p></td>
        <td><p><a href="<?php echo URL_BASE ?>index.php?acao=remover&id=<?php echo $row['id'] ?>">Remover do carrinho</a></p></td>
      </tr>
      <?php endforeach ?>
      <?php else: ?>
        <td colspan="4"><p>Nenhum item no carrinho!</p></td>
      <?php endif ?>
    </tbody>
  </table>
</div>