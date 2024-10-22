<?php
require_once '../src/controllers/ContatoController.php';

$controller = new ContatoController();
$controller->delete($_GET['id']);

header('Location: ../views/index.php');
?>
