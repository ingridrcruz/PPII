<?php require_once "Source/Componentes/headG.php"; ?>
<?php include_once( "conexao.php"); ?>

<body>
    <div class="container">
        <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
            <h2> Alterar Produtos </h2>
            <form action="./Controller/produtoController.php" method="post" name="formulario">
                <input type="hidden" name="acao" value="alterar">
                <fieldset>
                    <div class="col md-6">
                        <div class="textos">

                            <p>Nome <input class="textos2" type="text" name="nome" value="<?php echo $nome; ?>"required autofocus/> </p>
                            <p>Preço <input class="textos2" type="text" name="valor" value="<?php echo $valor; ?>"required/> </p>
                            <p>Categoria<select class="appearance-select" id="categoria" value="<?php echo $nome; ?>"required/> </p>
                            <option value="" name="produto">Selecione a categoria
                                <?php
                                foreach ($result as $row) {
                                    echo '<option value=' . $row['nome'] . '>' . $row['nome'] . '</option>';
                                }
                                ?>
                                </select>
                                </p>
                            <p>Descrição<input class="textos2" type="text" name="descr" required /> </p>
                            <p>Imagem<label for="exampleFormControlFile1"></label>
                                <input type="file" class="form-control-file" id="exampleFormControlFile1">
                            <div class="col md-6 center-align">
                                <input type="submit" name="submit" value="SALVAR" class="botao" /> </a>
                            </div>

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