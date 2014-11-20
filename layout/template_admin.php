<?php

  if($_SESSION['logado'] != TRUE)
  {

    echo "<script>alert('É necessário fazer o login!');window.location = 'index.php';</script>";

  }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $titulo_pagina ?></title>

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
                <li><a href="<?php echo URL_BASE ?>admin/produtos.php">Produtos</a></li>
                <li><a href="<?php echo URL_BASE ?>admin/usuarios.php">Usuários</a></li>
                <li><a href="#" data-toggle="modal" data-target="#dep">Incluir Departamento</a></li>
                <li><a href="<?php echo URL_BASE ?>admin/index.php?acao=sair">Sair</a></li>                  
              </ul>
            </div><!--/.nav-collapse -->
          </div>
        </div>
        <div class="container">
          <div class="row">
            <!-- Alertas -->
            <?php if ($_GET['success'] == 'true'): ?>
                <div class="alert alert-success">
                    <p><?php echo $_GET['message'] ?></p>
                </div>
            <?php endif ?>

            <?php if ($_GET['error'] == 'true'): ?>
                <div class="alert alert-error">
                    <p><?php echo $_GET['message'] ?></p>
                </div>
            <?php endif ?>

            <!-- Container -->
            <?php require_once($content) ?>

            <!-- Footer -->
            <hr>
            <div class="col-md-12 footer">
              <a href="#">Sobre</a>
              <a href="#">Contato</a>
              <a href="#">Produtos</a>
            </div>
          </div>
        </div>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="<?php echo URL_BASE ?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo URL_BASE ?>assets/js/scripts.js"></script>
      
        <?php require_once("departamento-modal.php") ?>
        
    </body>
  </html>
