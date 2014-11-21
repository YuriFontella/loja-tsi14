
<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <div class="collapse navbar-collapse">
        <div class="logo">
            <img src="<?php echo URL_BASE ?>assets/img/logo.png" href="#">
        </div>
            
        
        
    </div>
    </div>
</nav>

<body>
    <div class="conteudo">
        <div class="row">
            <div class="col-md-2">
                <div class="list-group">
                    <?php foreach ($deptos as $depto) { ?>
                        <a href="#" class="list-group-item"><?= $depto['nome'] ?></a>
                    <?php } /* end foreach */ ?> 
                </div>
            </div>
            <div class="col-md-10">
                <?php foreach ($chamadas as $chamada) { ?>
                    <div class="col-sm-4">
                        <div id="produto" class="thumbnail">                

                            <?php
                            $caminhoFoto = $chamada['foto'];

                            if ($caminhoFoto) {
                                $img_produto = URL_BASE . "assets/img/" . $caminhoFoto;
                            } else {
                                $img_produto = URL_BASE . "assets/img/default.jpeg";
                            }
                            ?>
                            <?php //var_dump($chamada); ?>
                            <a class="alinhamento" href=""><h3><?php echo $chamada['nome_produto'] ?></h3></a>
                            <a href="">
                                <img class="imagem mostrar" src="<?= $img_produto ?>" width="150" height="150">                  
                            </a>
                            <hr>
                            <p><?= substr($chamada['detalhes'], 0, 52) ?></p>
                            <a href=""><strong><h3>Valor <?php echo "R$" . $chamada['preco'] ?></h3></strong></a>
                            <div class="botaoComprar">
                                <a type="button" class="btn btn-info btn-block botaoComprar">Adicionar ao carrinho</a>
                            </div>
                        </div>  
                    </div>

                <?php } /* end foreach */ ?> 

            </div>
        </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo URL_BASE ?>assets/js/bootstrap.min.js"></script>
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
