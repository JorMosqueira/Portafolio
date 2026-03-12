<?php
/*
Template Name: Inicio
*/
?>

<?php get_header(); ?>

<!-- SLIDER DINÁMICO -->
<?php
    echo do_shortcode('[smartslider3 slider="2"]');
?>

<!-- SOMOS CONUPIA -->
<section class="seccion-separador">
    <div class="container col-md-10 mx-auto">
        <div class="row">
            <?php if (have_posts()) : ?>
                <?php query_posts("category_name=intro-conupia"); ?>
            <?php while (have_posts()) : the_post(); ?> 
                        
            <div class="col-md-6">
                <?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?>
            </div>
            <div class="col-md-6 my-auto">
                <h2 class="titulos-azul"><?php the_title(); ?></h2>
                <p><?php the_content(); ?></p>
            </div>

            <?php endwhile; ?>	
            <?php else : ?>  
            <?php endif; ?>
            <?php wp_reset_query(); ?>
        </div>
    </div>
</section>




<!-- ÚLTIMAS NOTICIAS -->
<section class="seccion-separador">
    <div class="row mt-5 mx-0">
        <div class="col-md-10 mx-auto my-4">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="titulos-negro">Últimas noticias</h2>
                </div>
                <div class="col-md-6 centrar-final">
                    <a href="<?php echo esc_url(home_url('noticias/')); ?>"><h4>Ver todas las noticias</h4></a>
                </div>
            </div>
            <hr class="mb-5 lineas-horizontales">
            <div class="row margen-noticia">
            
                <?php if (have_posts()) : ?>
                <?php query_posts("category_name=ultimas-noticias&showposts=6"); ?>
                <?php while (have_posts()) : the_post(); ?>

                    <!-- Estructura ultimas noticias -->
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-5">
                        <?php the_post_thumbnail('full', array('class' => 'img-noticia w-100')); ?>
                        <p class="mt-3 mb-0"><?php the_field('fecha_noticia'); ?></p>
                        <h4 class="titulo-noticia mb-2"><?php the_field('titulo_noticia'); ?></h4>
                            <p class="cuerpo-noticia"><?php the_field('cuerpo_noticia'); ?></p>

                        <a href="<?php the_permalink() ?>" class="btn btn-primary w-50 mt-2 fw-bold py-3" ><?php the_field('boton-noticia'); ?>Leer más</a>
                    </div>

                <?php endwhile; ?>	
                <?php else : ?>  
                <?php endif; ?>
                <?php wp_reset_query(); ?>
            </div>
        </div>
    </div>
</section>

<!-- VIDEO DE PARTICIPACIÓN -->
<section class="fondo-video">
    <div class="container col-md-10 mx-auto">
        <h2 class="titulos-negro">Nuestras participaciones</h2>
        <hr class="my-4 lineas-horizontales">
        <div class="row">
            <?php if (have_posts()) : ?>
                <?php query_posts("category_name=video"); ?>
            <?php while (have_posts()) : the_post(); ?> 
                        
                <div class="col-md-5 mx-auto">
                    <div class="embed-container ratio ratio-16x9">
                        <?php the_field('video'); ?>
                    </div>
                </div>
                <div class="col-md-5 mx-auto">
                    <h4 class="mb-3"><?php the_field("titulo_video"); ?></h4>
                    <p><?php the_field("informacion_video"); ?></p>
                </div>

            <?php endwhile; ?>
            <?php else : ?>
            <?php endif; ?>
            <?php wp_reset_query(); ?>
        </div>
    </div>
</section>

<!-- CONUPIA EN IMÁGENES -->
<section class="seccion-separador">
    <div class="container col-md-10 mx-auto">
        <h2 class="titulos-negro">Conupia en imágenes</h2>
        <hr class="my-4 lineas-horizontales">
        
        <!-------Primera fila ------->
        <div class="row my-3">
            <!-- Imagen 1 -->
            <div class="col-md-4 col-sm-12"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/imagen-1.jpg" data-fancybox="gallery" data-caption="">
            <img class="img-fluid img-galeria" src="<?php echo get_stylesheet_directory_uri(); ?>/img/imagen-1.jpg"></a></div>
            
            <!-- Imagen 2 -->
            <div class="col-md-4 col-sm-12"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/imagen-2.jpg" data-fancybox="gallery" data-caption="">
            <img class="img-fluid img-galeria" src="<?php echo get_stylesheet_directory_uri(); ?>/img/imagen-2.jpg"></a></div>
            
            <!-- Imagen 3 -->
            <div class="col-md-4 col-sm-12"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/imagen-3.jpg" data-fancybox="gallery" data-caption="">
            <img class="img-fluid img-galeria" src="<?php echo get_stylesheet_directory_uri(); ?>/img/imagen-3.jpg"></a></div>
        </div>

        <!------- Segunda fila ------->
        <div class="row">
            <!-- Imagen 1 -->
            <div class="col-md-6 col-sm-12"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/imagen-4.jpg" data-fancybox="gallery" data-caption="">
            <img class="img-fluid img-galeria" src="<?php echo get_stylesheet_directory_uri(); ?>/img/imagen-4.jpg"></a></div>

            <!-- Imagen 2 -->
            <div class="col-md-6 col-sm-12"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/imagen-5.jpg" data-fancybox="gallery" data-caption="">
            <img class="img-fluid img-galeria" src="<?php echo get_stylesheet_directory_uri(); ?>/img/imagen-5.jpg"></a></div>
        </div>

        <!------- Tercera fila ------->
        <div class="row mt-3">
            <!-- Imagen 1 -->
            <div class="col-md-6 col-sm-12"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/imagen-6.jpg" data-fancybox="gallery" data-caption="">
            <img class="img-fluid img-galeria" src="<?php echo get_stylesheet_directory_uri(); ?>/img/imagen-6.jpg"></a></div>
            
            <!-- Imagen 2 -->
            <div class="col-md-6 col-sm-12"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/imagen-7.jpg" data-fancybox="gallery" data-caption="">
            <img class="img-fluid img-galeria" src="<?php echo get_stylesheet_directory_uri(); ?>/img/imagen-7.jpg"></a></div>

        </div>
    </div>
</section>


<?php get_footer(); ?>

