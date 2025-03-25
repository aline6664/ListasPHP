<?php
    require_once "Database.php";
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
</head>
<body>
    <!-- O formulário abaixo envia os dados para a mesma página (PHP_SELF) usando o método POST -->
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <!--<form action="processamento.php" method="POST">-->
        <label for="id">ID:</label><br>
        <input type="text" id="id" name="id"><br>
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome"><br>
        <label for="cpf">CPF:</label><br>
        <input type="text" id="cpf" name="cpf"><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br><br>

        <!-- Botões -->
        <button type="submit" name="acao" value="inserir">Enviar</button>
        <button type="submit" name="acao" value="consultar">Consultar todos</button>
        <button type="submit" name="acao" value="consultarID">Consultar por ID</button>
        <button type="submit" name="acao" value="consultarNome">Consultar por nome</button>
        <button type="submit" name="acao" value="alterar">Alterar</button>
        <button type="submit" name="acao" value="apagar">Apagar</button>
    </form>

    <?php
    // Verifica se o formulário foi submetido
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Captura os dados do formulário
        $acao = $_POST['acao'];
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $email = $_POST['email'];

        $bdClientes = new DBClientes();
        // Inserir dados do novo cliente (create)
        if ($acao == "inserir") {
            if ($bdClientes->create($id, $nome, $cpf, $email)) {
                echo "<p>Cliente inserido com sucesso!!!</p>";
            }
            else {
                echo "<p>Erro ao incluir cliente.</p>";
            }
        }
        // Consultar todos os clientes (recovery)
        else if ($acao == "consultar") {
            $listaClientes = $bdClientes->recovery();
            if ($listaClientes) {
                foreach ($listaClientes as $cliente) {
                    echo "ID: " . $cliente['id'] . "<br>";
                    echo "Nome: " . $cliente['nome'] . "<br>";
                    echo "CPF: " . $cliente['CPF'] . "<br>";
                    echo "Email: " . $cliente['email'] . "<br><br>";
                }
            }
            else {
                echo "<p>Erro ao consultar os clientes.</p>";
            }
        }
        // Consultar por ID
        else if ($acao == "consultarID") {
            $cliente = $bdClientes->recoveryById($id);
            if ($cliente) {
                echo "ID: " . $cliente['id'] . "<br>";
                echo "Nome: " . $cliente['nome'] . "<br>";
                echo "CPF: " . $cliente['CPF'] . "<br>";
                echo "Email: " . $cliente['email'] . "<br><br>";
            }
            else {
                echo "<p>Erro ao consultar cliente por ID. Cliente inexistente.</p>";
            }
        }
        // Consultar por nome
        else if ($acao == "consultarNome") {
            $listaClientes = $bdClientes->recoveryByName($nome);
            // var_dump($listaClientes); // teste para checar array de dados
            if ($listaClientes && is_array($listaClientes)) { // lista pois varios clientes podem ter mesmo nome
                foreach ($listaClientes as $cliente) {
                    echo "ID: " . $cliente['id'] . "<br>";
                    echo "Nome: " . $cliente['nome'] . "<br>";
                    echo "CPF: " . $cliente['CPF'] . "<br>";
                    echo "Email: " . $cliente['email'] . "<br><br>";
                }
            } else {
                echo "<p>Erro ao consultar cliente por nome. Cliente inexistente.</p>";
            }
        }
        // Alterar dados do cliente (update)
        else if ($acao == "alterar") {
            $cliente = $bdClientes->update($id, $nome, $cpf, $email);
            if ($cliente) {
                echo "<p>Dados alterados com sucesso!</p>";
            }
            else {
                echo "<p>Erro ao alterar os dados.</p>";
            }
        }
        // Apagar cliente (delete)
        else if ($acao == "apagar") {
            if ($bdClientes->delete($id)) {
                echo "<p>Cliente apagado com sucesso.</p>";
            }
            else {
                echo "<p>Erro ao apagar cliente. ID inexistente.</p>";
            }
        }
        else {
            echo "<p>Ação inválida.</p>";
        }

        // Exibe os dados - teste para verificar se os dados foram recebidos
        echo "<h2>Dados Recebidos:</h2>";
        echo "ID: " . $id . "<br>";
        echo "Nome: " . $nome . "<br>";
        echo "CPF: " . $cpf . "<br>";
        echo "Email: " . $email . "<br>";
    }
    ?>
</body>
</html>