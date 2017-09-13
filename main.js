"use strict";

//mes personnages
let monsters = {
    nom: "godzilla",
};

let accueil = document.querySelector("#accueil");
accueil.addEventListener("click", function() {
    move();
    swing();
});

function move() {
    let godzilla = document.querySelector(".godzilla");
    let classes = godzilla.className;
    godzilla.classList.add("godzilla-move");
    godzilla.addEventListener('animationend', function() {
        godzilla.className = classes;
    })
}

function swing() {
    let swingtitle = document.querySelector("#swingtitle");
    let classes = swingtitle.className;
    swingtitle.classList.add("swing-move");
    swingtitle.addEventListener('animationend', function() {
        swingtitle.className = classes;
    })
}