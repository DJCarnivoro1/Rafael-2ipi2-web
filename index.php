<?php
session_start();

$msg = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    if ($usuario == "Rafael" && $senha == "1234") {
        session_regenerate_id(true);

        $_SESSION["usuario"] = $usuario;
        
        header("Location: pagina.php");

        exit;
    } else {
        $msg = "Usuário ou senha incorretos!";
    }
}
?>

<htmL>
    <head>
        <link rel="stylesheet" href="style.css">
        <meta chartset="UTF-8">
        <title>Login</title>
    </head>
    <body id="form">
        <h2>Login do Sistema</h2>
        <form method="POST">
            <label>Usuário:</label>
            <input type="text" name="usuario" required>
            <br><br>
            <label>Senha:</label>
            <input type="password" name="senha" required>
            <br><br>
            <button type="submit">Entrar</button>
        </form>
        <p><?= htmlspecialchars($msg)?></p>
    </body>
</html>