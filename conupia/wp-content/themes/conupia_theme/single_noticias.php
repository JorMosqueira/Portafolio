
<?php
/*
Template Name: Noticia Single
*/
?>

<?php get_header(); ?>

<section class="seccion-separador">
    <div class="container col-md-10 mx-auto">
        <div class="row">
            <!-- Noticia principal -->
            <div class="col-md-7">
                <h2 class="mb-0 single-titulo"><?php the_field('titulo_noticia'); ?></h2>
                <p class="mb-4 single-fecha"><?php the_field('fecha_noticia'); ?></p>
                <?php the_post_thumbnail('full', array('class' => 'img-fluid w-100 imagen-noticia mb-3')); ?>
                <h4 class="my-4 single-bajada"><?php the_field('bajada_noticia'); ?></h4>
                <p class="mb-5 single-cuerpo"><?php the_field('cuerpo_noticia'); ?></p>
                
                <?php if( get_field('imagen-adicional') ): ?>
                    <img src="<?php the_field('imagen-adicional'); ?>" />
                <?php endif; ?>
            </div>
            <div class="col-md-1"></div>
            
            <!-- Noticias Recomendadas -->
            <div class="col-md-4">
                <h4 class="mb-4 aside-categoria">Últimas noticias</h4>
                <?php if (have_posts()) : ?>
                <?php query_posts("category_name=ultimas-noticias&showposts=4"); ?>
                <?php while (have_posts()) : the_post(2); ?>

                    <!-- Estructura noticias -->
                    <div class="row">
                        <a class="aside-link mb-3" href="<?php the_permalink() ?>"><h3 class="aside-titulo"><?php the_field('titulo_noticia'); ?></h3></a>
                        <hr>
                    </div>

                <?php endwhile; ?>	
                <?php else : ?>  
                <?php endif; ?>
                <?php wp_reset_query(); ?>
            </div>
        </div>
        <hr class="lineas-horizontales">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-3">
                    <h5 class="text-left"><?php previous_post_link(' %link','&laquo Anterior','1') ?></h5>
                    </div>
                    <div class="col-md-3">
                    <h5 class="text-right"><?php next_post_link('%link ','Siguiente &raquo','1') ?></h5>
                    </div>
                </div>
            </div>
            


        </div>
    </div>
</section>

<?php get_footer(); ?>