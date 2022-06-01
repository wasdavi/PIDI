<?php
      if(isset($_POST['submit'])){
    //      print_r($_POST['nome']);
    //      print_r('<br>');
    //      print_r($_POST['cnpj']);
    //      print_r('<br>');
    //      print_r($_POST['endereco']);
    //      print_r('<br>');
    //      print_r($_POST['telefone']);

    include_once('config.php');

     $nome = $_POST['nome'];
     $cnpj = $_POST['cnpj'];
     $endereco = $_POST['endereco'];
     $telefone = $_POST['telefone'];
     //$data_cadastro = $_POST['data_cadastro'];
     $selecao_produto = $_POST['selecao_produto'];
     $selecao_transporte = $_POST['selecao_transporte'];

     $result = mysqli_query($conexao, "INSERT INTO fornecedor(nome,cnpj,endereco,telefone,selecao_produto,selecao_transporte) VALUES('$nome','$cnpj','$endereco','$telefone','$selecao_produto','$selecao_transporte')");
      }
    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Cadastro de Fornecedores</title>
</head>
<body>
    <header>
        <nav class="menu">
            <ul class="menuFornecedor">
                <li><a href="cadastroFornecedor.html">Fornecedor</a>
                </li>
                <li><a href="cadastroProduto.html">Produtos</a></li>
                <li><a href="registroPedidoCozinha.html">Pedidos</a></li>
                <li><a href="registroAquisições.html">Aquisições</a></li>
                <li><a href="#">Relatórios</a>
                    <ul>
                        <li><a href="#">Projeção para Aquisição de Produtos</a></li>
                        <li><a href="#">Monitoramento de Alterações</a></li>
                        <li><a href="#">Produtos em Estoque</a></li>
                        <li><a href="#">Produtos Entregues</a></li>
                        <li><a href="#">Pedidos da Cozinha</a></li>
                        <li><a href="#">Saída de Produtos</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>
    <div class="box">
        <form action="" method="POST">
            <fieldset><!--//agrupar elementos como label-->
                <legend><b>Cadastro de Fornecedores</b> </legend>
                <br><br>
                <div class="inputbox">
                    <!--<input type="number" name="codigo" id="codigo" placeholder="Código" class="inputUser" required>-->
                    <!--<label for="codigo" class="labelInput">Código</label>-->
                    <input type="text" name="nome" id="nome" placeholder="Razão Social" class="inputUser" required>
                    <!-- o input cria o campo para inserir os dados-->
                    <!--o REQUIRED obriga inserir a informação no campo-->
                    <!--o NAME mostra opções salvas em cache de informações digitadas anteriormente e é importante, pois o backend utilizará o valor do NAME no momento da execução-->
                    <!--Sempre que realizamos um “submit” de um formulário, o atributo NAME é o identificador dentro de uma requisição GET ou POST no servidor.-->
                    <!-- o CLASS serve para aplicarmos as configurações de CSS-->
                    <!-- o ID funciona como um identificador, deixou um pouco de ser usual utilizando mais o CLASS, utilizar quando for um caso mais específico e não p/ um grupo SECTION-->
                    <!--<label for="nome" class="labelInput">Nome</label>-->
                    <!--o LABEL serve para dar um nome ao nosso INPUT-->
                    <!--o FOR aumenta a nossa área de contato ao clicarmos em cima do nome-->
                    <input type="text" name="cnpj" id="cnpj" class="inputUser" placeholder="CNPJ" required>
                    <!--<label for="cnpj" class="labelInput">CNPJ</label>-->
                </div>
                <br><br>
                <div class="inputbox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" placeholder="Endereço" required>
                    <!--<label for="endereco" class="labelInput">Endereço</label>-->
                    <input type="tel" name="telefone" id="telefone" class="inputUser" placeholder="Telefone" required>
                    <!--<label for="telefone" class="labelInput">Telefone</label>-->
                </div>
                <br><br>
                <div class="inputbox">
                <label for="dataEntrada"><b>Data de Cadastro</b></label>
                <input type="date" name="data_cadastro" id="data_cadastro" required>
                   <!-- Ativo:
                    <input type="radio" name="situacao" id="sim" value="sim" required>-->
                    <!--o RADIO serve para criar as bolinhas que serão selecionadas-->
                    <!--<label for="sim">Sim</label>
                    <input type="radio" name="situacao" id="nao" value="nao" required>-->
                    <!--O value é a informação que será enviado pro servidor, pode ser usado 1, 2, f, m, masculino, feminino , tanto faz. Porque é tu que vai receber essa informação e tratar a utilização dela.-->
                    <!--<label for="nao">Não</label>-->
                
                    <label for="" >Tipo de Produto:</label>
                    <select name="selecao_produto" id="selecao_produto" required>
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
                    <label for="" id="tipo">Tipo de Transporte:</label>
                    <select name="selecao_transporte" id="selecao_transporte" required>
                        <option value="#"></option>
                        <option value="caminhao">Caminhão</option>
                        <option value="van">Van</option>
                        <option value="caminhonete">Caminhonete</option>
                    </select>
                </div>
                <br><br>
                <div class="inputbotom">
                    <input type="submit" name="submit" id="submit" value="Salvar">
                    <input type="submit" name="submit" id="submit" value="Consultar">
                    <input type="reset" name="limpar" id="submit" value="Limpar">
                </div>
            </fieldset>
        </form>
    </div>
</body>
</html>