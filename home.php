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
            <h2>Site Responsivo com Bootstrap</h2>
            <p>Este site utiliza o framework Bootstrap para criar um layout responsivo e amigável para diferentes dispositivos.</p>
            <p>O design responsivo permite que o conteúdo se ajuste automaticamente a telas de tamanhos variados, como desktops, tablets e smartphones.</p>
            <p>As classes do Bootstrap, como <code>container</code> e <code>col-md-6</code>, ajudam a estruturar e organizar o conteúdo de forma eficiente.</p>
        </div>
        <div class="col-md-6">
            <h2>Login com PHP</h2>
            <p>Em um site dinâmico, você pode implementar um sistema de login com PHP para autenticar usuários.</p>
            <p>O PHP permite processar dados do usuário, verificar credenciais e controlar o acesso a áreas restritas do site.</p>
            <p>Embora não haja um formulário específico aqui, você pode integrar formulários de login em páginas protegidas para garantir a segurança.</p>
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
