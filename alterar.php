<?php
include("conexao.php");
$cliente = selecionarClienteId($_POST["id"]);
?>
<meta charset="UTF-8">
<form name="dadosCliente" action="conexao.php" method="POST">
    <table border="1">
        <tbody>
        <tr>
            <td>Nome</td>
            <td><input type="text" name="nome" value='<?= $cliente["nome"] ?>' size="35"/></td>
        </tr>
        <tr>
            <td>Sexo</td>
            <td>
                <input type="radio" name="sexo"
                       value="masculino" <?= ($cliente["sexo"] == "masculino") ? "checked" : null ?> /> Masculino
                <input type="radio" name="sexo"
                       value="feminino" <?= ($cliente["sexo"] == "feminino") ? "checked" : null ?> /> Feminino
            </td>
        </tr>
        <tr>
            <td>Endereco</td>
            <td><input type="text" name="endereco" value='<?= $cliente["endereco"] ?>'/></td>
        </tr>
        <tr>
            <td>CEP</td>
            <td><input type="text" name="cep" value='<?= $cliente["cep"] ?>'/></td>
        </tr>
        <tr>
            <td>Bairro</td>
            <td><input type="text" name="bairro" value='<?= $cliente["bairro"] ?>' size="40"/></td>
        </tr>
        <tr>
            <td>CPF</td>
            <td><input type="text" name="cpf" value='<?= $cliente["cpf"] ?>'/></td>
        </tr>
        <tr>
            <td>Nascimento</td>
            <td><input type="date" name="nascimento" value='<?= $cliente["nascimento"] ?>'/></td>
        </tr>
        <tr>
            <td>Vencimento</td>
            <td><input type="date" name="data_vencimento" value='<?= $cliente["data_vencimento"] ?>'/></td>
        </tr>
        <tr>
            <td>Unidade Consumidora</td>
            <td><input type="number" name="unidade_consumidora" value='<?= $cliente["unidade_consumidora"] ?>'/></td>
        </tr>
        <tr>
            <td>KWH</td>
            <td><input type="number" step="0.01" name="kwh" value='<?= $cliente["kwh"] ?>'/></td>
        </tr>
        <tr>
            <td>Valor Total</td>
            <td><input type="number" step="0.01" name="valor_total" value='<?= $cliente["valor_total"] ?>'/></td>
        </tr>
        <tr>
            <td><input type="hidden" name="acao" value="alterar"/></td>
            <td><input type="hidden" name="id" value="<?= $cliente["id"] ?>"/></td>
        </tr>
        <td><input type="submit" value="Enviar" name="enviar"></td>
        </tbody>
    </table>
</form>



