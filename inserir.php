<meta charset="UTF-8">
<form name="dadosCliente" action="conexao.php" method="post">
    <table border="1">
        <tbody>
        <tr>
            <td>Nome</td>
            <td><input name="nome" value="" type="text"></td>
        </tr>
        <tr>
            <td>Sexo</td>
            <td><input type="radio" name="sexo" value="M"> Masculino
                <input type="radio" name="sexo" value="F"> Feminino
            </td>
        </tr>
        <tr>
            <td>Endereco</td>
            <td><input name="endereco" value="" type="text"></td>
        </tr>
        <tr>
            <td>CEP</td>
            <td><input name="cep" value="" type="text"></td>
        </tr>
        <tr>
            <td>Bairro</td>
            <td><input name="bairro" value="" type="text"></td>
        </tr>
        <tr>
            <td>CPF</td>
            <td><input name="cpf" value="" type="text"></td>
        </tr>
        <tr>
            <td>Nascimento</td>
            <td><input name="data_nascimento" value="" type="date"></td>
        </tr>
        <tr>
            <td>Vencimento</td>
            <td><input name="data_vencimento" value="" type="date"></td>
        </tr>
        <tr>
            <td>Unidade Consumidora</td>
            <td><input name="unidade_consumidora" value="" type="number"></td>
        </tr>
        <tr>
            <td>Kilowatts Hora</td>
            <td><input name="kwh" value="" type="number" step="0.1"></td>
        </tr>
        <tr>
            <td>Valor Total</td>
            <td><input name="total" value="" type="number" step="0.01"></td>
        </tr>
        <tr>
            <td><input type="hidden" name="acao" value="inserir"></td>
            <td><input type="submit" value="Enviar" name="enviar"></td>
        </tr>
        </tbody>
    </table>
</form>


