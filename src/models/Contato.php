<?php
require_once 'Database.php';

class Contato {
    private $conn;

    /**
     * Constructor for the Contato class
     */
    public function __construct() {
        // Create a new instance of the Database class
        $database = new Database();
        // Establish a database connection and assign it to the class property
        $this->conn = $database->connect();
    }

    /**
     * Retorna todos os contatos
     *
     * @return array
     */
    public function getAll() {
        $query = 'SELECT * FROM contatos';
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    public function create($nome, $telefone, $email, $endereco) {
        $query = 'INSERT INTO contatos (nome, telefone, email, endereco) VALUES (:nome, :telefone, :email, :endereco)';
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':telefone', $telefone);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':endereco', $endereco);
        return $stmt->execute();
    }

    public function update($id, $nome, $telefone, $email, $endereco) {
        $query = 'UPDATE contatos SET nome = :nome, telefone = :telefone, email = :email, endereco = :endereco WHERE id = :id';
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':telefone', $telefone);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':endereco', $endereco);
        return $stmt->execute();
    }

    public function delete($id) {
        $query = 'DELETE FROM contatos WHERE id = :id';
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

    public function getById($id) {
        $query = 'SELECT * FROM contatos WHERE id = :id';
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>
