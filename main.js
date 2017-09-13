"use strict";

//mes personnages
let monster = {
    nom: "godzilla",
};

let accueil = document.querySelector("#accueil");
accueil.addEventListener("click", function() {
    move();
});

function move() {
    let godzilla = document.querySelector(".godzilla");
    let classes = godzilla.className;
    godzilla.classList.add("godzilla-move");
    godzilla.addEventListener('animationend', function() {
        godzilla.className = classes;
    })
}