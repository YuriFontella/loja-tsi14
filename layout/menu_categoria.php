<div class="col-md-3">
  <div class="list-group">
      <?php foreach ($deptos as $depto) { ?>
          <a href="<?= URL_BASE ?>index.php?acao=categoria&id=<?= $depto['id'] ?>" class="list-group-item"><?= $depto['nome'] ?></a>
      <?php } /* end foreach */ ?> 
  </div>
</div>