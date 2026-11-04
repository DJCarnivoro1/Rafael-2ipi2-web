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
    <body id="pag">
        <div id="perfil">
            <img src="https://static.wixstatic.com/media/830a10_1e0e58cbb3514c0e9cfe3a380f5e6497~mv2.png/v1/fill/w_168,h_231,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/830a10_1e0e58cbb3514c0e9cfe3a380f5e6497~mv2.png">
        </div>

        <h1>Bem-vindo!</h1>

        <p>
            Olá, <?= htmlspecialchars($_SESSION["usuario"]) ?>!
        </p>

        <p>Você acessou uma página protegida por sessão.</p>

        <a href="sair.php">Sair do Sistema</a>
    </body>
</htmL>
