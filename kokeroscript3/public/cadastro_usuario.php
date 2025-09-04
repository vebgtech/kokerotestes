<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Usuário - Kokero Brechó</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h2>Cadastro de Usuário</h2>
    <form action="salvar_usuario.php" method="post">
        <label for="nome">Nome:</label><br>
        <input type="text" name="nome" id="nome" required><br><br>

        <label for="email">E-mail:</label><br>
        <input type="email" name="email" id="email" required><br><br>

        <label for="cpf">CPF:</label><br>
        <input type="text" name="cpf" id="cpf" maxlength="14"><br><br>

        <label for="cep">CEP:</label><br>
        <input type="text" name="cep" id="cep" maxlength="9"><br><br>

        <label for="endereco">Endereço:</label><br>
        <input type="text" name="endereco" id="endereco"><br><br>

        <label for="bairro">Bairro:</label><br>
        <input type="text" name="bairro" id="bairro"><br><br>

        <label for="cidade">Cidade:</label><br>
        <input type="text" name="cidade" id="cidade"><br><br>

        <label for="uf">UF:</label><br>
        <input type="text" name="uf" id="uf" maxlength="2"><br><br>

        <label for="telefone">Telefone:</label><br>
        <input type="text" name="telefone" id="telefone"><br><br>

        <label for="senha">Senha:</label><br>
        <input type="password" name="senha" id="senha" required><br><br>

        <input type="submit" value="Cadastrar">
    </form>

    <script>
    $(document).ready(function() {
        $('#cep').on('blur', function() {
            var cep = $(this).val().replace(/\D/g, '');

            if (cep !== '') {
                $.getJSON('https://viacep.com.br/ws/' + cep + '/json/', function(dados) {
                    if (!('erro' in dados)) {
                        $('#endereco').val(dados.logradouro);
                        $('#bairro').val(dados.bairro);
                        $('#cidade').val(dados.localidade);
                        $('#uf').val(dados.uf);
                    } else {
                        alert('CEP não encontrado.');
                    }
                });
            }
        });
    });
    </script>
</body>
</html>
