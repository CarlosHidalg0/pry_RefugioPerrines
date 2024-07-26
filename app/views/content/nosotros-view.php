<body class=""carlitros>
  <h2 class="text-center mt-3">Nosotros Somos</h2>
<div class="container mt-5 d-flex justify-content-center">
    <div class="row justify-content-center">
        <?php 
            require_once "./app/views/inc/head.php";
            require_once "./config/server.php";
            use app\controllers\nosotrosController;

            $nosotrosController = new nosotrosController();
            $nosotros = $nosotrosController->obtenerNosotros();

            foreach($nosotros as $dato){
                echo '<div class="col-md-8 mb-4">';
                echo '<div class="card text-center bg-dark text-white">';
                if (!empty($dato["logo"])) {
                    echo '<img src="'.$dato["logo"].'" class="card-img-top img-fluid custom-img" alt="Imagen">';
                }
                echo '<div class="card-body">';
                echo '<h5 class="card-title section-title">ACERCA DE NOSOTROS</h5>';
                echo '<p class="card-text section-content">'.$dato["acercadenosotros"].'</p>';
                echo '<h5 class="card-title section-title">VISIÓN</h5>';
                echo '<p class="card-text section-content">'.$dato["vision"].'</p>';
                echo '<h5 class="card-title section-title">MISIÓN</h5>';
                echo '<p class="card-text section-content">'.$dato["mision"].'</p>';
                echo '<h5 class="card-title section-title">VALORES</h5>';
                echo '<p class="card-text section-content">'.$dato["valores"].'</p>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
        ?>
    </div>
</div>
</body>
