<?php
    require_once "Database.php";
    session_start();
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
        <input type="text" id="nome" name="nome" required><br>
        <label for="cpf">CPF:</label><br>
        <input type="text" id="cpf" name="cpf" required><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <!-- Botões -->
        <button type="submit" name="acao" value="inserir">Enviar</button>
        <button type="submit" name="acao" value="consultar">Consultar</button>
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
        if ($acao == "inserir") {
            if ($bdClientes->create($id, $nome, $cpf, $email)) {
                echo "<p>Cliente inserido com sucesso!!!</p>";
            } else {
                echo "<p>Erro ao incluir cliente.</p>";
            }
        }
        else if ($acao == "consultar") {
            if ($bdClientes->read($id)) {
                echo "<h2>Dados do Cliente</h2>";
                echo "ID: " . htmlspecialchars($bdClientes['id']) . "<br>";
                echo "Nome: " . htmlspecialchars($bdClientes['nome']) . "<br>";
                echo "CPF: " . htmlspecialchars($bdClientes['CPF']) . "<br>";
                echo "Email: " . htmlspecialchars($bdClientes['email']) . "<br>";
            } else {
                echo "<p>Nenhum cliente encontrado para o ID fornecido.</p>";
            }
        }
        else if ($acao == "alterar") {
            if ($bdClientes->update($id, $nome, $cpf, $email)) {
                echo "<p>Dados alterados com sucesso! Novo Nome: $nome</p>";
            } else {
                echo "<p>Erro ao alterar os dados.</p>";
            }
        }
        else if ($acao == "apagar") {
            if ($bdClientes->delete($id)) {
                echo "<p>Cliente apagado com sucesso.</p>";
            } else {
                echo "<p>Erro ao apagar cliente. ID inexistente.</p>";
            }
        }
        else {
            echo "<p>Ação inválida.</p>";
        }

        // Exibe os dados
        echo "<h2>Dados Recebidos:</h2>";
        echo "ID: " . $id . "<br>";
        echo "Nome: " . $nome . "<br>";
        echo "CPF: " . $cpf . "<br>";
        echo "Email: " . $email . "<br>";
    }
    ?>
</body>
</html>