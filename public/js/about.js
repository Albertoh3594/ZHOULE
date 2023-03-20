$(document).ready(function() {
    flechaNavbar()
    dropMenuLR();
    navbarFixed();
});

/*Navbar fixed fondo solido*/
function navbarFixed() {

    let nav = document.querySelector(".navbar");
    window.addEventListener('scroll', fixNav);

    function fixNav() {
        if (window.scrollY > 200) {
            nav.classList.add("solid");
        } else {
            nav.classList.remove("solid");
        }
    }

};

function dropMenuLR() {
    const dropbtn = document.querySelector('.dropbtn');
    const dropdownContent = document.querySelector('.dropdown-content');


    dropbtn.addEventListener('click', () => {
        const computedStyle = window.getComputedStyle(dropdownContent);
        if (computedStyle.getPropertyValue('display') === 'none') {
            dropdownContent.style.display = 'block';
        } else {
            dropdownContent.style.display = 'none';
        }
    });

    window.addEventListener('click', (event) => {
        if (!event.target.matches('.dropbtn')) {
            const computedStyle = window.getComputedStyle(dropdownContent);
            if (computedStyle.getPropertyValue('display') === 'block') {
                dropdownContent.style.display = 'none';
            }
        }
    });
}


function flechaNavbar() {
    //obtener el elemento span por el id move
    let move = document.getElementById("move");
    move.style.setProperty("left", "330px");
    //flecha para home
    let home = document.getElementById("home");
    home.addEventListener("mouseover", () => {
        move.className = "flecha-navbar";
        move.style.setProperty("left", "29px");
    }, false)
    home.addEventListener("mouseout", () => {
        move.style.setProperty("left", "330px");
    }, false)

    //flecha para equipos
    let teams = document.getElementById("teams");
    teams.addEventListener("mouseover", () => {
        move.className = "flecha-navbar";
        move.style.setProperty("left", "116px");
    }, false)
    teams.addEventListener("mouseout", () => {
        move.style.setProperty("left", "330px");
    }, false)

    //flecha para tienda
    let shop = document.getElementById("shop");
    shop.addEventListener("mouseover", () => {
        move.className = "flecha-navbar";
        move.style.setProperty("left", "210px");
    }, false)
    shop.addEventListener("mouseout", () => {
        move.style.setProperty("left", "330px");
    }, false)

    //flecha para sobre nosotros
    let about = document.getElementById("about");
    about.addEventListener("mouseover", () => {
        move.className = "flecha-navbar";
        move.style.setProperty("left", "330px");
    }, false)
    about.addEventListener("mouseout", () => {
        move.className = "flecha-navbar";
    }, false)
}