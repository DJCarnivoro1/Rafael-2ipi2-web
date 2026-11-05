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
        <!-- jQuery -->
        <script src="https://jquery.com"></script>
        
        <!-- Slick CSS -->
        <link rel="stylesheet" type="text/css" href="https://jsdelivr.net"/>
        <link rel="stylesheet" type="text/css" href="https://jsdelivr.net"/>

        <link rel="stylesheet" href="style.css">
        <meta chraset="UTF-8">
        <title>Página Protegida</title>
    </head>
    <body id="pag">
        <div id="perfil">
            <img src="https://static.wixstatic.com/media/830a10_1e0e58cbb3514c0e9cfe3a380f5e6497~mv2.png/v1/fill/w_168,h_231,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/830a10_1e0e58cbb3514c0e9cfe3a380f5e6497~mv2.png">
            <h1 id="nome">Rafael Rangel Martins</h1>
            <a href="sair.php">Sair do Sistema</a>
        </div>

        <h1 id="bv">Olá, bem-vindo de volta <?= htmlspecialchars($_SESSION["usuario"]) ?>!</h1>

        <p>Você acessou uma página protegida por sessão.</p>

        <section id="s1">
            <div>
                <h1>Resumo do primeiro livro Elemental Hunters</h1>

            </div>
        </section>

        <section id="s2">
            <div>
                <div class="meu-carrossel">
                    <div><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS7myTiKFJH1pYl7xll5ym4L67eZZL4Wbv76jXreQIdkKsMTh6ILIl_bUSb&s=10" alt="Imagem 1"></div>
                    <div><img src="https://w7.pngwing.com/pngs/895/252/png-transparent-plants-vs-zombies-2-it-s-about-time-plants-vs-zombies-garden-warfare-plants-vs-zombies-heroes-peashooter-pea-leaf-video-game-smiley-thumbnail.png" alt="Imagem 2"></div>
                    <div><img src="https://static.wikia.nocookie.net/plantas-vs-zumbis-brasil/images/d/d2/Sunflower2009HD.png/revision/latest?cb=20241012114549&path-prefix=pt-br" alt="Imagem 3"></div>
                </div>
            </div>
        </section>

        <section id="s3"></section>

        <script type="text/javascript" src="https://jsdelivr.net"></script>

        <script type="text/javascript">
            $(document).ready(function(){
                $('.meu-carrossel').slick({
                autoplay: true,        // Rotação automática
                autoplaySpeed: 3000,   // Tempo em milissegundos
                dots: true,            // Mostra bolinhas de navegação
                arrows: true,          // Mostra setas de avançar/voltar
                slidesToShow: 1,       // Quantos slides aparecem por vez
                slidesToScroll: 1      // Quantos slides passam por vez
                });
            });
        </script>

    </body>
</htmL>
