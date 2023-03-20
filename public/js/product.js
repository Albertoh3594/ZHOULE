$(document).ready(function() {
    flechaNavbar()
    dropMenuLR();

    let image = document.getElementsByClassName('image')
    let activeImages = document.getElementsByClassName('active')

    for (var i = 0; i < image.length; i++) {

        image[i].addEventListener('mouseover', function() {
            console.log(this);

            if (activeImages.length > 0) {
                activeImages[0].classList.remove('active')
            }
            this.classList.add('active')
            document.getElementById('principal').src = this.src
        })
    }


    let slider = document.getElementById('slider');
    let buttonRight = document.getElementById('slideRight');
    let buttonLeft = document.getElementById('slideLeft');

    buttonLeft.addEventListener('click', function() {
        $("#slider").animate({ scrollLeft: "-=180" }, 500);
    })

    buttonRight.addEventListener('click', function() {
        $("#slider").animate({ scrollLeft: "+=180" }, 500);
    })


    // Detectar movimiento de la rueda del mouse
    slider.addEventListener('wheel', function(event) {
        event.preventDefault();
        slider.scrollLeft += event.deltaY;
    });


});

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
    move.style.setProperty("left", "210px");
    //flecha para home
    let home = document.getElementById("home");
    home.addEventListener("mouseover", () => {
        move.className = "flecha-navbar";
        move.style.setProperty("left", "29px");
    }, false)
    home.addEventListener("mouseout", () => {
        move.style.setProperty("left", "210px");
    }, false)

    //flecha para equipos
    let teams = document.getElementById("teams");
    teams.addEventListener("mouseover", () => {
        move.className = "flecha-navbar";
        move.style.setProperty("left", "116px");
    }, false)
    teams.addEventListener("mouseout", () => {
        move.style.setProperty("left", "210px");
    }, false)

    //flecha para tienda
    let shop = document.getElementById("shop");
    shop.addEventListener("mouseover", () => {
        move.className = "flecha-navbar";
        move.style.setProperty("left", "210px");
    }, false)
    shop.addEventListener("mouseout", () => {
        move.className = "flecha-navbar";
    }, false)

    //flecha para sobre nosotros
    let about = document.getElementById("about");
    about.addEventListener("mouseover", () => {
        move.className = "flecha-navbar";
        move.style.setProperty("left", "330px");
    }, false)
    about.addEventListener("mouseout", () => {
        move.style.setProperty("left", "29px");
    }, false)
}