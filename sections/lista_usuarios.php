<h1><?php echo $titulo_pagina; ?></h1>
<table>
  <thead>
    <tr>
      <th>Código</th><th>Nome</th><th>e-mail</th><th>login</th><th>Ações</th>
    </tr>
  </thead>
  <tbody>
    <?php
      foreach($registros as $registro)
      {
        echo "
          <tr>
            <td>" . $registro['id'] . "</td>
            <td>{$registro['nome']}</td>
            <td>{$registro['email']}</td>
            <td>{$registro['login']}</td>
            <td width='15%' class='acoes'>
              <a href='" . URL_BASE . "usuarios.php?acao=alterar&id={$registro['id']}'>Alterar</a>&nbsp;&nbsp;
              <a href='" . URL_BASE . "usuarios.php?acao=excluir&id=" . $registro['id'] . "' onclick='return confirm('Deseja realmente remove-lo?')'>Excluir</a>
            </td>
          </tr>
        ";
      }
    ?>
  </tbody>
</table>
<div class="form-group"><button type="button" onclick="document.location='<?=URL_BASE;?>usuarios.php?acao=incluir';">Novo</button></div>