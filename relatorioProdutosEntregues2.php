<?php
$produtos_entregues = [

    ['Hamburguer', '15', 'R$ 0,50', 'Sim', '01/11/2021', '01/11/2023', '10/11/2021', '000015'],
    ['Hamburguer', '22', 'R$ 1,00', 'Não', '05/10/2021', '05/10/2023', '03/10/2021', '000022'],
    ['', 'Total: 37', 'Média: 0,79', '', '', '', '', ''],

];

?>

<!DOCTYPE html>
    <html lang="pt-br">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Relatório de Produtos Entregues</title>
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
                            <li><a href="relatorioProdutosEntregues1.php">Produtos Entregues</a></li>
                            <li><a href="relatorioPedidosCozinha.php">Pedidos da Cozinha</a></li>
                            <li><a href="relatorioSaidaProdutos1.php">Saída de Produtos</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </header>
        <div class="box">
            <form action="">
                <fieldset>
                    <legend><b>Relatório de Produtos Entregues</b> </legend>
                    <br><br>
                    <div class="inputdatasrelatorio">
                    <label for="data_inicio"><b>Data de Início</b></label>
                    <input type="date" name="data_inicio" id="data_inicio" placeholder="Início" required>
                    <label for="data_fim"><b>Data Fim</b></label>
                    <input type="date" name="data_fim" id="data_fim" placeholder="Fim" required>
                    <a href="#" id="lupa"><img src="img/lupa2.png" width="35"></a>
                        <br><br><br><br>
                        <!-- <input type="text" name="relProdEntr" id="relProdEntr" placeholder="Produto" class="inputUser" required>  -->
                        <label for="" >Produto:</label>
                        <select name="selecao_produtoRel" id="selecao_produtoRel" required>
                            <option value="#"></option>
                            <optgroup label="Bebidas">
                                <option value="refrigerante">Refrigerante</option>
                                <option value="agua">Água</option>
                            </optgroup>
                            <optgroup label="Comidas">
                                <option value="hamburguer">Hamburguer</option>
                                <option value="pao">Pão</option>
                            </optgroup>
                        </select>
                    </div>
                    <br>
                    <table>

                        <thead>

                            <tr>
                                <th>Produto</th>
                                <th>Quantidade</th>
                                <th>Valor</th>
                                <th>Cumpr. Prazo</th>
                                <th>Dt Entrega</th>
                                <th>Dt Validade</th>
                                <th>Dt Prevista</th>
                                <th>Nota Fiscal</th>
                            </tr>

                        </thead>

                        <tbody>
                            <?php foreach($produtos_entregues as $entregues): ?>
                            <tr>
                                <td><?= $entregues[0] ?></td>
                                <td id="tds"><?= $entregues[1] ?></td>
                                <td id="tds"><?= $entregues[2] ?></td>
                                <td id="tds"><?= $entregues[3] ?></td>
                                <td id="tds"><?= $entregues[4] ?></td>
                                <td id="tds"><?= $entregues[5] ?></td>
                                <td id="tds"><?= $entregues[6] ?></td>
                                <td id="tds"><?= $entregues[7] ?></td>
                            </tr>

                            <?php endforeach; ?>

                        </tbody>
                    </table>        
                    <br>
                    <div class="inputbotom">
                        <a href="estatisticaProdutosEntregues.html" target="_blank">
                            <input type="button" name="estatistica" id="estatistica" value="Estatísticas" />
                    </a>
                    </div>
                </fieldset>
            </form>
        </div>
    </body>
    </html>