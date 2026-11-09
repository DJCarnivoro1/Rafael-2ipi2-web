const audio = document.getElementById("minhaMusica");
const pag = document.getElementById("pag");
const fundo1 = document.getElementById("s1");
const fundo2 = document.getElementById("s2");
const fundo3 = document.getElementById("s3");
const fundo4 = document.getElementById("s4");
const back = document.getElementById("fundo1");
const back1 = document.getElementById("fundo2");

function prov(musica) {
    back.classList.remove("devo","echo1");
    back.classList.add("prov");
    back1.classList.remove("echo2");
    tocar(musica);
}

function devo(musica) {
    back.classList.remove("prov","echo1");
    back.classList.add("devo");
    back1.classList.remove("echo2");
    tocar(musica);
}

function echo(musica) {
    back.classList.remove("prov","devo");
    back.classList.add("echo1");
    back1.classList.add("echo2");
    tocar(musica);
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