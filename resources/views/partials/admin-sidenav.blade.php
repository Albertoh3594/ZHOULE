
<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">

                <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                            Authentication
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="login.html">Login</a>
                                <a class="nav-link" href="register.html">Register</a>
                                <a class="nav-link" href="password.html">Forgot Password</a>
                            </nav>
                        </div>
                    </nav>
                </div>
                <div class="sb-sidenav-menu-heading">Gestion</div>
                <a class="nav-link" href="{{ url('admin.productos') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Productos
                </a>
                <a class="nav-link" href="{{ url('admin.productos') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Usuarios
                </a>
                <a class="nav-link" href="{{ url('admin.productos') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Teams
                </a>
                <a class="nav-link" href="{{ url('admin.productos') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Juegos
                </a>
            </div>
        </div>
        <div class="sb-sidenav-footer">
           <div class="small">Usuario logueado:</div>
           {{-- {{ Auth::user()->nombre }} --}}
        </div>
    </nav>
</div>
