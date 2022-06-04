
<?php

function func(){
      if(isset($_POST['submit'])){
        //      print_r($_POST['nome']);
        //      print_r('<br>');
        //      print_r($_POST['cnpj']);
        //      print_r('<br>');
        //      print_r($_POST['endereco']);
        //      print_r('<br>');
        //      print_r($_POST['telefone']);
    
        include_once('config.php');
    
         $nome = $_POST['nome'];
         $cnpj = $_POST['cnpj'];
         $endereco = $_POST['endereco'];
         $telefone = $_POST['telefone'];
         $data_cadastro = $_POST['data_cadastro'];
         $selecao_produto = $_POST['selecao_produto'];
         $selecao_transporte = $_POST['selecao_transporte'];
    
         $result = mysqli_query($conexao, "INSERT INTO fornecedor(nome,cnpj,endereco,telefone,data_cadastro,selecao_produto,selecao_transporte) VALUES('$nome','$cnpj','$endereco','$telefone','$data_cadastro','$selecao_produto','$selecao_transporte')");
          }
        }
     ?>


