<?php
require_once '../src/controllers/ContatoController.php';

// Verifica se os dados foram enviados via POST e se todos os campos obrigatórios estão presentes
if (isset($_POST['nome'], $_POST['telefone'], $_POST['email'])) {
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $endereco = $_POST['endereco'] ?? ''; // Endereço é opcional, então pode ser nulo

    // Cria uma instância do controlador de contatos
    $controller = new ContatoController();

    // Salva o novo contato usando o método do controlador
    $controller->store($nome, $telefone, $email, $endereco);

    // Redireciona para a página principal após adicionar o contato
    header('Location: ../views/index.php');
    exit();
} else {
    echo "Erro: Campos obrigatórios não foram preenchidos.";
}
