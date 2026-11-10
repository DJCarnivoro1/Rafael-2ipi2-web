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
        <link rel="stylesheet" href="animations.css">
        <meta chraset="UTF-8">
        <title>Página Protegida</title>
    </head>
    <body id="pag">
        <div id="fundo1"></div>
        <div id="fundo2"></div>
        <div><img src="https://preview.redd.it/the-ultimate-war-machine-xf-09-ares-infernum-version-made-v0-ldcmq35z3ddc1.gif?width=640&crop=smart&auto=webp&s=b31b065af5b718a53399d929a0c33d633c32a24c" id="ares" height="700"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS-MraTLRGS-v4dMLgttGyjgIevcWtFZDIzxzC9EWtyHg&s=10" id="artemis" width="270" style="rotate: 90deg;"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQpKwk9A_mbHd5_eCZeqBRSbUnvzyiVKdQ_ZmXgt2HI_A&s=10" id="apollo" width="270" style="rotate: 270deg;"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSgi2J_gbkztRGbOTKoEQIIivEL6als-fpHRk7CEzDO&s" id="thanatos" width="1500"></div>
        <div id="devo"><img src="https://static.wikia.nocookie.net/calamity-paint-retold/images/b/ba/Dog_neo2.png/revision/latest?cb=20190915221618"></div>
        <div id="prov"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT1lpwIGXeiLYMiu8Wm2hengwMNULPH4j72V1DeasiK4Q&s=10" height="650" id="imgprov"></div>
        <!--
        <div id="perfil">
            <img src="https://static.wixstatic.com/media/830a10_1e0e58cbb3514c0e9cfe3a380f5e6497~mv2.png/v1/fill/w_168,h_231,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/830a10_1e0e58cbb3514c0e9cfe3a380f5e6497~mv2.png">
            <h1 id="nome">Rafael Rangel Martins</h1>
            <a href="sair.php">Sair do Sistema</a>
        </div> -->
        <section id="s0">
        <h1 id="bv">Olá, bem-vindo de volta <?= htmlspecialchars($_SESSION["usuario"]) ?>!</h1>
        <h1 id="titulo">Terraria Calamity</h1>
        <p id="apr">
            O Calamity Mod é uma das maiores e mais populares modificações de conteúdo criadas por fãs para o jogo Terraria.<br>
            O mod pode ser instalado no PC através do gerenciador de mods oficial tModLoader.<br>
            Abaixo você irá encontrar a história do mod, já no canto superior esquerdo, você encontrará o seu inventário onde estão invocadores(tocadores de musica) de três bosses escolhidos
        </p>
        
        </section>
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
            <div class="item"><button onclick="prov()"><img src="https://calamitymod.wiki.gg/images/Profaned_Core.png?54a1f8"></button></div>
            <div class="item"><button onclick="devo('musicas/UNIVERSAL COLLAPSE _ .mp3')"><img src="https://calamitymod.wiki.gg/images/Cosmic_Worm.png?870b5e"></button></div>
            <div class="item"><button onclick="echo()"><img src="https://terraria.wiki.gg/images/Ocram%27s_Razor.png?c7c23c"></button></div>
        </div>
    <audio id="minhaMusica" controls muted></audio>
        <script src="script.js">
            const audio = document.getElementById("minhaMusica");
const pag = document.getElementById("pag");
const fundo1 = document.getElementById('s0');
const fundo2 = document.getElementById('s1');
const fundo3 = document.getElementById("s2");
const fundo4 = document.getElementById("s3");

function tocar(musica) {
    audio.muted = !audio.muted;
    
    if (estaNoCentro(fundo2)) {
        pag.classList.add("back2");
        
    }

    if (audio.paused) {
        audio.setAttribute("src", musica);
        audio.play();
        alert(1);
    } else {
        audio.pause();
        audio.currentTime = 0;
    }
}

function estaNoCentro(elemento) {
    
    const rect = elemento.getBoundingClientRect();
    
    // Dimensões da janela (viewport)
    const windowWidth = window.innerWidth || document.documentElement.clientWidth;
    const windowHeight = window.innerHeight || document.documentElement.clientHeight;
    
    // Centro da janela
    const centroJanelaX = windowWidth / 2;
    const centroJanelaY = windowHeight / 2;
    
    // Centro da div
    const centroDivX = rect.left + rect.width / 2;
    const centroDivY = rect.top + rect.height / 2;
    
    // Definindo uma margem de tolerância (opcional, em pixels)
    const tolerancia = 10;
    
    const noCentroX = Math.abs(centroJanelaX - centroDivX) <= tolerancia;
    const noCentroY = Math.abs(centroJanelaY - centroDivY) <= tolerancia;
    
    return noCentroX && noCentroY;
}

// Detecta quando o mouse entra no elemento
fundo1.addEventListener('mouseenter', () => {
    alert(3);
  });

  // Detecta quando o mouse sai do elemento
fundo1.addEventListener('mouseleave', () => {
    alert(23);
  });

window.addEventListener('scroll', () => {
    alert(1);
    
});

        </script>

    </body>
</htmL>
