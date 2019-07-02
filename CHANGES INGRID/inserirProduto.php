<?php require_once "Source/Componentes/headG.php"; ?>
<?php include_once( "conexao.php"); ?>

<body>
    <div class="container">
    <div class="col-md-12 col-lg-12">         
            <h2> Cadastro de Produtos </h2>
            <form action="../Controller/produtoController.php" method="post" name="formulario">
                <input type="hidden" name="acao" value="salvar">
                <fieldset>
                    <div class="col md-6">
                        <div class="textos">
                    <p>Nome<input class="textos2" type="text" name="nome" required autofocus/> </p>
                    <p>Preço<input class="textos2" type="text" name="valor" required /> </p>
                    <p>Quantidade<input class="textos2" type="number" name="qtd" min="0" max="10" required /> </p>

                    <p>Categoria<select class="appearance-select" id="categoria" name="categoria">
                            <option value="" name="categoria">
                        Selecione a categoria
                                </select>
                            </p>
                            <p>Descrição<input class="textos2" type="text" name="descr" required /> </p>
                            <p>Imagem
                                <label for="exampleFormControlFile1"></label>
                                <input type="file" class="form-control-file" id="exampleFormControlFile1">
                            <div class="col md-6 center-align">
                                <input type="submit" name="submit" value="SALVAR" class="botao" /> </a>
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