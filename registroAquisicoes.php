<!DOCTYPE html>
    <html lang="pt-br">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Registro de Aquisições</title>
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
        <div class="aquisicoes">
            <form action="">
                <fieldset>
                    <legend><b>Registro de Aquisições</b> </legend>
                    <br><br>
                    <div class="inputAquisicoes">
                        <label for="">Cenário</label>
                        <br>
                        <select name="selecao" id="selecaoAquisicao" required>
                            <option value="#"></option>
                            <option value="opcao1">Opção1</option>
                            <option value="opcao2">Opção2</option>
                            <option value="opcao3">Opção3</option>
                        </select>
                    </div>
                    <br><br>
                    <div class="inputAquisicoes">
                        <label for="data_aquisicao"><b>Data de Aquisição</b></label>
                        <br>
                        <input type="date" name="data_aquisicao" id="data_aquisicao" required>
                        </div>
                    <br><br>
                    <div class="inputbotom">
                        <input type="submit" name="submit" id="salvar_aquisicao" value="Salvar">
                    </div>
                </fieldset>
            </form>
        </div>
    </body>
    </html>