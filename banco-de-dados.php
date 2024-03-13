<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seu Site</title>

    <!-- Inclui o Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+Wyq6Bf1BktvH2+rHg02lXN5vBYbSSUnQlm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php require('cabec.php'); ?>

<main class="container mt-4">
    <div class="row">
        <div class="col-md-6">
            <h2>Gerenciamento de Dados</h2>
            <p>Este site oferece um sistema avançado de gerenciamento de dados usando um banco de dados robusto.</p>
            <p>Utilizando tecnologias como MySQL, PostgreSQL ou SQLite, é possível armazenar, recuperar e manipular dados de maneira eficiente.</p>
            <p>Com o PHP, é fácil integrar consultas ao banco de dados para criar páginas dinâmicas e interativas.</p>
        </div>
        <div class="col-md-6">
            <h2>Login e Segurança</h2>
            <p>O sistema de login implementado utiliza um banco de dados para armazenar credenciais de usuários com segurança.</p>
            <p>As senhas são armazenadas de maneira criptografada, proporcionando uma camada adicional de segurança.</p>
            <p>Além disso, é possível controlar permissões de acesso com base nas funções do usuário registradas no banco de dados.</p>
        </div>
    </div>
</main>

<?php require_once('rodape.php'); ?>

<!-- Inclui os scripts do Bootstrap (jQuery, Popper.js, Bootstrap JS) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.8/dist/umd/popper.min.js" integrity="sha384-q4XYDbXaAqD1Fa0EE1CuoGqvyi5sAeZvCr4cnLrMep7SkuhJFfwnfA1BFe6JeB56" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+Wyq6Bf1BktvH2+rHg02lXN5vBYbSSUnQlm" crossorigin="anonymous"></script>

</body>
</html>
