<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..900;1,100..900&family=Manrope:wght@200..800&family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
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
        <a class="navbar-brand" href="http://localhost/gestoagesto">
            <img src="<?php echo get_theme_file_uri("img/logo-header.png"); ?>" alt="">
        </a>
    </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item active">
                <a class="nav-link" href="http://localhost/gestoagesto">Inicio <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://localhost/gestoagesto#producto">Producto</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://localhost/gestoagesto#reglas">Reglas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://localhost/gestoagesto#contacto">Contacto</a>
            </li>
        </ul>
    </div>
</nav>
