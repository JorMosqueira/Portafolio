<?php
/*
Template Name: Noticias
*/
?>

<?php get_header(); ?>


<!-- SLIDER DINÁMICO -->
<?php
echo do_shortcode('[smartslider3 slider="5"]');
?>

<!-- NOTICIAS DESTACADAS  -->
<section class="seccion-separador">
    <div class="container col-md-10">
        <h2 class="titulos-negro">Noticias destacadas</h2>
        <hr class="mb-5 lineas-horizontales">
        <?php if (have_posts()) : ?>
        <?php query_posts("category_name=noticias-destacadas&showposts=2"); ?>
        <?php while (have_posts()) : the_post(2); ?>

            <!-- Estructura noticia destacada -->
            <div class="tarjeta-noticias-destacadas p-0 mb-5">
                <div class="row">
                    <div class="col-md-5 pr-0">
                        <?php the_post_thumbnail('full', array('class' => 'img-fluid img-destacada')); ?>
                    </div>
                    <div class="col-md-7 my-auto noticia-destacada-info">
                        <p class="m-0"><?php the_field('fecha_noticia'); ?></p>
                        <h3 class="titulo-noticia mb-2"><?php the_field('titulo_noticia'); ?></h3>
                        <p class="cuerpo-noticia"><?php the_field('cuerpo_noticia'); ?></p>
                        <a href="<?php the_permalink() ?>" class="btn btn-primary w-25 mt-3 fw-bold py-3" ><?php the_field('boton-noticia'); ?>Leer más</a>
                    </div>
                </div>
            </div>
                
        <?php endwhile; ?>	
        <?php else : ?>  
        <?php endif; ?>
        <?php wp_reset_query(); ?>
            
    </div>
</section>

<!-- ÚLTIMAS NOTICIAS -->
<section class="seccion-separador">
    <div class="row mt-5 mx-0">
        <div class="col-md-10 mx-auto my-4">
            <h2 class="titulos-negro">Últimas noticias</h2>
            <hr class="mb-5 lineas-horizontales">
            <div class="row margen-noticia">
            
                <?php if (have_posts()) : ?>
                <?php query_posts("category_name=ultimas-noticias&showposts=6&paged=$paged"); ?>
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
                <hr class="mb-5 lineas-horizontales">

                    <?php wp_pagenavi(); ?>


                <?php else : ?>  
                <?php endif; ?>
                <?php wp_reset_query(); ?>
            </div>

        </div>
    </div>
</section>




<?php get_footer(); ?>