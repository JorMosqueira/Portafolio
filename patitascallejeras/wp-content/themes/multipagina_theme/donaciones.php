<?php
/*
Template Name: Donaciones
*/
?>

<?php get_header(); ?>

<div class="container-fluid">
    <div class="row">

        <div class="banner">
            
        <?php
        echo do_shortcode('[smartslider3 slider="4"]');
        ?>
        
        </div>
    </div>
        
    </div>
              
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-10 mx-auto text-center donacion">
                <h2 class="mt-5 mb-4" >Inventario de Necesidades de la semana</h2>
                <p class="mb-5">1.- Alimentos para gatos y perros: Nuestra despensa de alimentos está baja, y 
                    necesitamos comida seca y enlatada de alta calidad para nuestros peludos amigos.</p>

                <p class="mb-5">2.- Artículos de higiene y cuidado: Buscamos productos como champú para mascotas,
                     cepillos, toallitas húmedas y productos antipulgas para mantener a nuestros rescatados limpios y saludables.
                </p>

                <div class="metodo-pago my-5">
                        <?php if (have_posts()) : ?>
                        <?php query_posts("category_name=donaciones"); ?>
                        <?php while (have_posts()) : the_post(); ?>

                            <h2 class="mb-5"><?php the_title(); ?></h2>
                            <?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?> <!-- mostarar imagen miniatura -->
                            <a href="#"><button class="btn btn-danger w-50 my-4 p-3">Donar</button></a>
                        <?php endwhile; ?>	
                        <?php else : ?>  
                        <?php endif; ?>
                        <?php wp_reset_query(); ?>
                </div>
            </div>
        </div>
    </div>

    
<!-- ----------------------FOOTER------------------- -->
<div class="container-fluid">
        <footer>
            <div class="row">
                <div class="col-md-11 mx-auto">
                    <div class="row">
                        
                        <?php if (have_posts()) : ?>
                        <?php query_posts("category_name=footer"); ?>
                        <?php while (have_posts()) : the_post(); ?>

                        <div class="col-md-2">
                            <?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?> <!-- mostarar imagen miniatura -->

                        </div>


                        <?php the_content(); ?> <!-- llamado de contenido -->


                        <?php endwhile; ?>	
                        <?php else : ?>  
                        <?php endif; ?>
                        <?php wp_reset_query(); ?>
                        
                    </div>
                </div>
            </div>
        </footer>

    </div>



<?php get_footer(); ?>