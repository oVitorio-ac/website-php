<?php
// Inicia a sessão (se ainda não iniciada)
session_start();

// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os dados do formulário
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Simulação de dados de usuários no banco de dados
    $users = array(
        "admin" => array("password" => "adminpass", "role" => "Admin"),
        "lider" => array("password" => "liderpass", "role" => "Lider"),
        "operador" => array("password" => "operadorpass", "role" => "Operador")
    );

    // Verifica se o usuário existe e a senha está correta
    if (array_key_exists($username, $users) && $password == $users[$username]["password"]) {
        // Autenticação bem-sucedida

        // Armazena a função do usuário na sessão
        $_SESSION['user_role'] = $users[$username]["role"];

        // Redireciona para home.php
        header("Location: home.php");
        exit();
    } else {
        // Autenticação falhou
        echo "Falha na autenticação. Verifique seu usuário e senha.";
    }
}
?>
