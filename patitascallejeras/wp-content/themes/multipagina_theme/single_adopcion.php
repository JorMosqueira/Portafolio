<?php get_header(); ?>
<div class="container-fluid">
    <!--------------------------------- DATOS ANIMAL --------------------------------->

    <div class="row my-5">
        <div class="col-md-11 mx-auto my-5">
            <div class="row info">
                        <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>

                            <div class="col-md-4">

                                <?php the_post_thumbnail('full', array('class' => 'img-fluid w-100')); ?> <!-- mostarar imagen miniatura -->

                            </div>

                            <div class="col-md-1"></div>

                            <div class="col-md-7">
                                <h1 class="mb-5"><?php the_title(); ?></h1>
                                <hr>
                                <div class="row">
                                    <h2 class="my-4">Caracteristicas</h2>

                                    <div class="col-md-3">

                                        <?php the_field('caracteristicas-col1'); ?>

                                    </div>
                                    <div class="col-md-2"></div>
                                    <div class="col-md-4">

                                        <?php the_field('caracteristicas-col2'); ?>

                                    </div>
                                </div>
                                <hr>



                                <div class="row">
                                    <div class="col-md-12">
                                    <h4 class="my-4">Descripción</h4>
                                    <?php the_field('descripcion'); ?>

                                    </div>
                                </div>
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
            <h1 class="text-center mt-5 text-light">Formulario de Adopción</h1>
            <hr class="my-3 linea-formulario">
            <div class="row my-5">
                        <?php if (have_posts()) : ?>
                        <?php query_posts("category_name=formulario-adopcion"); ?>
                        <?php while (have_posts()) : the_post(); ?>

                            <div class="col-md-1"></div>
                            <div class="col-md-4 text-light text-center">

                            <h3 class="my-4"><?php the_title(); ?></h3>
                            <p><?php the_content(); ?></p>
                            
                            <a href="<?php the_permalink() ?>" class="btn btn-danger my-5 p-2 w-100"><p><?php the_field('boton-aportatugranito'); ?></p></a>


                            </div>
                            <div class="col-md-2"></div>
                            <div class="col-md-4 ">

                            <?php the_field('inscripcion'); ?>

                            </div>
                            <div class="col-md-1"></div>

                        <?php endwhile; ?>	
                        <?php else : ?>  
                        <?php endif; ?>
                        <?php wp_reset_query(); ?>
            </div>
        </div>
    </div>

            <!--------------------------------- SECCION ECONOMICA --------------------------------->
    <div class="row economica py-5 ">
        <div class="col-md-11 mx-auto my-4">
                <?php if (have_posts()) : ?>
                <?php query_posts("category_name=seccion-economica"); ?>
                <?php while (have_posts()) : the_post(); ?>
                    <div class="row">
                    <div class="col-md-1"></div>

                        <div class="col-md-5 text-end">

                        <h3 class="mb-5"><?php the_title(); ?></h3>
                        <p class="mb-5"><?php the_content(); ?></p>
                        <a href="<?php the_permalink() ?>" class="btn btn-danger my-5 p-2 w-100" data-bs-toggle="modal" data-bs-target="#exampleModal"><p><?php the_field('boton-aportatugranito'); ?></p></a>


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