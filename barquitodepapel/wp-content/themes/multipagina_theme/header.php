<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">
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

<?php $custom_logo = wp_get_attachment_image( get_theme_mod( 'custom_logo' ), 'medium' ); ?>

<nav class="navbar navbar-expand-md navbar-light">
    <div class="container-fluid">
    <a href="<?php echo home_url(); ?>">
        <div class="logo">
            <?php echo $custom_logo ?>
        </div>
    </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="menu">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'menu',
                'container' => false,
                'menu_class' => '',
                'fallback_cb' => '__return_false',
                'items_wrap' => '<ul id="%1$s" class="navbar-nav ms-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
                'depth' => 2,
                'walker' => new bootstrap_5_wp_nav_menu_walker()
            ));
            ?>
        </div>
    </div>
</nav>