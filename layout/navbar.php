<div class="alert alert-success notification"><p>Adicionando o produto...</p></div>

<nav class="navbar navbar-default" role="navigation">
  <div class="container">
    <div class="collapse navbar-collapse">
      <div class="logo pull-left">
        <a href="<?php echo URL_BASE ?>">
          <img src="<?php echo URL_BASE ?>assets/img/logo.png" href="#">
        </a>
      </div> 
      <ul class="nav navbar-nav navbar-right">
        <li style="margin-top:40px">
          <a href="<?php echo URL_BASE ?>index.php?acao=carrinho"><span class="glyphicon glyphicon-shopping-cart"></span> Carrinho de compras (<?php echo count($carrinho) ?>)</a>
        </li>
        <?php if( ! $_SESSION['cliente']): ?>
        <li style="margin-top:40px">
          <a href="<?php echo URL_BASE ?>index.php?acao=usuario"><span class="glyphicon glyphicon-user"></span> Login</a>
        </li>
        <?php else: ?>
        <li style="margin-top:40px">
          <a href="<?php echo URL_BASE ?>index.php?acao=sair"><span class="glyphicon glyphicon-off"></span> Sair</a>
        </li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>