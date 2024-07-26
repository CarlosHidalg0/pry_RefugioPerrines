<nav class="navbar navbar-expand-lg navbar-dark bg-dark w-100">
        <div class="container-fluid">
            <a class="navbar-brand me-auto" href="#">
                <img src="<?php echo APP_URL; ?>/app/views/img/logo.svg" alt="Refugio Los Perrines" height="20px" style="margin-right: 30px;">
                Refugio "Los perrines"
            </a>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header navbar-dark bg-dark">
                    <h5 class="offcanvas-title text-white" id="offcanvasNavbarLabel">Refugio CEHT</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body navbar-dark bg-dark">
                    <ul class="navbar-nav justify-content-center flex-grow-1 pe-3 navbar-dark bg-dark">
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" aria-current="page" href="<?php echo APP_URL; ?>admindashboard/">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" aria-current="page" href="<?php echo APP_URL; ?>crudslider/">CRUDSlider</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="<?php echo APP_URL; ?>crudnosotros/">CRUD¿Quienes somos?</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                CRUDDonar
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Efectivo</a></li>
                                <li><a class="dropdown-item" href="#">Especie</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <a href="<?php echo APP_URL;?>login/" class="login-btn">Inicie Sesión</a>
            <button class="navbar-toggler pe-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
