<?php
/*
Template Name: Voluntariado
*/
?>

<?php get_header(); ?>
<div class="container-fluid">
    <div class="row">

        <div class="banner">
            
        <?php
            echo do_shortcode('[smartslider3 slider="6"]');
            ?>
            
        </div>
    </div>
    <div class="row seccion-fundacion mb-5">

        <div class="col-md-10 mx-auto">
            <div class="row">
                <?php if (have_posts()) : ?>
                <?php query_posts("category_name=seccion-fundacion&showposts=1"); ?>
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
    <div class="row mb-5">
        <div class="col-md-11 mx-auto my-5">
            <div class="row texto-voluntario">
                        <?php if (have_posts()) : ?>
                        <?php query_posts("category_name=voluntariado"); ?>
                        <?php while (have_posts()) : the_post(); ?>

                        <div class="col-md-5">
                            <?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?> <!-- mostarar imagen miniatura -->

                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-md-6">
                        <h1 class="mb-5"><?php the_title(); ?></h1>

                        <?php the_content(); ?> <!-- llamado de contenido -->

                        </div>

                        <?php endwhile; ?>	
                        <?php else : ?>  
                        <?php endif; ?>
                        <?php wp_reset_query(); ?>
            </div>

        <!--------------------------------- TAREAS DE VOLUNTARIADO --------------------------------->

            <div class="row mt-5">
                <h1 class="text-center mt-5">Tareas de Voluntariado</h1>
                <hr class="my-5">
                        <?php if (have_posts()) : ?>
                        <?php query_posts("category_name=tareas&showposts=4"); ?>
                        <?php while (have_posts()) : the_post(); ?>

                        <div class="col-md-3 text-center borde-voluntario">
                            <?php the_post_thumbnail('full', array('class' => 'img-fluid w-100')); ?> <!-- mostarar imagen miniatura -->
                            <h3 class="my-4"><?php the_title(); ?></h3>
                            <?php the_content(); ?> <!-- llamado de contenido -->

                        </div>

                        <?php endwhile; ?>	
                        <?php else : ?>  
                        <?php endif; ?>
                        <?php wp_reset_query(); ?>

            </div>
        </div>

    </div>

    <!--------------------------------- FORMULARIO DE INSCRIPCION --------------------------------->


    <div class="row inscripcion">
        <div class="col-md-11 mx-auto p-5">
            <h1 class="text-center mt-5 text-light">Formulario de Inscripción</h1>
            <div class="row my-5">
                        <?php if (have_posts()) : ?>
                        <?php query_posts("category_name=inscripcion"); ?>
                        <?php while (have_posts()) : the_post(); ?>

                            <div class="col-md-1"></div>
                            <div class="col-md-5">

                            <?php the_field('inscripcion'); ?>

                            </div>
                            <div class="col-md-1"></div>
                            <div class="col-md-4 text-light text-center">
                            <h3 class="my-4"><?php the_title(); ?></h3>
                            <p><?php the_content(); ?></p>
                            
                            <a href="<?php the_permalink() ?>" class="btn btn-danger my-5 p-2 w-100" ><p><?php the_field('boton-aportatugranito'); ?></p></a>

                            </div>
                            <div class="col-md-1"></div>

                        <?php endwhile; ?>	
                        <?php else : ?>  
                        <?php endif; ?>
                        <?php wp_reset_query(); ?>
            </div>
        </div>
    </div>


    <!--------------------------------- CASOS DE EXITO --------------------------------->
    <div class="container mx-auto">
            <div class="row mx-auto">
                <h1 style="color: #2D2D2D;" class=" text-center mt-5 fw-bold">CASOS DE EXITO</h1>
                <hr class="mt-5 mb-4">
                <?php if (have_posts()) : ?>
                <?php query_posts("category_name=casos-exito&showposts=4"); ?>
                <?php while (have_posts()) : the_post(); ?>

                    <div class="col-md-5 mx-auto carta-noticia mt-5 ">
                        
                            <div class="row ">
                                <div class="col-md-9 mx-auto mt-5">
                                    <?php the_post_thumbnail('full', array('class' => 'img-fluid imagen-noticia mx-auto img-center w-100')); ?> 
                                    <h1 class="text-center text-uppercase mt-3"><?php the_title(); ?></h3>
                                    <p class="text-center"><?php the_content('full', array('class' => 'text-uppercase')); ?></p>
                                    <h5 class="my-5"><?php the_field('asombrate'); ?></h5>
                                </div>
                              <!--   <div class="col-md-8 text-center p-5">
                                    
                                </div> -->
                            </div>
                    
                    </div>

                <?php endwhile; ?>	
                <?php else : ?>  
                <?php endif; ?>
                <?php wp_reset_query(); ?>
            </div>
        </div>   

            <!--------------------------------- SECCION ECONOMICA --------------------------------->
    <div class="row economica py-5 mt-5">
        <div class="col-md-11 mx-auto my-4">
                <?php if (have_posts()) : ?>
                <?php query_posts("category_name=seccion-economica"); ?>
                <?php while (have_posts()) : the_post(); ?>
                    <div class="row">
                    <div class="col-md-1"></div>

                        <div class="col-md-5 text-end">

                        <h3 class="mb-5"><?php the_title(); ?></h3>
                        <p class="mb-5"><?php the_content(); ?></p>
                        <a href="<?php the_permalink() ?>" class="btn btn-danger my-5 p-2 w-100" ><p><?php the_field('boton-aportatugranito'); ?></p></a>


                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-md-5">


                        <?php the_post_thumbnail('full', array('class' => 'img-fluid img-economica')); ?> <!-- mostarar imagen miniatura -->

                        </div>


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