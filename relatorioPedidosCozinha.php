<?php
$pedidos_cozinha = [

    ['Miguel', 'Hamburguer', '0001', '2', '2', '0', 'Atendido'],
    ['Davi', 'Coca-cola', '0002', '3', '3', '0', 'Atendido'],
    ['Weverson', 'Morango', '0003', '2', '1', '1', 'Pendente'],
];

?>


<!DOCTYPE html>
    <html lang="pt-br">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Pedidos da Cozinha</title>
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
                <fieldset>
                    <legend><b>Pedidos da Cozinha</b> </legend>
                    <br>
                    <table>

                        <thead>

                            <tr>
                                <th>Solicitante</th>
                                <th>Produto</th>
                                <th>Nº Pedido</th>
                                <th>Qtd Solicitada</th>
                                <th>Qtd Atendida</th>
                                <th>Qtd Pendente</th>
                                <th>Situação</th>

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
                            </tr>

                            <?php endforeach; ?>

                        </tbody>
                    </table>
                    
                </fieldset>
        </div>
    </body>
    </html>