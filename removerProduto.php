<?php require_once "Source/Componentes/headG.php"; ?>
<?php include_once( "conexao.php"); ?>

<body>
    <div class="container">
        <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
            <h2> Remover Produtos </h2>
            <form action="Controller/produtoController.php" method="post" name="formulario">
                <input type="hidden" name="acao" value="remover">
                <fieldset>
                    <div class="col md-6">
                        <div class="textos">
                            <p>Produto
                                <select class="appearance-select" id="produto" name="produto">
                                    <option value="" name="produto">
                                        Selecione o produto
                                        <?php foreach ($result as $row) {
                                            echo '<option value=' . $row['nome'] . '>' . $row['nome'] . '</option>';
                                        } ?>
                                </select>
                            </p>
                            <div class="col md-6 center-align">
                                <input type="submit" name="submit" value="Ir" class="botao" /> </a>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
<?php require_once "Public/js/javaScript.js" ?>


</html>