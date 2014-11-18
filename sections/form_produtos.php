			<h1><?php echo $titulo_pagina; ?></h1>

			<form method="post"	action="<?php echo URL_BASE; ?>admin/produtos.php?acao=gravar" role="form">
				<?php
					// se há um id definido (se é uma alteração)
					if (isset($id_prod))
					{
						echo '<input type="hidden" name="id" value="'. $id . '">';
					}
				?>
        <div class="form-group">
          <label for="nome">Nome:</label>
          <input type="text" class="form-control" name="nome" id="nome" value="<?=isset($nome_prod) ? $nome_prod : ''; ?>">
        </div>
        <div class="form-group">
          <label for="id_departamento">Departamento:</label>
          <select name="id_departamento" class="form-control" id="id_deparmento">
            <?php echo isset($nome_dep, $id_dep) ? '<option value="'. $id_dep .'">' . $nome_dep . '</option>' : '<option></option>'; ?>
            <?php echo isset($lista_deptos) ? $lista_deptos : ''; ?>
          </select>
        </div>
        <div class="form-group">
          <label for="detalhes">Detalhes:</label>
          <textarea name="detalhes" class="form-control" id="detalhes"	rows="4" cols="40"><?=isset($detalhes) ? $detalhes : ''; ?></textarea>
        </div>
        <div class="form-group">
          <label for="preco">Preço:</label>
          <input type="text" class="form-control" name="preco"	id="preco" value="<?=isset($preco) ? $preco : ''; ?>">
        </div>
		    <button type="submit" class="btn btn-default">Gravar</button>
			</form>