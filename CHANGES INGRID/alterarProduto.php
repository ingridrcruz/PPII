<?php require_once "Source/Componentes/headG.php"; ?>
<?php include_once( "conexao.php"); ?>

<body>
    <div class="container">
    <div class="col-md-12 col-lg-12">         
            <h2> Alterar Produtos </h2>
            <form action="../Controller/produtoController.php" method="post" name="formulario">
                <input type="hidden" name="acao" value="salvar">
                <fieldset>
                <div class="col-md-12 col-lg-12">         
                        <div class="textos">
                   
                    <p>Produto<select class="appearance-select" id="produto" name="produto">
                            <option value="" name="produto">
                        Selecione o produto
                                </select>
                            </p>
                            
                            <div class="col md-6 center-align">
                                <input type="submit" name="submit" value="LISTAR" class="botao" /> </a>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>

<?php require_once "./Public/js/javaScript.js"; ?>

</body>

</html>