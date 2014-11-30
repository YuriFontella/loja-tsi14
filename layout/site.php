<?php require_once("layout/head.php") ?>

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
        <li style="margin-top:40px"><a href="<?php echo URL_BASE ?>index.php?acao=carrinho">Carrinho de compras (<?php echo count($carrinho) ?>)</a></li>
      </ul>
    </div>
  </div>
</nav>

<body>
  
    <div class="container">
      <div class="row">

      <?php require_once("layout/menu_categoria.php") ?>
      <?php require_once($content) ?>
          
      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo URL_BASE ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo URL_BASE ?>assets/js/scripts.js"></script>
    <script>
        function equalHeight(group) {
            tallest = 0;
            group.each(function () {
                thisHeight = $(this).height();
                if (thisHeight > tallest) {
                    tallest = thisHeight;
                }
            });
            group.each(function () {
                $(this).height(tallest);
            });
        }

        $(document).ready(function () {
            equalHeight($(".thumbnail"));
        });
    </script>
</body>
</html>
