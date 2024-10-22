<?php
require_once __DIR__ . '/../models/Contato.php';

class ContatoController {
    private $contato;

    public function __construct() {
        $this->contato = new Contato();
    }

    public function index() {
        return $this->contato->getAll();
    }

    public function store($nome, $telefone, $email, $endereco) {
        return $this->contato->create($nome, $telefone, $email, $endereco);
    }

    public function update($id, $nome, $telefone, $email, $endereco) {
        return $this->contato->update($id, $nome, $telefone, $email, $endereco);
    }

    public function delete($id) {
        return $this->contato->delete($id);
    }

    public function show($id) {
        return $this->contato->getById($id);
    }
}
?>
