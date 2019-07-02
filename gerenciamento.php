<?php
require_once "Source/Componentes/headG.php";
?>
<body>
    <div class="container">
        <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
            <fieldset>
                <div class="col md-6">
                    <?php
                    $valor = $_GET['p'];
                    if ($valor == 'inserirProduto') {
                        require_once 'inserirProduto.php';
                    } else if ($valor == 'alterarProduto') {
                        require_once 'alterarProduto.php';
                    } else if ($valor == 'removerProduto') {
                        require_once 'removerProduto.php';
                    }
                    ?>
                </div>
            </fieldset>
        </div>
    </div>
<?php
require_once "Public/js/javaScript.js"
?>
</body>

</html>