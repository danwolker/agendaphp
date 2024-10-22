<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Contato</title>
    <link rel="stylesheet" href="/public/styles.css">
</head>
<body>
    <!-- Cabeçalho com título da página -->
    <header>
        <h1>Adicionar Novo Contato</h1>
    </header>
    
    <main>
        <!-- Formulário para adicionar um novo contato -->
        <div class="form-container">
            <form action="../public/process_create.php" method="post">
                <!-- Campo para o nome -->
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" name="nome" required>
                </div>

                <!-- Campo para o telefone -->
                <div class="form-group">
                    <label for="telefone">Telefone:</label>
                    <input type="text" id="telefone" name="telefone" required>
                </div>

                <!-- Campo para o email -->
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <!-- Campo para o endereço -->
                <div class="form-group">
                    <label for="endereco">Endereço:</label>
                    <input type="text" id="endereco" name="endereco">
                </div>

                <!-- Botão para enviar o formulário -->
                <div class="center-button">
                    <button type="submit" class="btn">Adicionar</button>
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
