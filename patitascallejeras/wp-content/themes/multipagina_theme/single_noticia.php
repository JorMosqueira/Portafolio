<?php get_header(); ?>
<div class="container-fluid">
    <!--------------------------------- DATOS ANIMAL --------------------------------->

    <div class="row">
        <div class="col-md-11 mx-auto my-5 noticia">
            <div class="row ">
                        <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>

                            <div class="col-md-7">

                                <?php the_post_thumbnail('full', array('class' => 'h-50 w-100 img-sombra')); ?> <!-- mostarar imagen miniatura -->
                                <h1 class="my-4"><?php the_title(); ?></h1>
                                <div class="row">

                                    <!--------------------------------- ROW ABAJO --------------------------------->

                                        <div class="col-md-4 ">
                                            <span class="borde-noticia"><?php the_field('fecha'); ?></span>
                                        </div>  
                                        <div class="col-md-1"></div>

                                        <div class="col-md-2">

                                            <span class="borde-noticia"><?php the_field('nombre'); ?></span>

                                        </div>
                                        <div class="col-md-1"></div>
                                        <div class="col-md-2">

                                            <span><?php the_field('visitas'); ?></span>

                                        </div>
                                </div>
                                <div class="mt-5">
                                <?php the_field('descripcion-noticia'); ?>

                                </div>
                            </div>
                        <?php endwhile; ?>	
                        <?php else : ?>  
                        <?php endif; ?>
                        <?php wp_reset_query(); ?>

                            <div class="col-md-1"></div>

                    <!--------------------------------- ASIDE --------------------------------->
                            
                            <div class="col-md-4 aside">
                                <hr class="color-naranja mb-4">
                                <h3 class="mb-4">POSTS RECIENTES</h3>
                                    <?php if (have_posts()) : ?>
                                    <?php query_posts("category_name=noticias-inicio&showposts=3"); ?>
                                    <?php while (have_posts()) : the_post(); ?>
                                                        <a href="<?php the_permalink() ?>">

                                                            <h5 class="mb-4"><?php the_title(); ?></h5>
                                                            <hr class="mb-3">
                                                        </a>
                                    <?php endwhile; ?>	
                                    <?php else : ?>  
                                    <?php endif; ?>
                                    <?php wp_reset_query(); ?>

                                <hr class="color-naranja mt-5 mb-4">
                                <h3 class="mb-4">CATEGORIAS</h3>
                                <div class="row">
                                    <div class="col-md-9">
                                        <button class="btn btn-secondary w-25  mb-4">fundación</button><button class="btn btn-secondary w-25 mx-5 mb-4">eventos</button>
                                        <br>
                                        <button class="btn btn-secondary w-25  mb-4">voluntarios</button><button class="btn btn-secondary w-25 mx-5 mb-4">rescates</button>
                                        

                                    </div>
                                </div>



                            </div>





                
            </div>
        </div>

    </div>


    <!--------------------------------- NOTICIAS DEL MOMENTO --------------------------------->

            <div class="row mb-5 ">
                <div class="col-md-11 mx-auto">
                    <div class="row ">
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