$(document).ready(function() {
    flechaNavbar();
    navbarFixed();
    dropMenuLR();
    irArriba();

    let offset = $('#product-list > div').length;
    let totalProducts = $('#total-products').data('total-products');
    $('#load-more').click(function(e) {
        e.preventDefault();
        $.ajax({
            url: '/productos/data',
            type: 'GET',
            data: {
                totalProducts: totalProducts,
                offset: offset
            },
            success: function(data) {
                let products = data.products;
                let baseUrl = window.location.origin;
                products.forEach(function(product) {
                    console.log(product)
                        // Se crea el div con la clase "col-md-6 col-lg-3 col-xl-3"
                    let productDiv = document.createElement('div');
                    productDiv.classList.add('col-md-6', 'col-lg-3', 'col-xl-3');

                    // Se crea el div con la clase "single-product"
                    let singleProductDiv = document.createElement('div');
                    singleProductDiv.classList.add('single-product');

                    // Se crea el enlace para el producto
                    let enlace = document.createElement('a');
                    enlace.setAttribute('href', baseUrl + '/producto/' + product.id);
                    console.log(enlace)

                    // Se crea el div con la clase "img-content"
                    let imgContent = document.createElement('div');
                    imgContent.classList.add('img-content');

                    // Se crea el elemento de imagen con la ruta de la imagen principal
                    let img = document.createElement('img');
                    img.src = product.imagen_principal.route;
                    img.alt = 'imagen_principal_' + product.name;
                    enlace.appendChild(img);

                    imgContent.appendChild(enlace);

                    // Se crea el div con la clase "text-content"
                    let textContent = document.createElement('div');
                    textContent.classList.add('text-content');

                    // Se crea el elemento de título con el nombre del producto
                    let title = document.createElement('h3');
                    title.classList.add('product-title');
                    title.textContent = product.name;
                    textContent.appendChild(title);

                    // Se crea el elemento de precio con el precio del producto
                    let price = document.createElement('h4');
                    price.classList.add('product-price');
                    price.textContent = product.price + ' €';
                    textContent.appendChild(price);

                    // Se agrega los elementos creados a "singleProductDiv"
                    singleProductDiv.appendChild(imgContent);
                    singleProductDiv.appendChild(textContent);

                    // Se agrega "singleProductDiv" a "productDiv"
                    productDiv.appendChild(singleProductDiv);

                    // Se agrega "productDiv" a "#product-list"
                    document.getElementById('product-list').appendChild(productDiv);
                });
                offset += products.length;
                if (offset >= data.totalProducts) {
                    $('#load-more').hide();
                }
            },
            error: function(xhr) {
                console.log(xhr.responseText);
            }
        });
    });
});

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
        move.style.setProperty("left", "210px");
    }, false)
}
