<?php
$pedidos_cozinha = [

    ['Hamburguer', '85', '96', '100', '73'],
    ['Maionese', '15', '20', '25', '10'],
    ['Pão', '85', '96', '100', '73'],
    ['Queijo', '5', '10', '13', '3'],

];

?>

<!DOCTYPE html>
    <html lang="pt-br">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Projeção para Aquisição de Produtos</title>
    </head>
    <body>
        <header>
            <nav class="menu">
                <ul class="menuFornecedor">
                    <li><a href="cadastroFornecedor.php">Fornecedor</a>
                    </li>
                    <li><a href="cadastroProduto.php">Produtos</a></li>
                    <li><a href="registroPedidoCozinha.php">Pedidos</a></li>
                    <li><a href="registroAquisicoes.php">Aquisições</a></li>
                    <li><a href="#">Relatórios</a>
                        <ul>
                            <!-- <li><a href="projecaoAquisicaoProdutos.php">Projeção para Aquisição de Produtos</a></li> -->
                            <li><a href="relatorioMonitoramentoAlteracoes.php">Monitoramento de Alterações</a></li>
                            <li><a href="relatorioProdutosEstoque.php">Produtos em Estoque</a></li>
                            <li><a href="relatorioProdutosEntregues.php">Produtos Entregues</a></li>
                            <li><a href="relatorioPedidosCozinha.php">Pedidos da Cozinha</a></li>
                            <li><a href="relatorioSaidaProdutos.php">Saída de Produtos</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </header>
        <div class="box">
            <form action="">
                <fieldset>
                    <legend><b>Projeção para Aquisição de Produtos</b> </legend>
                    <br><br>
                    <div class="inputdatasrelatorio">
                    <label for="data_inicio"><b>Data de Início</b></label>
                    <input type="date" name="data_inicio" id="data_inicio" placeholder="Início" required>
                    <label for="data_fim"><b>Data Fim</b></label>
                    <input type="date" name="data_fim" id="data_fim" placeholder="Fim" required>
                    <a href="#" id="lupa"><img src="img/lupa2.png" width="35"></a>
                        <br><br><br><br>
                        <!-- <input type="text" name="relProdEntr" id="relProdEntr" placeholder="Produto" class="inputUser" required>  -->
                       
                    </div>
                    
                </fieldset>
            </form>
        </div>
    </body>
    </html>