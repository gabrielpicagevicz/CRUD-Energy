<?php include 'conexao.php';
$grupo = listarCliente();
//var_dump($grupo);
?>
<html>
<head>
    <meta charset="UTF-8">
    <title> Listando clientes</title>
</head>
<body>
<h1> Dados do Cliente</h1>
<a href="inserir.php"> Adicionar Clientes</a>
<table border="1">
    <thead>
    <tr>
        <th>Nome</th>
        <th>Sexo</th>
        <th>Endereço</th>
        <th>CEP</th>
        <th>Bairro</th>
        <th>CPF</th>
        <th>Nascimento</th>
        <th>Vencimento</th>
        <th>Unidade Consumidora</th>
        <th>KWH</th>
        <th>Valor Total</th>
        <th>Editar</th>
        <th>Excluir</th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($grupo as $cliente) { ?>
        <tr>
            <td><?= $cliente["nome"] ?> </td>
            <td><?= $cliente["sexo"] ?> </td>
            <td><?= $cliente["endereco"] ?> </td>
            <td><?= $cliente["cep"] ?> </td>
            <td><?= $cliente["bairro"] ?> </td>
            <td><?= $cliente["cpf"] ?> </td>
            <td><?= $cliente["nascimento"] ?> </td>
            <td><?= $cliente["data_vencimento"] ?> </td>
            <td><?= $cliente["unidade_consumidora"] ?> </td>
            <td><?= $cliente["kwh"] ?> </td>
            <td><?= $cliente["valor_total"] ?> </td>
            <th>
                <form name="alterar" action="alterar.php" method="post">
                    <input type="hidden" name="id" value='<?= $cliente["id"] ?>'/>
                    <input type="submit" value="Editar" name="editar"/>
                </form>
            </th>
            <th>
                <form name="excluir" action="conexao.php" method="post">
                    <input type="hidden" name="id" value='<?= $cliente["id"] ?>'/>
                    <input type="hidden" name="acao" value="excluir">
                    <input type="submit" value="Excluir" name="excluir"/>
                </form>
            </th>
        </tr>
    <?php }
    ?>
    </tbody>
</table>
</body>
</html>


