<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?= $titulo ?></title>

        <!-- Bootstrap -->
        <link href="<?php echo URL_BASE ?>assets/css/bootstrap.css" rel="stylesheet">
        <link href="<?php echo URL_BASE ?>assets/css/bootstrap-theme.css" rel="stylesheet">
        <link href="<?php echo URL_BASE ?>assets/css/estilos.css" rel="stylesheet">


        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
      <div class="navbar navbar-default navbar-static-top" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Loja TSI 14</a>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="<?php echo URL_BASE ?>">Início</a></li>                
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="list-group">
              <a href="#" class="list-group-item disabled">
                TSI LOJA
              </a>
              <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
              <a href="#" class="list-group-item">Morbi leo risus</a>
              <a href="#" class="list-group-item">Porta ac consectetur ac</a>
              <a href="#" class="list-group-item">Vestibulum at eros</a>
            </div>
          </div>
          <div class="col-md-8">
          <?php foreach ($chamadas as $chamada) { ?>
          
          <div class="col-xs-5">
            <div class="thumbnail">                    
            
                <ol class="breadcrumb">
                    <li><a href=""><strong><h5><?php echo $chamada['nome_produto'] ?></h5></strong></a></li>
                </ol>                
                <a href="">
                  <img src="<?=URL_BASE?>assets/img/<?=$chamada['foto']?>" height="200px" width="200px">                  
                </a>
              </div>  
          </div>

          

           <?php } /*end foreach*/ ?> 
          

          </div>
        </div>      
      </div>
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="<?php echo URL_BASE ?>assets/js/bootstrap.min.js"></script>
    </body>
</html>
