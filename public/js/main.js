/*HEADER*/

$(document).ready(function() {
    navbarFixed();
    irArriba();
    dropMenuLR();
    verContraseña();
    verConfirmarContraseña();

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


});

/*FUNCION PARA PODER OCULTAR Y VER LA CONTRASEÑA CON EL ICONO DEL OJO*/
function verContraseña() {
    $(".toggle-password").click(function() {
        /* alert($(this).attr('toggle')); */
        $(this).toggleClass("zmdi-eye zmdi-eye-off");
        var input = $($(this).attr("toggle"));
        if (input.attr("type") == "password") {
            input.attr("type", "text");
        } else {
            input.attr("type", "password");
        }
    });
};


/*FUNCION PARA PODER OCULTAR Y VER EL INPUT CONFIRMAR CONTRASEÑA CON EL ICONO DEL OJO*/

function verConfirmarContraseña() {
    $(".toggle-password-confirmation").click(function() {
        /* alert($(this).attr('toggle')); */
        $(this).toggleClass("zmdi-eye zmdi-eye-off");
        var input = $($(this).attr("toggle"));
        if (input.attr("type") == "password") {
            input.attr("type", "text");
        } else {
            input.attr("type", "password");
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