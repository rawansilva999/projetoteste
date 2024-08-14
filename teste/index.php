<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>One Page Site</title>
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="#home" class="nav-link" data-section="home">Home</a></li>
                <li><a href="#novidades" class="nav-link" data-section="novidades">Novidades</a></li>
                <li>
                    <div class="dropdown">
                        <button class="dropbtn">Login <i class="fa fa-user"></i></button>
                        <div class="dropdown-content">
                            <?php if (!isset($_SESSION['loggedin']) || !$_SESSION['loggedin']): ?>
                                <a href="login.php">Iniciar Sessão</a>
                                <a href="register.php">Cadastrar Novo Usuário</a>
                            <?php else: ?>
                                <a href="php/logout.php">Sair</a>
                            <?php endif; ?>
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
        <section id="home" class="content-section">
            <h1>Bem-vindo à Página Principal</h1>
            <p>Conteúdo da página inicial.</p>
        </section>

        <section id="novidades" class="content-section">
            <h2>Novidades</h2>
            <p>Conteúdo das novidades.</p>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Seu Site</p>
        <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin']): ?>
            <a href="php/logout.php">Sair</a>
        <?php endif; ?>
    </footer>

    <script src="js/scripts.js"></script>
</body>
</html>
