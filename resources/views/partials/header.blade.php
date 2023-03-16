<header>
    <div class="navbar">
        <a href="#"><img src="{{asset('images/Logo.png')}}" alt="logo" id="logo"></a>
        <div id="menuArea">
            <input type="checkbox" id="menuToggle" class="input"></input>

            <label for="menuToggle" class="menuOpen">
                <div class="open"></div>
            </label>

            <div class="menu menuEffects" id="overlay-verde">
                <label for="menuToggle"></label>
                <div class="menuContent">
                    <ul>
                        <li><a href="index.html">HOME</a></li>
                        <li> <a href="teams.html">EQUIPOS</a></li>
                        <li><a href="#tienda-area">TIENDA</a></li>
                        <li><a href="noticias.html">NOTICIAS</a></li>
                        <li><a href="#about-area">SOBRE NOSOTROS</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <nav>
            <div class="nav">
                <ul>
                    <span id="move" class="flecha-navbar"></span>
                    <li id="home"><a href="#home-area">HOME</a></li>
                    <li class="nav-item" id="teams">
                        <a href="#teams-area" class="dropdown-toggle" data-toggle="dropdown">EQUIPOS</a>
                        <div class="dropdown-menu" id="equipos_drop">

                        </div>
                    </li>
                    <li id="shop"><a href="#shop-area">TIENDA</a></li>
                    <li id="news"><a href="#news-area" >NOTICIAS</a></li>
                    <li id="about"><a href="#about-area">SOBRE NOSOTROS</a></li>
                </ul>
            </div>
        </nav>
        <div class="logo-medio">
            <a href="#"><img src="{{asset('images/Logo.png')}}" alt="logo" id="logo1"></a>
        </div>
        <div class="container-iconos">
            <div>
                <a href="#" title="Icono para la busqueda"><span class="fas fa-search"></span></a>
            </div>
            <div>
                <a href="#" title="Icono para el carrito de la compra"><span class="fas fa-shopping-cart"></span></a>
            </div>
            <div class="dropdown">
                <button class="dropbtn far fa-user-circle" value="Desplegar menu oculto" title="Desplegar el menu oculto para iniciar sesión y registrarse"></button>
                <div class="dropdown-content">
                    @if (Route::has('login'))
                        @auth
                            <a href="{{route('profile.show')}}">Perfil</a>
                            <a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Salir</a>
                            <form method="POST" id="logout-form" action="{{ route('logout') }}">
                                @csrf
                            </form>
                        @else
                            <a href="{{route('login')}}" title="Pagina Iniciar Sesion">Iniciar Sesión</a>
                            @if (Route::has('register'))
                                <a href="{{route('register')}}">Registrarse</a>
                            @endif
                        @endif
                    @endif
                </div>
            </div>
        </div>

    </div>

    <div class="slider" id="home-area">
        <div class="slide">
            <div class="contenido">
                <h1>ZHOULE TEAM</h1>
                <p>Lorem ipsum is simply dummy text of the printing and typesetting. Lorem Ipsum has been the industry’s standard dummy. Lorem Ipsum has been the industry’s standard dummy.</p>
                <a href="#contenido-area" class="flecha-slider" title="Flecha para bajar al contenido"></a>
            </div>
            <img src="{{asset("/images/home/slider-1.webp")}}" alt="foto1">
        </div>
        <div class="slide">
            <div class="contenido">
                <h1>ZHOULE TEAM</h1>
                <p>Lorem ipsum is simply dummy text of the printing and typesetting. Lorem Ipsum has been the industry’s standard dummy. Lorem Ipsum has been the industry’s standard dummy.</p>
                <a href="#contenido-area" class="flecha-slider" title="Flecha para bajar al contenido"></a>
            </div>
            <img src="{{asset("/images/home/slider-2.webp")}}" alt="foto2">
        </div>
        <div class="slide">
            <div class="contenido">
                <h1>ZHOULE TEAM</h1>
                <p>Lorem ipsum is simply dummy text of the printing and typesetting. Lorem Ipsum has been the industry’s standard dummy. Lorem Ipsum has been the industry’s standard dummy.</p>
                <a href="#contenido-area" class="flecha-slider" title="Flecha para bajar al contenido"></a>
            </div>
            <img src="{{asset("/images/home/slider-3.webp")}}" alt="foto3">
        </div>
    </div>

</header>
