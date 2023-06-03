import './bootstrap';
var dropdown = document.getElementsByClassName("dropdown");

var i;

for (i = 0; i < dropdown.length; i++) {
    dropdown[i].addEventListener("click", function () {
        this.classList.toggle("active");
        var dropdownMenu = this.getElementsByClassName("dropdown-menu")[0];
        if (dropdownMenu.style.display === "block") {
            dropdownMenu.style.display = "none";
        } else {
            dropdownMenu.style.display = "block";
        }
    });
}
//Pou afficher ou cacher la conversation:
// Récupération des éléments HTML par leur identifiant
var button = document.getElementById("msgon");
var div = document.getElementById("conversation");

// Ajout d'un écouteur d'événement sur le clic du bouton
button.addEventListener("click", function () {
    // Si la div est affichée, on la cache
    if (div.style.display === "block") {
        div.style.display = "none";
    }
    // Sinon, on l'affiche
    else {
        div.style.display = "block";
    }
});

