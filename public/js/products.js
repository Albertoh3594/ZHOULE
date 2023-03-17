$(document).ready(function() {
    flechaNavbar();
    navbarFixed();

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
                    /*console.log(product.imagen_principal.ruta)*/
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
                    img.src = product.imagen_principal.ruta;
                    img.alt = 'imagen_principal_' + product.nombre;
                    enlace.appendChild(img);


                    imgContent.appendChild(enlace);

                    // Se crea el div con la clase "text-content"
                    let textContent = document.createElement('div');
                    textContent.classList.add('text-content');

                    // Se crea el elemento de título con el nombre del producto
                    let title = document.createElement('h3');
                    title.classList.add('product-title');
                    title.textContent = product.nombre;
                    textContent.appendChild(title);

                    // Se crea el elemento de precio con el precio del producto
                    let price = document.createElement('h4');
                    price.classList.add('product-price');
                    price.textContent = product.precio;
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


    //flecha para noticias
    let news = document.getElementById("news");
    news.addEventListener("mouseover", () => {
        move.className = "flecha-navbar";
        move.style.setProperty("left", "306px");
    }, false)
    news.addEventListener("mouseout", () => {
        move.style.setProperty("left", "210px");
    }, false)


    //flecha para sobre nosotros
    let about = document.getElementById("about");
    about.addEventListener("mouseover", () => {
        move.className = "flecha-navbar";
        move.style.setProperty("left", "430px");
    }, false)
    about.addEventListener("mouseout", () => {
        move.style.setProperty("left", "210px");
    }, false)
}
