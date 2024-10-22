<?php
require_once '../src/controllers/ContatoController.php';

$controller = new ContatoController();
$controller->update($_POST['id'], $_POST['nome'], $_POST['telefone'], $_POST['email'], $_POST['endereco']);

header('Location: ../views/index.php');
?>
