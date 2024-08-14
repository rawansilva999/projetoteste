<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php" class="nav-link">Home</a></li>
                <li><a href="#novidades" class="nav-link">Novidades</a></li>
                <li>
                    <div class="dropdown">
                        <button class="dropbtn">Login <i class="fa fa-user"></i></button>
                        <div class="dropdown-content">
                            <a href="login.php">Iniciar Sessão</a>
                            <a href="register.php">Cadastrar Novo Usuário</a>
                        </div>
                    </div>
                </li>
                <li>
                    <input type="text" id="search" placeholder="Pesquisar...">
                </li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="auth-section register-section">
            <h1>Cadastrar Novo Usuário</h1>
            <form action="php/register_process.php" method="post" class="auth-form">
                <label for="username">Usuário:</label>
                <input type="text" id="username" name="username" required>

                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required>

                <label for="password">Senha:</label>
                <input type="password" id="password" name="password" required>

                <label for="confirm_password">Confirmar Senha:</label>
                <input type="password" id="confirm_password" name="confirm_password" required>

                <button type="submit" class="auth-btn">Cadastrar</button>

                <?php
                if (isset($_GET['error'])) {
                    echo '<p class="error-message">Erro ao cadastrar. Verifique os dados e tente novamente.</p>';
                } elseif (isset($_GET['success'])) {
                    echo '<p class="success-message">Cadastro realizado com sucesso!</p>';
                }
                ?>
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Seu Site</p>
    </footer>

    <script src="js/scripts.js"></script>
</body>
</html>
