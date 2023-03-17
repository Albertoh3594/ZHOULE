/*HEADER*/

$(document).ready(function() {
    navbarFixed();
    irArriba();
    dropMenuLR();
    enlacesHashtag();
    flechaNavbar();
});

/*Seleccionar todos los enlaces con atributo href que empiecen con el valor "#" y se añade un evento click a cada uno, entonces al hacer click en cualquie enlace se calcela el comportamiento predeterminado que tiene de añadir un # en el enlace*/

function enlacesHashtag() {
    $('a[href^="#"]').on('click', function(event) {
        var enlace = $(this).attr('href');
        if (enlace === '#') {
            event.preventDefault();
        } else if (enlace.charAt(0) === '#') {
            var seccion = $(enlace);
            if (seccion.length) {
                event.preventDefault();
                event.stopPropagation();
                $('html, body').animate({
                    scrollTop: seccion.offset().top
                }, 500);
            }
        } else {
            event.preventDefault();
        }
    });
};

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

function irArriba() {
    $('.ir-arriba').click(function() { $('body,html').animate({ scrollTop: '0px' }, 1000); });
    $(window).scroll(function() {
        if ($(this).scrollTop() > 500) { $('.ir-arriba').slideDown(600); } else { $('.ir-arriba').slideUp(600); }
    });
    $('.ir-abajo').click(function() { $('body,html').animate({ scrollTop: '1000px' }, 1000); });
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

    //flecha para home
    let home = document.getElementById("home");
    home.addEventListener("mouseover", () => {
        move.className = "flecha-navbar";
        move.style.setProperty("left", "29px");
    }, false)
    home.addEventListener("mouseout", () => {
        move.className = "flecha-navbar";
    }, false)

    //flecha para equipos
    let teams = document.getElementById("teams");
    teams.addEventListener("mouseover", () => {
        move.className = "flecha-navbar";
        move.style.setProperty("left", "116px");
    }, false)
    teams.addEventListener("mouseout", () => {
        move.style.setProperty("left", "29px");
    }, false)

    //flecha para tienda
    let shop = document.getElementById("shop");
    shop.addEventListener("mouseover", () => {
        move.className = "flecha-navbar";
        move.style.setProperty("left", "210px");
    }, false)
    shop.addEventListener("mouseout", () => {
        move.style.setProperty("left", "29px");
    }, false)


    //flecha para noticias
    let news = document.getElementById("news");
    news.addEventListener("mouseover", () => {
        move.className = "flecha-navbar";
        move.style.setProperty("left", "306px");
    }, false)
    news.addEventListener("mouseout", () => {
        move.style.setProperty("left", "29px");
    }, false)


    //flecha para sobre nosotros
    let about = document.getElementById("about");
    about.addEventListener("mouseover", () => {
        move.className = "flecha-navbar";
        move.style.setProperty("left", "430px");
    }, false)
    about.addEventListener("mouseout", () => {
        move.style.setProperty("left", "29px");
    }, false)
}
