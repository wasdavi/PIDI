<!DOCTYPE html>
    <html lang="pt-br">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Registro de Pedidos da Cozinha</title>
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
                            <li><a href="projecaoAquisicaoProdutos.php">Projeção para Aquisição de Produtos</a></li>
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
                    <legend><b>Registro de Pedidos da Cozinha</b> </legend>
                    <br><br>
                    <div class="inputbox">
                        <input type="text" name="solicitante" id="solicitante" placeholder="Solicitante" class="inputUser" required>
                        <br><br><br><br>
                        <input type="text" name="numero_pedido" id="numero_pedido" class="inputUser" placeholder="Número do Pedido" required>
                        <input type="text" name="quantidade_solicitada" id="quantidade_solicitada" placeholder="Quantidade" class="inputUser" required> 
                        <label for="">Tipo de Produto:</label>
                        <select name="selecao" id="selecao" required>
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
                    <br><br>
                    <div class="inputbotom">
                        <input type="submit" name="submit" id="submit" value="Confirmar">
                    </div>
                </fieldset>
            </form>
        </div>
    </body>
    </html>