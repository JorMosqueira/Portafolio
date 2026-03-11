<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <title><?php bloginfo('name'); ?></title>

    <!-- Bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    
    <!-- ICONOS FOTS AWESOME -->
    <script src="https://kit.fontawesome.com/c0e79807e2.js" crossorigin="anonymous"></script>

    <!-- CSS link -->
    <link rel="stylesheet" href="<?php echo get_theme_file_uri( 'style.css' ); ?>">

    <?php wp_head(); ?>

</head>

<body>



<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="logo">
        <a class="navbar-brand" href="#">
            <img src="<?php echo get_theme_file_uri("img/logo3.png"); ?>" alt="">
        </a>
    </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item active">
                <a class="nav-link" href="http://localhost/portafolio">Inicio <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://localhost/portafolio#servicios">Servicios</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://localhost/portafolio#proyectos">Proyectos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://localhost/portafolio#contacto">Contacto</a>
            </li>
        </ul>
    </div>
</nav>
