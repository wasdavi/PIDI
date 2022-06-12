<?php
$dados_fornecedor = [

    ['JOAO', 'M', 'PORTUGAL'],
    ['ANA', 'F', 'BRASIL'],
    ['CARLOS', 'M', 'ANGOLA'],
    ['MATILDE', 'F', 'MOÇAMBIQUE'],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<table border=1>

<thead>

<tr>
    <th>Nome</th>
    <th>Genero</th>
    <th>País</th>
</tr>

</thead>

<tbody>
    <?php foreach($dados_fornecedor as $item): ?>
    <tr>
        <td><?= $item[0] ?></td>
        <td><?= $item[1] ?></td>
        <td><?= $item[2] ?></td>
    </tr>

    <?php endforeach; ?>

</tbody>
</table>
</body>
</html>