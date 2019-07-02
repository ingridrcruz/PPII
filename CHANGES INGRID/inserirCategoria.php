<?php require_once "Source/Componentes/headG.php"; ?>
<?php include_once( "conexao.php"); ?>

<body>
    <div class="container">
    <div class="col-md-12 col-lg-12">         
            <h2> Cadastro de Categorias </h2>
            <form action="../Controller/categoriaController.php" method="post" name="formulario">
                <input type="hidden" name="acao" value="salvar">
                <fieldset>
                    <div class="col md-6">
                        <div class="textos">
                    <p>Nome<input class="textos2" type="text" name="nome" required autofocus/> </p>
                        </div>
                    </div>
                    <div class="col md-6 center-align">
                                <input type="submit" name="submit" value="SALVAR" class="botao" /> </a>
                            </div>
                </fieldset>
            </form>
        </div>
    </div>

<?php require_once "./Public/js/javaScript.js"; ?>

</body>

</html>