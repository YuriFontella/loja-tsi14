<!-- Modal -->
<div class="modal fade" id="dep" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Incluir um Departamento</h4>
      </div>
      <div class="modal-body">
        <form role="form" method="post" action="<?php echo URL_BASE; ?>admin/produtos.php?acao=departamento"> 
        <div class="form-group">
          <label>Nome departamento</label>
          <input class="form-control" type="text" name="nome">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-success">Salvar</button>
        </form>
      </div>
    </div>
  </div>
</div>