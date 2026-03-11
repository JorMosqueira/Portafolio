<?php
/*
Template Name: Legalidad
*/
?>
<?php get_header(); ?>
<div class="container-fluid">
    <div class="row">
    <?php
            echo do_shortcode('[smartslider3 slider="4"]');
            ?>
        <div class="col-md-10 mx-auto my-5 legalidad">
            <h1 class="mt-5">Detalles de legalidad</h1>
            <hr>
            <!-- ------------------------- REQUISITOS DE ADOPCION --------------------- -->
            <div class="row my-5">
                        <?php if (have_posts()) : ?>
                        <?php query_posts("category_name=requisitos-adopcion"); ?>
                        <?php while (have_posts()) : the_post(); ?>
                        
                            <div class="col-md-5">
                                <h3 class="my-5"><?php the_title(); ?></h3>
                                <p class="mb-5"><?php the_content(); ?></p>
                                <?php the_field('legalidad-punto1'); ?>
                                <?php the_field('legalidad-punto2'); ?>
                                <?php the_field('legalidad-punto3'); ?>
                                <?php the_field('legalidad-punto4'); ?>

                            </div>
                            <div class="col-md-1"></div>
                            <div class="col-md-6">
                                <?php the_post_thumbnail('full', array('class' => 'img-fluid w-100 mb-4')); ?> <!-- mostarar imagen miniatura -->
                                <?php the_field('bajada-titulo'); ?>
                            </div>



                        <?php endwhile; ?>	
                        <?php else : ?>  
                        <?php endif; ?>
                        <?php wp_reset_query(); ?>
            </div>
            <!-- ------------------------- REQUISITOS DE VOLUNTARIADO --------------------- -->
            </div>
        </div>
    </div>
    <div class="row voluntariado">
        <div class="col-md-10 mx-auto my-5 legalidad">

            <div class="row my-5 ">
                        <?php if (have_posts()) : ?>
                        <?php query_posts("category_name=requisitos-voluntariado"); ?>
                        <?php while (have_posts()) : the_post(); ?>

                            <div class="col-md-6">
                                <?php the_post_thumbnail('full', array('class' => 'img-fluid w-100 mb-4')); ?> <!-- mostarar imagen miniatura -->
                            </div>
                            <div class="col-md-1"></div>
                            <div class="col-md-5">
                                <h3 class="my-5"><?php the_title(); ?></h3>
                                <p class="mb-5"><?php the_content(); ?></p>
                                <?php the_field('legalidad-punto1'); ?>
                                <?php the_field('legalidad-punto2'); ?>
                                <?php the_field('legalidad-punto3'); ?>
                                <?php the_field('legalidad-punto4'); ?>

                            </div>


                        <?php endwhile; ?>	
                        <?php else : ?>  
                        <?php endif; ?>
                        <?php wp_reset_query(); ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10 mx-auto my-5 legalidad">

            <!-- ------------------------- REQUISITOS DE DONANTES --------------------- -->
            <div class="row my-5">
                        <?php if (have_posts()) : ?>
                        <?php query_posts("category_name=requisitos-donantes"); ?>
                        <?php while (have_posts()) : the_post(); ?>
                        
                            <div class="col-md-5">
                                <h3 class="my-5"><?php the_title(); ?></h3>
                                <p class="mb-5"><?php the_content(); ?></p>
                                <?php the_field('legalidad-punto1'); ?>
                                <?php the_field('legalidad-punto2'); ?>
                                <?php the_field('legalidad-punto3'); ?>
                                <?php the_field('legalidad-punto4'); ?>

                            </div>
                            <div class="col-md-1"></div>
                            <div class="col-md-6">
                                <?php the_post_thumbnail('full', array('class' => 'img-fluid w-100 mb-4')); ?> <!-- mostarar imagen miniatura -->
                                <?php the_field('bajada-titulo'); ?>
                            </div>



                        <?php endwhile; ?>	
                        <?php else : ?>  
                        <?php endif; ?>
                        <?php wp_reset_query(); ?>
            </div>
            <!-- ------------------------- REQUISITOS DE VOLUNTARIADO --------------------- -->
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