<?php
/*
Template Name: Adopcion
*/
?>

<?php get_header(); ?>

<div class="container-fluid">
    <div class="row">
        <div class="banner">
            
            <?php echo do_shortcode('[smartslider3 slider="2"]'); ?>

        </div>
        <div class="col-md-11 mx-auto my-5">
            
            <div class="row mt-5 animales">
                <h2 class="mt-5">ANIMALES EN ADOPCIÓN</h2>
                <hr class="mb-5">
                <?php if (have_posts()) : ?>
                <?php query_posts("category_name=adopcion&showposts=8&paged=$paged"); ?>
                <?php while (have_posts()) : the_post(); ?>
                    <!--------------- CARTA ----------------->
                    <div class="col-md-3 my-5">
                        <div class="carta-adopcion text-center ">
                        <?php the_post_thumbnail('full', array('class' => 'img-fluid w-100')); ?> <!-- mostarar imagen miniatura -->

                        <h3 class="my-3 titulo-adopcion"><?php the_title(); ?></h3>

                        <p><?php the_field('iconos-adopcion'); ?></p>

                        <?php the_content(); ?>
                        <a href="<?php the_permalink() ?>" class="btn btn-danger w-50 mb-4 "><p><?php the_field('boton-adopcion'); ?></p></a>

                        </div>
                    </div>

                <?php endwhile; ?>	
                <div class="col-md-12 mx-auto empaginado mt-4">
                        <?php wp_pagenavi(); ?>

                </div>
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