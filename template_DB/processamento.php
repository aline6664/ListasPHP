<?php
    require_once "Database.php";
    if(!empty($_POST['id']) && !empty($_POST['nome']) && !empty($_POST['cpf']) && !empty($_POST['email']) && !empty($_POST['acao'])) {
        switch ($acao) {
            case 'inserir':
                if ($bdClientes->create($id, $nome, $cpf, $email)) {
                    echo "<p>Cliente inserido com sucesso!</p>";
                } else {
                    echo "<p>Erro ao incluir cliente.</p>";
                }
                break;
            
            case 'consultar':
                $bdClientes = $bdClientes->read($id);
                if ($bdClientes) {
                    echo "<h2>Dados do Cliente</h2>";
                    echo "ID: " . htmlspecialchars($bdClientes['id']) . "<br>";
                    echo "Nome: " . htmlspecialchars($bdClientes['nome']) . "<br>";
                    echo "CPF: " . htmlspecialchars($bdClientes['CPF']) . "<br>";
                    echo "Email: " . htmlspecialchars($bdClientes['email']) . "<br>";
                } else {
                    echo "<p>Nenhum cliente encontrado para o ID fornecido.</p>";
                }
                break;
    
            case 'alterar':
                if ($bdClientes->update($id, $nome, $cpf, $email)) {
                    echo "<p>Dados alterados com sucesso! Novo Nome: $nome</p>";
                } else {
                    echo "<p>Erro ao alterar os dados.</p>";
                }
                break;
    
            case 'apagar':
                if ($bdClientes->delete($id)) {
                    echo "<p>Cliente apagado com sucesso.</p>";
                } else {
                    echo "<p>Erro ao apagar cliente. ID inexistente.</p>";
                }
                break;
    
            default:
                echo "<p>Ação inválida.</p>";
                break;
        }
    }
?>