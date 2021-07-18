<?php include 'conexao.php';
$grupo = listarCliente();
//var_dump($grupo);
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="bootstrap-5.0.2-dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Listando os cliente</title>
</head>
<body>
<table class="table table-hover">
    <thead class="table-dark">
     <h1 class="text-center"> Dados do Cliente</h1>
    <a href="inserir.php" class="btn btn-Primary"> Adicionar Clientes</a>
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
                        <button type="submit" class="btn btn-success">Editar</button>
                    </form>
                </th>
                <th>
                    <form name="excluir" action="conexao.php" method="post">
                        <input type="hidden" name="id" value='<?= $cliente["id"] ?>'/>
                        <input type="hidden" name="acao" value="excluir">
                        <button type="submit" class="btn btn-danger">Excluir</button>
                    </form>
                </th>
            </tr>
        <?php }
        ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>


