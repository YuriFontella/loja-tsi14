<!DOCTYPE html>
<html lang="pt">
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $titulo ?></title>

        <!-- Bootstrap -->
        <link href="<?php echo URL_BASE ?>assets/css/bootstrap.css" rel="stylesheet">
        <link href="<?php echo URL_BASE ?>assets/css/estilos.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div id="login" class="panel panel-default">
            <div id="logintitulo" class="panel-heading">Loja TSI 14</div>
            <div id="loginconteudo" class="panel-body">
                <form class="form-signin" method="post" action="<?php echo URL_BASE ?>admin/index.php?acao=login" role="form">
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
                            <input name="login" class="form-control" type="text" placeholder="Usuário" required autofocus tabindex="1">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
                            <input name="senha" class="form-control" type="password" placeholder="Senha" required autofocus tabindex="2">
                        </div>
                    </div>
                    <button class="btn btn-primary btn-block" name="btnSubmit" type="submit">Entrar</button>
                </form>
            </div>
        </div>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="<?php echo URL_BASE ?>assets/js/bootstrap.js"></script>
    </body>
</html>

