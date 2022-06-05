<?php
include_once "config.php";

$query_fornecedor = "SELECT idFornecedor,nome,cnpj,endereco,telefone,data_cadastro,selecao_produto,selecao_transporte 
    FROM fornecedor
    WHERE idFornecedor = 1000;
    ORDER BY idFornecedor DESC"
$result_fornecedor = $conexao->prepare($query_fornecedor);
$result_fornecedor->execute();


if(($result_fornecedor) and ($result_fornecedor->rowCount() !=0)){

}else{
    $retorna = ['status' => false, 'msg' => "<p style='color: #f00;'>Erro: Nenhum fornecedor encotrado!</p>"];
}

echo json_encode($retorna);
?>