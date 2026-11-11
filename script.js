const audio = document.getElementById("minhaMusica");
const pag = document.getElementById("pag");
const fundo1 = document.getElementById("s1");
const fundo2 = document.getElementById("s2");
const fundo3 = document.getElementById("s3");
const fundo4 = document.getElementById("s4");
const back = document.getElementById("fundo1");
const back1 = document.getElementById("fundo2");
const devor = document.getElementById("devo");
const provi = document.getElementById("prov");

function prov(musica) {
    back.classList.remove("devo","echo1");
    back.classList.toggle("prov");
    back1.classList.remove("echo2");
    provi.classList.toggle("provanim");
    devor.classList.remove("devoanim");
    document.getElementById("ares").classList.remove("ares");
    document.getElementById("thanatos").classList.remove("thana");
    document.getElementById("artemis").classList.remove("artemis");
    document.getElementById("apollo").classList.remove("apollo");
    tocar(musica);
    if (document.getElementById("imgprov").src === "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQteDQNRF9bXnoRdrXcaPsgac8Av2-phHv7xofImm0aBg&s") {
        document.getElementById("imgprov").src = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT1lpwIGXeiLYMiu8Wm2hengwMNULPH4j72V1DeasiK4Q&s=10";
        setTimeout(() => {
            document.getElementById("imgprov").src = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQteDQNRF9bXnoRdrXcaPsgac8Av2-phHv7xofImm0aBg&s";
          }, 10000);
    } else {
    setTimeout(() => {
        document.getElementById("imgprov").src = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQteDQNRF9bXnoRdrXcaPsgac8Av2-phHv7xofImm0aBg&s";
      }, 10000);
    }
}

function devo(musica) {
    back.classList.remove("prov","echo1");
    back.classList.toggle("devo");
    back1.classList.remove("echo2");
    provi.classList.remove("provanim");
    document.getElementById("ares").classList.remove("ares");
    document.getElementById("thanatos").classList.remove("thana");
    document.getElementById("artemis").classList.remove("artemis");
    document.getElementById("apollo").classList.remove("apollo");
    tocar(musica);
    
    devor.classList.toggle("devoanim");
}

function echo(musica) {
    back.classList.remove("prov","devo");
    devor.classList.remove("devoanim");
    back.classList.toggle("echo1");
    back1.classList.toggle("echo2");
    provi.classList.remove("provanim");
    tocar(musica);
    document.getElementById("ares").classList.toggle("ares");
    document.getElementById("thanatos").classList.toggle("thana");
    document.getElementById("artemis").classList.toggle("artemis");
    document.getElementById("apollo").classList.toggle("apollo");
    if (document.getElementById("artemis").classList.contains("artemis")) {
        document.addEventListener('mousemove', (event) => {
            const y = event.clientY; // Posição vertical
            if (document.getElementById("artemis").classList.contains("artemis")) {
            document.getElementById("artemis").style.top = y + "px";
            } else {
                document.getElementById("artemis").style.top = "-1500px"
            }
        });
    }
    if (document.getElementById("apollo").classList.contains("apollo")) {
        document.addEventListener('mousemove', (event) => {
            const y = event.clientY; // Posição vertical
            if (document.getElementById("apollo").classList.contains("apollo")) {
            document.getElementById("apollo").style.top = y + "px";
            } else {
                document.getElementById("apollo").style.top = "-1500px"
            }
        });
    }
}

function tocar(musica) {
    audio.muted = !audio.muted;
    
    if (audio.paused) {
        audio.setAttribute("src", musica);
        audio.play();
    } else {
        audio.pause();
        audio.currentTime = 0;
    }
}

s1.addEventListener('mouseenter', () => {
    pag.style.backgroundImage = "url('https://i.redd.it/noeb2anlkk4h1.png')";
    
  });

s2.addEventListener('mouseenter', () => {
    pag.style.backgroundImage = "url('https://i.redd.it/mfbw15zgkk4h1.png')";
  });

s3.addEventListener('mouseenter', () => {
    pag.style.backgroundImage = "url('https://i.redd.it/ivjjhfrpk5051.png')";
  });

s0.addEventListener('mouseenter', () => {
    pag.style.backgroundImage = "url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQEFhfz4_9TnyPFlkpk9CrNmenC0eW1dOUnOl29b7WeeA&s=10')";
  });
