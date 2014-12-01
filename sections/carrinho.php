<div class="col-md-12">

  <h1>Carrinho</h1>
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
      <tr>
        <td colspan="4"><p>Nenhum item no carrinho!</p></td>      
      </tr>
      <?php endif ?>
      <?php if(count($carrinho) > 0): ?>
      <tr>
        <td colspan="2"><h3><b>Valor Total: R$ <?php echo number_format($carrinho[0]['total'], 2, ',', '.') ?></h3></b></td>
        <td colspan="2"><button class="btn btn-primary pull-right" onclick="window.location = 'index.php?acao=finalizar'">Finalizar compra</button></td>      
      </tr>
      <?php endif ?>
    </tbody>
  </table>
</div>