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
        <link rel="stylesheet" href="animations.css">
        <meta chartset="UTF-8">
        <title>Login</title>
    </head>
    <body id="form"></body>
        <div id="fundo"></div>
        <div id="dform">
            <img src="https://static.wikia.nocookie.net/terraria_gamepedia/images/a/a4/NewPromoLogo.png/revision/latest?cb=20200506135559">
            <h2>Criação de personagem</h2>
            <form method="POST">
                <div>
                    <label>Usuário:</label><br>
                    <input type="text" name="usuario" required>
                </div>
                <br><br>
                <div>
                    <label>Senha:</label><br>
                    <input type="password" name="senha" required>
                </div>
                <br><br>
                <button type="submit">Entrar</button>
            </form>
            <p><?= htmlspecialchars($msg)?></p>
        </div>
    </body>
</html>
