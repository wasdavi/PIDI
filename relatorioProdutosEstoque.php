<?php
$pedidos_cozinha = [

    ['Hamburguer', '15', '000111', 'Comida', '01/11/2021', '01/11/2023', 'davi.carvalho', '000015', 'ATM', 'R$ 0,50'],
    ['Refrigerante', '22', '000222', 'Bebida', '05/10/2021', '05/10/2023', 'davi.carvalho', '000022', 'ATM', 'R$ 1,00'],

];

?>

<!DOCTYPE html>
    <html lang="pt-br">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Relatório de Produtos em Estoque</title>
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
                    <legend><b>Relatório de Produtos em Estoque</b> </legend>
                    <br>
                    <table>

                        <thead>

                            <tr>
                                <th>Produto</th>
                                <th>Qtd</th>
                                <th>Código</th>
                                <th>Categoria</th>
                                <th>Dt Entrega</th>
                                <th>Tempo Val.</th>
                                <th>Usuário</th>
                                <th>Nota Fiscal</th>
                                <th>Fornecedor</th>
                                <th>Valor</th>
                            </tr>

                        </thead>

                        <tbody>
                            <?php foreach($pedidos_cozinha as $pedidos): ?>
                            <tr>
                                <td><?= $pedidos[0] ?></td>
                                <td id="tds"><?= $pedidos[1] ?></td>
                                <td id="tds"><?= $pedidos[2] ?></td>
                                <td id="tds"><?= $pedidos[3] ?></td>
                                <td id="tds"><?= $pedidos[4] ?></td>
                                <td id="tds"><?= $pedidos[5] ?></td>
                                <td id="tds"><?= $pedidos[6] ?></td>
                                <td id="tds"><?= $pedidos[7] ?></td>
                                <td id="tds"><?= $pedidos[8] ?></td>
                                <td id="tds"><?= $pedidos[9] ?></td>
                            </tr>

                            <?php endforeach; ?>

                        </tbody>
                    </table>                                        
                    <br>
                    <div class="inputbotom">
                        <input type="submit" name="submit" id="submit" value="Projeção" onclick="redireciona()">
                        <input type="submit" name="submit" id="submit" value="Estatísticas">
                        <button id="myButton" class="float-left submit-button" >Home</button>
                    </div>
                </fieldset>
            </form>
            <script type="text/javascript">
                document.getElementById("myButton").onclick = function () {
                    location.href = "projecaoAquisicaoProdutos1.php";
                };
            </script>
        </div>
    </body>
    </html>