<?php require_once("layout/head.php") ?>
<?php require_once("layout/navbar.php") ?>
<body>

    <div class="container">
        <div class="row">
            <?php require_once("layout/menu_categoria.php") ?>
            <div class="col-md-9">
                <?php
                $caminhoFoto = $produto['foto'];
                if ($caminhoFoto) {
                    $img_produto = URL_BASE . "assets/img/" . $caminhoFoto;
                } else {
                    $img_produto = URL_BASE . "assets/img/default.jpeg";
                }
                ?>
                <a class="" href=""><h3><?php echo $produto['nome_produto'] ?></h3></a>
                <hr>
                <div class="col-md-8">
                    <img class="mostraProduto" src="<?= $img_produto ?>">  
                </div>
                <div class="col-md-4">
                    <a href=""><strong><h3>Valor R$ <?php echo number_format($produto['preco'], 2, ',', '.') ?></h3></strong></a>
                    <div class="botaoComprar">
                        <button type="button" class="btn btn-info btn-block botaoComprar" id="<?php echo $produto['id'] ?>">Adicionar ao carrinho</button>
                    </div> 
                </div>
                <div class="col-md-12">
                    <hr>
                    <p><?= $produto['detalhes'] ?></p>
                </div>
            </div>
        </div>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="<?php echo URL_BASE ?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo URL_BASE ?>assets/js/scripts.js"></script>   
</body>
</html>
