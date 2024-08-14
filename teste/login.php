<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
        <section class="auth-section login-section">
            <h1>Iniciar Sessão</h1>
            <form action="php/login_process.php" method="post" class="auth-form">
                <label for="username">Usuário:</label>
                <input type="text" id="username" name="username" required>

                <label for="password">Senha:</label>
                <input type="password" id="password" name="password" required>

                <button type="submit" class="auth-btn">Entrar</button>

                <?php
                if (isset($_GET['error'])) {
                    echo '<p class="error-message">Usuário ou senha incorretos.</p>';
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
