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
        <div id="fundo1"></div>
        <div id="fundo2"></div>
        <!--
        <div id="perfil">
            <img src="https://static.wixstatic.com/media/830a10_1e0e58cbb3514c0e9cfe3a380f5e6497~mv2.png/v1/fill/w_168,h_231,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/830a10_1e0e58cbb3514c0e9cfe3a380f5e6497~mv2.png">
            <h1 id="nome">Rafael Rangel Martins</h1>
            <a href="sair.php">Sair do Sistema</a>
        </div> -->

        <h1 id="bv">Olá, bem-vindo de volta <?= htmlspecialchars($_SESSION["usuario"]) ?>!</h1>
        <h1 id="titulo">Terraria Calamity</h1>
        <p id="apr">
            O Calamity Mod é uma das maiores e mais populares modificações de conteúdo criadas por fãs para o jogo Terraria.<br>
            O mod pode ser instalado no PC através do gerenciador de mods oficial tModLoader.<br>
            Abaixo você irá encontrar a história do mod, já no canto superior esquerdo, você encontrará o seu inventário onde estão invocadores(tocadores de musica) de três bosses escolhidos
        </p>

        <section id="s1">
            <div>
                
                <h2>A Era Dracônica e a Traição</h2>
                <p> Há eras, o mundo de Terraria era dominado simultaneamente por humanos e dragões. Os dragões possuíam as chamadas almas áuricas, que lhes garantiam imortalidade e poderes colossais, renascendo através de Yharon, o dragão da ressurreição.</p>
                <p> O rei dos dragões, Zeratros, foi traído por um monge ganancioso que consumiu sua alma áurica e ascendeu como Xeroc, o Primeiro Deus. Esse ato quebrou o pacto de paz e deu início à matança dos dragões pelos novos deuses humanos e celestes.</p>
            </div>
        </section>

        <section id="s2">
            <div>
                <h2>A Queda e a Ascensão de Yharim</h2>
                <p> Yharim era um jovem guerreiro rebelde que questionava a autoridade tirânica dos deuses. Quando encontrou um ovo de dragão, ele escolheu protegê-lo em vez de sugar seu poder, o que os deuses consideraram uma ofensa e o sentenciaram à morte na lava do submundo.</p>
                <p> Na lava, o ovo eclodiu e salvou Yharim. Suas essências se conectaram, permitindo que Yharim sobrevivesse e revivesse enquanto Yaron vivesse.</p>
                <p>Consumido pelo ódio ao genocídio dos dragões pelos deuses, Yharim iniciou sua cruzada militar para destronar todas as entidades divinas. Ele reuniu aliados poderosos:</p>
                <p>
                    <b>Permafrost:</b> Um mago de gelo e grande estrategista.<br>
                    <b>Draedon:</b> Uma inteligência artificial avançada focada em exotecnologia, criadora das máquinas, laboratórios e dos Exo Mechs.
                    <b>Calamitas (A Bruxa do Enxofre):</b> Uma jovem com imenso poder mágico que foi adotada e treinada para ser uma arma viva contra os deuses.
                </p>
            </div>
        </section>

        <section id="s3">
            <div>
                <h2>Consequências da Guerra e Ruína</h2>
                <p>A Corrupção do Mundo: Sempre que um deus era morto pelas forças de Yharim, sua energia impura não desaparecia, mas se transformava e corrompia a terra, gerando biomas como o Carmim e a Corrupção.</p>
                <p>Em meio ao conflito, cidades e civilizações inteiras foram dizimadas (como a incineração de Ilmeris e a destruição de Azafure pela Elemental do Enxofre).</p>
                <p>Com o tempo, as táticas cruéis de Yharim — incluindo o Projeto Praga e experimentos desumanos de Draedon — fizeram com que aliados se dividissem e desertassem.</p>
            </div>

            
        </section>
        <div id="inventory">
            <div class="item"><img src="https://calamitymod.wiki.gg/images/Profaned_Core.png?54a1f8"></div>
            <div class="item"><img src="https://calamitymod.wiki.gg/images/Cosmic_Worm.png?870b5e"></div>
            <div></div>
        </div>

    </body>
</htmL>
