<?php get_header(); ?>
<div class="container-fluid">
    <!--------------------------------- DATOS ANIMAL --------------------------------->

    <div class="row my-5">
        <div class="col-md-11 mx-auto my-5">
            <div class="row info">
                        <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>

                            <div class="col-md-4 imagen-single">

                                <?php the_post_thumbnail('full', array('class' => 'img-fluid w-100')); ?> <!-- mostarar imagen miniatura -->

                            </div>

                            <div class="col-md-1"></div>

                            <div class="col-md-7">
                                <h1 class="mb-5"><?php the_title(); ?></h1>
                                <hr>
                                <div class="row">
                                    <h2 class="my-4">Descripción</h2>

                                    <div class="col-md-11">

                                    <span class=""><?php the_content(); ?></span>

                                    </div>

                                </div>
                                <hr>

                                <div class="row">
                                    <div class="col-md-12">
                                    <h4 class="my-4">Experiencia y reflexiones</h4>

                                        <?php the_field('experiencia'); ?>

                                    </div>
                                </div>
                            </div>

                                <!--------------------------------- FANCYBOX --------------------------------->
                            <div class="row my-5">
                                <div class="col-md-10 mx-auto ">
                                    <h1 class="my-5 text-center">Imagenes de demostración</h1>
                                    <div class="row borde-proyecto ">
                                        <div class="col-md-3 p-0">
                                            <a href="<?php the_field('imagen1'); ?>" data-fancybox="gallery" data-caption="Descripcion generica'"><img class="img-fluid borde-responsive" src="<?php the_field('imagen1'); ?>"></a>
                                        </div>
                                        <div class="col-md-3 p-0">
                                            <a href="<?php the_field('imagen2'); ?>" data-fancybox="gallery" data-caption="Descripcion generica'"><img class="img-fluid borde-responsive" src="<?php the_field('imagen2'); ?>"></a>
                                        </div>
                                        <div class="col-md-3 p-0">
                                            <a href="<?php the_field('imagen3'); ?>" data-fancybox="gallery" data-caption="Descripcion generica'"><img class="img-fluid borde-responsive" src="<?php the_field('imagen3'); ?>"></a>
                                        </div>
                                        <div class="col-md-3 p-0">
                                            <a href="<?php the_field('imagen4'); ?>" data-fancybox="gallery" data-caption="Descripcion generica'"><img class="img-fluid borde-responsive" src="<?php the_field('imagen4'); ?>"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-10 mx-auto">
                                    <div class="row">
                                        <h1 class="my-5 text-center">Video sobre el sitio</h1>
                                        <?php the_field('video-proyecto'); ?>
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

    <div class="row seccion-aside">
        <div class="col-md-12 mx-auto my-4">
            <h1 class="text-center mb-5">Más proyectos</h1>
            <div class="row">

                    <?php if (have_posts()): ?>
                    <?php query_posts("showposts=3&category_name=proyectos"); ?>
                    <?php while (have_posts()): the_post(); ?>
                        
                            <div class="col-md-4 text-center">
                                <div class="tarjeta-aside">
                                <a href="<?php the_permalink() ?>">

                                <?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?>
                                <h4 class=" mx-auto mt-3"><?php the_title(); ?></h4>
                                <span class=" mx-auto span-aside"><?php the_excerpt(); ?></span>    
                                </a>
                                </div>
      
                            </div>

                    <?php endwhile; ?>
                    <?php else: ?>
                    <?php endif; ?>
                    <?php wp_reset_query(); ?>
            </div>
        </div>
    </div>
</div>



<?php get_footer(); ?>