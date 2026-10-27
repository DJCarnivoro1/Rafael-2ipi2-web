<?php

session_start();

if (!isset($_SESSION["usuario"])) {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <link rel="stylesheet" href="style.css">
        <meta chraset="UTF-8">
        <title>Página Protegida</title>
    </head>
    <body>
        <h1>Bem-vindo!</h1>

        <p>
            Olá, <?= htmlspecialchars($_SESSION["usuario"]) ?>!
        </p>

        <p>Você acessou uma página protegida por sessão.</p>

        <a href="sair.php">Sair do Sistema</a>
    </body>
</htmL>