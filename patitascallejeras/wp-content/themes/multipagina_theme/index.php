<?php
/*
Template Name: Inicio
*/
?>

<?php get_header(); ?>


<div class="container-fluid">
    <!--------------------------------------- SLIDER ------------------------------------->
    <div class="row">
        <div class="banner">
            <?php
                echo do_shortcode('[smartslider3 slider="5"]');
                ?>
        </div>

    </div>
    <div class="row">
        <div class="col-md-11 mx-auto my-4">
            <div class="row">

    <!--------------------------------------- ADOPCIONES ------------------------------------->

                <h1 class="text-center my-4">Animales en Adopción</h1>
                <hr class="mb-5">
                <?php if (have_posts()) : ?>
                <?php query_posts("category_name=adopcion-inicio&showposts=4"); ?>
                <?php while (have_posts()) : the_post(); ?>

                    <!--------------- CARTA ----------------->
                    <div class="col-md-3 mb-5">
                        <div class="carta-adopcion text-center ">
                        <?php the_post_thumbnail('full', array('class' => 'img-fluid w-100')); ?> <!-- mostarar imagen miniatura -->

                        <h3 class="my-3 titulo-adopcion"><?php the_title(); ?></h3>

                        <p><?php the_field('iconos-adopcion'); ?></p>

                        <?php the_content(); ?>
                        <a href="<?php the_permalink() ?>" class="btn btn-danger w-50 mb-4 " ><p><?php the_field('boton-adopcion'); ?></p></a>

                        </div>
                    </div>

                <?php endwhile; ?>	
                <?php else : ?>  
                <?php endif; ?>
                <?php wp_reset_query(); ?>
            
            </div>
        </div>
    </div>
    <!--------------------------------- SECCION APORTA TU GRANITO DE ARENA--------------------------------->
    <div class="row granito py-5 my-5">
        <div class="col-md-11 mx-auto my-4">
                <?php if (have_posts()) : ?>
                <?php query_posts("category_name=seccion-granito"); ?>
                <?php while (have_posts()) : the_post(); ?>
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-5 text-light">

                            <h1 class="mb-5"><?php the_title(); ?></h3>
                            <p class="mb-5"><?php the_content(); ?></p>
                            <a href="<?php the_permalink() ?>" class="btn btn-danger my-5 pt-3"><p><?php the_field('boton-aportatugranito'); ?></p></a>

                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-md-5">

                        <?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?> <!-- mostarar imagen miniatura -->

                        </div>

                    </div>
                <?php endwhile; ?>	
                <?php else : ?>  
                <?php endif; ?>
                <?php wp_reset_query(); ?>
        </div>
    </div>

    <!--------------------------------- NOTICIAS DEL MOMENTO --------------------------------->
    <div class="container mx-auto">
            <div class="row mx-auto">
                <h1 style="color: #2D2D2D;" class=" text-center mt-5 fw-bold">Noticias del Momento</h1>
                <hr class="mt-5 mb-4">
                <?php if (have_posts()) : ?>
                <?php query_posts("category_name=noticias-inicio&showposts=6"); ?>
                <?php while (have_posts()) : the_post(); ?>

                    <div class="col-md-4 mx-auto carta-noticia mt-5 ">
                        <a href="<?php the_permalink() ?>">
                            <div class="row ">
                                <div class="col-md-9 mx-auto mt-5">
                                    <?php the_post_thumbnail('full', array('class' => 'img-fluid imagen-noticia mx-auto img-center')); ?> 
                                    <h1 class="text-center text-uppercase mt-3"><?php the_title(); ?></h3>
                                    <p class="text-center"><?php the_content('full', array('class' => 'text-uppercase')); ?></p>
                                    
                                </div>
                              <!--   <div class="col-md-8 text-center p-5">
                                    
                                </div> -->
                            </div>
                        </a>
                    </div>

                <?php endwhile; ?>	
                <?php else : ?>  
                <?php endif; ?>
                <?php wp_reset_query(); ?>
            </div>
        </div>
        <!--------------------------------- SECCION QUIERES SER VOLUNTARIO --------------------------------->
    <div class="row voluntario py-5 mt-5">
        <div class="col-md-11 mx-auto my-4">
                <?php if (have_posts()) : ?>
                <?php query_posts("category_name=seccion-voluntariado"); ?>
                <?php while (have_posts()) : the_post(); ?>
                    <div class="row">
                        <div class="col-md-5">
                        <?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?> <!-- mostarar imagen miniatura -->

                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-md-5 text-light">


                            <h3 class="mb-5"><?php the_title(); ?></h3>
                            <p class="mb-5"><?php the_content(); ?></p>
                            <a href="<?php the_permalink() ?>" class="btn btn-danger my-5 pt-3" ><p><?php the_field('boton-aportatugranito'); ?></p></a>

                        </div>
                        <div class="col-md-1"></div>


                    </div>
                <?php endwhile; ?>	
                <?php else : ?>  
                <?php endif; ?>
                <?php wp_reset_query(); ?>
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