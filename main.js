"use strict";

//mes personnages
let monsters = {
    nom: "godzilla",
};

let accueil = document.querySelector("#accueil");
accueil.addEventListener("click", function() {
    move();
    tada();
});

function move() {
    let godzilla = document.querySelector(".godzilla");
    let classes = godzilla.className;
    godzilla.classList.add("godzilla-move");
    godzilla.addEventListener('animationend', function() {
        godzilla.className = classes;
    })
}

function tada() {
    let tada = document.querySelector("#tada");
    let classes = tada.className;
    tada.classList.add("tada-move");
    tada.addEventListener('animationend', function() {
        tada.className = classes;
    })
}