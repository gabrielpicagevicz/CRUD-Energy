<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Adicionar Clientes</title>
</head>
<form name="dadosCliente" action="conexao.php" method="post"  style="width: 500px; margin: auto">
    <table class="table">
        <tbody>
        <h1 class="text-center">Adicionar Clientes</h1>
        <tr>
            <td><h5>Nome</h5></td>
            <td><input name="nome" value="" class="form-control input-md" type="text"></td>
        </tr>
        <tr>
            <td><h5>Sexo</h5></td>
            <td><input type="radio" name="sexo" value="masculino"> Masculino
                <input type="radio" name="sexo" value="feminino"> Feminino
            </td>
        </tr>
        </tr>
        <tr>
            <td><h5>Endereço</h5></td>
            <td><input name="endereco" value="" class="form-control input-md" type="text"></td>
        </tr>
        <tr>
            <td><h5>CEP</h5></td>
            <td><input name="cep" value="" class="form-control input-md" type="text"></td>
        </tr>
        <tr>
            <td><h5>Bairro</h5></td>
            <td><input name="bairro" value="" class="form-control input-md" type="text"></td>
        </tr>
        <tr>
            <td><h5>CPF</h5></td>
            <td><input name="cpf" value="" class="form-control input-md" type="text"></td>
        </tr>
        <tr>
            <td><h5>Data de Nascimento</h5></td>
            <td><input name="data_nascimento" value="" class="form-control input-md" type="date"></td>
        </tr>
        <tr>
            <td><h5>Data de Vencimento</h5></td>
            <td><input name="data_vencimento" value="" class="form-control input-md" type="date"></td>
        </tr>
        <tr>
            <td><h5>Unidade Consumidora</h5></td>
            <td><input name="unidade_consumidora" value="" class="form-control input-md" type="number"></td>
        </tr>
        <tr>
            <td><h5>Kilowatts Hora</h5></td>
            <td><input name="kwh" value="" type="number" class="form-control input-md" step="0.1"></td>
        </tr>
        <tr>
            <td><h5>Valor Total</h5></td>
            <td><input name="valor_total" value="" type="number" class="form-control input-md" step="0.01"></td>
        </tr>
        <div class="row justify-content-center">
            <tr>
                <td><input type="hidden" name="acao" value="inserir"></td>
                <td><input type="submit" value="Inserir Cliente" name="enviar" class="btn btn-success"></td>
            </tr>
        </div>
        </tbody>
    </table>
</form>


