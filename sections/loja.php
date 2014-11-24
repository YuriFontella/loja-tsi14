<div class="col-md-9">
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
                <a href=""><strong><h3>Valor R$ <?php echo number_format($chamada['preco'], 2, ',', '.') ?></h3></strong></a>
                <div class="botaoComprar">
                    <a href="<?php echo URL_BASE ?>index.php?acao=adicionar&produto=<?php echo $chamada['id'] ?>" class="btn btn-info btn-block botaoComprar">Adicionar ao carrinho</a>
                </div>
            </div>  
        </div>

    <?php } /* end foreach */ ?> 

</div>