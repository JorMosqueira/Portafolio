<?php
/*
Template Name: Fundacion
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
        <div class="col-md-10 mx-auto my-5">
            <div class="row fundacion my-5">

                <!-- ---------------------PRIMERA INFO------------------- -->
                <?php if (have_posts()) : ?>
                <?php query_posts("category_name=fundacion"); ?>
                <?php while (have_posts()) : the_post(); ?>
                    <div class="col-md-5 mb-5">
                    <?php the_post_thumbnail('full', array('class' => 'img-fluid w-100')); ?> <!-- mostarar imagen miniatura -->

                    </div>
                    <div class="col-md-5 mb-5">

                    <h2 class=" mb-5"><?php the_title(); ?></h2>
                    <?php the_content(); ?>

                    </div>


                <?php endwhile; ?>	
                <?php else : ?>  
                <?php endif; ?>
                <?php wp_reset_query(); ?>
                
                <!-- ---------------------SEGUNDA INFO------------------- -->

                <?php if (have_posts()) : ?>
                <?php query_posts("category_name=fundacion2"); ?>
                <?php while (have_posts()) : the_post(); ?>
                    <div class="col-md-5 my-5">

                    <h2 class="mb-5 text-end"><?php the_title(); ?></h2>
                    <?php the_content(); ?>
                    </div>
                    <div class="col-md-5 my-5">

                    <?php the_post_thumbnail('full', array('class' => 'img-fluid w-100 segunda-foto')); ?> <!-- mostarar imagen miniatura -->

                    </div>


                <?php endwhile; ?>	
                <?php else : ?>  
                <?php endif; ?>
                <?php wp_reset_query(); ?>
            </div>
        </div>
    </div>
    <div class="row seccion-fundacion mb-5">

        <div class="col-md-10 mx-auto">
            <div class="row">
                <?php if (have_posts()) : ?>
                <?php query_posts("category_name=seccion-fundacion&showposts=1&offset=1"); ?>
                <?php while (have_posts()) : the_post(); ?>
                    <div class="col-md-6 p-5 d-flex align-items-center borde-fundacion">
                        <?php the_content(); ?>

                    </div>
                    <div class="col-md-6 p-5 color-naranja">
                    <?php the_field('seccion-fundacion'); ?>
                    </div>

                <?php endwhile; ?>	
                <?php else : ?>  
                <?php endif; ?>
                <?php wp_reset_query(); ?>
            </div>


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

        
    <div class="row colaboradores mt-5 p-5">
        <div class="col-md-11 mx-auto">
            <div class="row">
                <h1 class="text-center mb-5">COLABORADORES</h1>
                <?php if (have_posts()) : ?>
                <?php query_posts("category_name=colaboradores"); ?>
                <?php while (have_posts()) : the_post(); ?>
                    <div class="col-md-2"></div>

                    <div class="col-md-2">
                    <img src="<?php the_field('colaborador1'); ?>" alt="" class="img-fluid">
                    </div>

                    <div class="col-md-2">
                        <img src="<?php the_field('colaborador2'); ?>" alt="" class="img-fluid">
                    

                    </div>

                    <div class="col-md-2">

                    <img src="<?php the_field('colaborador3'); ?>" alt="" class="img-fluid">
                    

                    </div>

                    <div class="col-md-2">
                    <img src="<?php the_field('colaborador4'); ?>" alt="" class="img-fluid">
                    </div>

                    <div class="col-md-2"></div>


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