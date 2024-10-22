<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Contato</title>
    <link rel="stylesheet" href="/public/styles.css">
</head>
<body>
    <!-- Cabeçalho com título da página -->
    <header>
        <h1>Editar Contato</h1>
    </header>
    
    <main>
        <!-- Formulário para edição de contato -->
        <div class="form-container">
            <?php
            require_once '../src/controllers/ContatoController.php';
            $controller = new ContatoController();
            $contato = $controller->show($_GET['id']);
            ?>
            <form action="../public/process_edit.php" method="post">
                <input type="hidden" name="id" value="<?= $contato['id'] ?>">

                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" name="nome" value="<?= htmlspecialchars($contato['nome']) ?>" required>
                </div>

                <div class="form-group">
                    <label for="telefone">Telefone:</label>
                    <input type="text" id="telefone" name="telefone" value="<?= htmlspecialchars($contato['telefone']) ?>" required>
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" value="<?= htmlspecialchars($contato['email']) ?>" required>
                </div>

                <div class="form-group">
                    <label for="endereco">Endereço:</label>
                    <input type="text" id="endereco" name="endereco" value="<?= htmlspecialchars($contato['endereco']) ?>">
                </div>

                <!-- Botão para salvar as alterações -->
                <div class="center-button">
                    <button type="submit" class="btn">Salvar Alterações</button>
                </div>
            </form>
            <!-- Botão para voltar à lista de contatos -->
            <div class="center-button">
                <a href="index.php" class="btn">Voltar à lista de contatos</a>
            </div>
        </div>
    </main>
    
    <!-- Rodapé da página -->
    <footer>
        <p>&copy; 2024 - Sistema de Contatos. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
