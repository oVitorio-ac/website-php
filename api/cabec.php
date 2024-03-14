<?php
// Inicia a sessão (se ainda não iniciada)
session_start();

// Verifica se a função do usuário está definida na sessão
$user_role = isset($_SESSION['user_role']) ? $_SESSION['user_role'] : 'Visitante';

// Função para realizar o logout
function logout() {
    // Finaliza a sessão
    session_destroy();

    // Redireciona para o index.php
    header('Location: index.php');
    exit;
}

// Verifica se o botão de logout foi acionado
if (isset($_POST['logout'])) {
    logout();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seu Site</title>

    <!-- Inclui o Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="static/style.css">
    <!-- Seus outros estilos -->
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Seu Site</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="home.php">Home</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Sobre
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="desenvolvedor.php">Desenvolvedor</a>
                    <a class="dropdown-item" href="banco-de-dados.php">Banco de Dados</a>
                </div>
            </li>
        </ul>
        <?php if ($user_role !== "") : ?>
            <!-- Botão de logout -->
            <form method="post" class="form-inline">
                <button type="submit" name="logout" class="btn btn-outline-danger">Logout</button>
            </form>
        <?php endif; ?>
        <span class="navbar-text ml-2">
            Função: <?php echo $user_role; ?>
        </span>
    </div>
</nav>
