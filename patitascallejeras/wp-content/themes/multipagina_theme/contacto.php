
<!-- Conectar pagina de wordpress con una pagina template de php ++++++++++++++++++ -->
<?php
/*
Template Name: Contacto
*/
?>


<?php get_header(); ?>

<div class="container-fluid padding-cero">
    <div class="row">

    <div class="banner">
            
        <?php
        echo do_shortcode('[smartslider3 slider="4"]');
        ?>
        
    </div>
        <div class="col-md-10 mx-auto my-5">
            <div class="row py-4 contacto">
                
                    <?php if (have_posts()) : ?>
                    <?php query_posts("category_name=contacto"); ?>
                    <?php while (have_posts()) : the_post(); ?>

                        <div class="col-md-1"></div>

                        <div class="col-md-4 ">

                            <h1 class="text-start my-4"><?php the_title(); ?></h1>
                            <?php the_content(); ?>

                            <hr class="my-4">
                                <?php the_field('telefono'); ?>

                                <?php the_field('correo'); ?>

                                <?php the_field('direccion'); ?>


                        </div>
                        <div class="col-md-1"></div>

                        <div class="col-md-6 formulario p-5">
                            <?php the_field('formulario'); ?>
                        </div>

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