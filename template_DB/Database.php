<?php
class Database {
    // valores padrões
    private $host = 'localhost';
    private $db_name = 'banco_sistema';
    private $username = 'root';
    private $password = 'root';
    private $DBConn; // conexao com o banco

    public function __construct($servidor, $nomeBanco, $usuario, $senha) {
        $this->host = $servidor;
        $this->db_name = $nomeBanco;
        $this->username = $usuario;
        $this->password = $senha;
    }

    // criar a conexão
    public function getConnection() {
        $this->DBConn = null;
        try {
            // PDO(mysql:host=localhost;dbname=nome_database, "usuario", "senha")
            $this->DBConn = new PDO('"mysql:host=' . $this->host . ';dbname=' . $this->db_name . '","' . $this->username . '","' . $this->password . '"');
            $this->DBConn.exec('set names utf8'); // permitir o uso de caracteres especiais
        }
        catch (PDOException $e) {
            echo "Erro na conexão com o banco de dados." . $e->getMessage();
        }
        return $this->DBConn;
    }
}

class DBClientes {
    private $conexao;
    private $tableName = 'clientes';

    public function __construct() {
        // cria a database e conecta ao banco de dados
        $db = new Database('localhost','banco_sistema','root','root');
        $this->conexao = $db->getConnection();
    }

    public function create($id, $nome, $CPF, $email) {
        // executar INSERT into clientes
        // insert into utilizando parâmetros
        // este método é considerado mais seguro e evita SQL INJECTION
        $sql = 'INSERT INTO' . $this->tableName . 'VALUES (:param1, :param2, :param3, :param4)';
        try {
            $acesso = $this->conexao->prepare($sql);
            $acesso->bindParam(':param1', $id);
            $acesso->bindParam(':param2', $nome);
            $acesso->bindParam(':param3', $CPF);
            $acesso->bindParam(':param4', $email);
            if ($acesso->execute()) {
                return true;
            }
            else {
                return false;
            }
        }
        catch (PDOException $erro) {
            echo "Erro ao inserir na tabela Cliente: " . $erro->getMessage();
        }
        // return $dados
    }

    public function recovery() {
        // executar SELECT * from clientes

        // return $dados
    }

    public function recoveryById($idBusca) {
        // return a linha da tabela com id igual ao parametro
    }

    public function recoveryByName($nomeBusca) {
        // retorna a linha da tabela com o nome igual
    }

    public function update($id, $nome, $CPF, $email) {
        // atualiza o ID com os dados do paramentro - UPDATE
    }

    public function delete($id) {
        // excluir do banco o cliente com id - DELETE
    }
}







