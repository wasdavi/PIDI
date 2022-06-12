

<ol>
<?php
include_once('config.php');

$dados = mysqli_query($conexao, "SELECT * FROM fornecedor");
?>



<table width="100%" height="32" border="1">
        <thead>
            <tr>
                <th>Cód. Fornecedor</th>
                <th >Fornecedor</th>
                <th >CNPJ</th>
				<th >Alterar</th>
				<th >Excluir</th>
            </tr>
        </thead>

</table>		
<?php

while ($fornecedor = mysqli_fetch_array($dados)):

?>
<table width="100%" height="32" border="1">
                <c:forEach items=$fornecedor var="prod">
					<tr>
						<td>
						<div align="center"><?= $fornecedor['idFornecedor']?></div>
						</td>
						<td >
						<div align="center"><?= $fornecedor['nomeFornecedor'] ?></div>
						</td>
						<td >
						<div align="center"><?= $fornecedor['cnpj'] ?></div>
						</td>
						
						<td >
						<div align="center"><a
							href="consultaProdutoEscolhido?produto.idProduto=${prod.idProduto}">altera</a></div>
						</td>
						<td ><strong> <label></label> <label></label>
						</strong>
						<div align="center"><a
							href="javascript:if(confirm('Deseja mesmo fazer a exclusão')) { location.href = 'apagaProduto?produto.idProduto=${prod.idProduto}';} ">excluir</a></div>
						</td>
					</tr>
				</c:forEach>
</table>

<?php endwhile; ?>
</ol>

