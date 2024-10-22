<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda Telefônica</title>
    <link rel="stylesheet" href="../public/styles.css">
</head>
<body>
    <!-- Cabeçalho da página com título centralizado -->
    <header>
        <h1>Agenda Telefônica</h1>
    </header>

    <main>
        <!-- Contêiner da tabela que exibe os contatos -->
        <div class="table-container">
            <!-- Div separada para os cabeçalhos das colunas -->
            <div class="table-header">
                <table>
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Telefone</th>
                            <th>Email</th>
                            <th>Endereço</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                </table>
            </div>
            
            <!-- Div separada para os dados retornados do banco de dados -->
            <div class="table-body">
                <table>
                    <tbody>
                        <?php
                        require_once '../src/controllers/ContatoController.php';

                        // Recupera os contatos usando o controlador
                        $controller = new ContatoController();
                        $contatos = $controller->index();

                        // Exibe os contatos em uma tabela, se houver
                        if (count($contatos) > 0):
                            foreach ($contatos as $contato): ?>
                                <tr>
                                    <td><?= htmlspecialchars($contato['nome']) ?></td>
                                    <td><?= htmlspecialchars($contato['telefone']) ?></td>
                                    <td><?= htmlspecialchars($contato['email']) ?></td>
                                    <td><?= htmlspecialchars($contato['endereco']) ?></td>
                                    <td>
                                        <!-- Botões de ação para editar e excluir o contato -->
                                        <a href="edit.php?id=<?= $contato['id'] ?>" class="btn">Editar</a>
                                        <a href="../public/delete.php?id=<?= $contato['id'] ?>" class="btn" onclick="return confirm('Tem certeza que deseja excluir este contato?')">Excluir</a>
                                    </td>
                                </tr>
                            <?php endforeach;
                        else: ?>
                            <!-- Exibe mensagem quando não há contatos cadastrados -->
                            <tr>
                                <td colspan="5" class="no-data">Nenhum contato encontrado. Clique em "Adicionar Novo Contato" para começar.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Botão para adicionar um novo contato -->
        <div class="center-button">
            <a href="create.php" class="btn">Adicionar Novo Contato</a>
        </div>
    </main>

    <!-- Rodapé da página -->
    <footer>
        <p>&copy; 2024 - Sistema de Contatos. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
