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
        <div id="fundo">
            <div id="cabeca">
                <div id="olho1"></div>
                <div id="olho2"></div>
            </div>
            
        </div>
            <h2>Login do Sistema</h2>
            <form method="POST">
                <label>Usuário:</label><br>
                <input type="text" name="usuario" required>
                <br><br>
                <label>Senha:</label><br>
                <input type="password" name="senha" required>
                <br><br>
                <button type="submit">Entrar</button>
            </form>
            <p><?= htmlspecialchars($msg)?></p>
    </body>
</html>
