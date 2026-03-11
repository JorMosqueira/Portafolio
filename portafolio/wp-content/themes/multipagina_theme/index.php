<?php
/*
Template Name: Inicio
*/
?>

<?php get_header(); ?>



<!-- ----------------------------------- TARJETA DE PRESENTACION --------------------------------------------- -->
<div class="container-fluid mb-5">
    <div class="row ">
        <?php
        echo do_shortcode('[smartslider3 slider="2"]');
        ?>
    </div>
</div>
<section class="container-fluid">
    <div class="row ">
        <div class="col-md-11 mx-auto my-5">
                <div class="row">
                    <div class="col-md-3 my-auto mx-auto">
                        <hr class="border-2 opacity-100">
                    </div>
                    <div class="col-md-4 mx-auto">
                        <h2 class="text-center">Conoce sobre mí</h2>
                    </div>
                    <div class="col-md-3 my-auto mx-auto">
                        <hr class="border-2 opacity-100">
                    </div>
                </div>
        </div>
    </div>
    <div class="row my-5">
        <div class="col-md-8 mx-auto ">
            <div class="row tarjeta-presentacion">
                <div class="col-lg-5 p-0 col-md-12">
                    <img class="foto w-100 h-100" src="<?php echo get_stylesheet_directory_uri(); ?>/img/jorge.jpg">
                </div>
                <div class="col-lg-7 col-md-12">
                    <div class="row ">
                        <div class="col-md-12 fondo-rojo text-white">
                            <h1>Jorge Mosqueira Aguayo</h1>
                            <h2>Desarrollador y diseñador web</h2>
                        </div>
                        <div class="col-md-12">
                            <p class="my-5 text-start">Hola! Soy Jorge Mosqueira, me dedico a crear sitios web a medida de las exigencias de los clientes con los que trabajo, me desempeño en el apartado de investigación, grafico y desarrollo de código de los sitios web</p>
                            <p class="my-5 text-start">Me caracterizo por ser una persona reservada pero amable y cordial con el trato, también tengo una personalidad proactiva y me gusta aprender distintas cosas. Me gusta diseñar y enfocarme en el trabajo riguroso pero por sobre todo me gusta "Crear".</p>
                            <p class="my-5 text-start">Me gusta crear diseños y programar sitios webs, me gusta hacer plantillas graficas, me gusta componer música, me gusta editar videos y me gusta hacer muchas más cosas. Siempre trato de darle un toque propio a trabajos o proyectos que tengo que hacer, ya sea por encargo o por iniciativa propia</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ----------------------------------- VIDEO PRESENTACION --------------------------------------------- -->
    <div class="row mt-5 ">
        <div class="col-md-9 mx-auto my-5">
            <div class="row mb-5">
                        <div class="col-md-3 my-auto mx-auto">
                        <hr class="border-2 opacity-100">
                    </div>
                    <div class="col-md-4 mx-auto">
                        <h2 class="text-center">Video presentación</h2>
                    </div>
                    <div class="col-md-3 my-auto mx-auto">
                        <hr class="border-2 opacity-100">
                    </div>
            </div>
            <div class="row my-5 ">
                    <?php if (have_posts()): ?>
                    <?php query_posts("showposts=1&category_name=video"); ?>
                    <?php while (have_posts()): the_post(); ?>

                        <?php the_field('video'); ?>


                    <?php endwhile; ?>
                    <?php else: ?>
                    <?php endif; ?>
                    <?php wp_reset_query(); ?>
                

            </div>
        </div>
    </div>
</section>

<section class="container-fluid seccion-servicios" id="servicios">
<!-- ----------------------------------- SERVICIOS --------------------------------------------- -->
    <div class="row mt-5">
        <div class="col-md-11 mx-auto my-5">
            <div class="row">
                    <div class="col-md-3 my-auto mx-auto">
                        <hr class="border-2 opacity-100">
                    </div>
                    <div class="col-md-4 mx-auto">
                        <h2 class="text-center">Servicios</h2>
                    </div>
                    <div class="col-md-3 my-auto mx-auto">
                        <hr class="border-2 opacity-100">
                    </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-11 mx-auto my-4">
            <div class="row">
                <!-- ----------- TARJETA DE SERVICIO ---------- -->
                    <?php if (have_posts()): ?>
                    <?php query_posts("showposts=6&category_name=servicios"); ?>
                    <?php while (have_posts()): the_post(); ?>

                        <div class="col-md-4 mb-5">
                            <div class="tarjeta-servicio">
                                <?php the_post_thumbnail('full', array('class' => 'img-fluid text-center mx-auto')); ?>
                                <h4 class="borde-rojo text-center mx-auto my-3"><?php the_title(); ?></h4>
                                <span class="text-center mx-auto"><?php the_content(); ?></span>
                            </div>
                        </div>

                    <?php endwhile; ?>
                    <?php else: ?>
                    <?php endif; ?>
                    <?php wp_reset_query(); ?>

            </div>
        </div>
    </div>
</section>

<!-- ----------------------------------- EN QUE ME DESEMPEÑO --------------------------------------------- -->

<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 mx-auto my-4">
            <div class="row">
                    <div class="col-md-3 my-auto mx-auto">
                        <hr class="border-2 opacity-100">
                    </div>
                    <div class="col-md-4 mx-auto">
                        <h2 class="text-center">En que me desempeño</h2>
                    </div>
                    <div class="col-md-3 my-auto mx-auto">
                        <hr class="border-2 opacity-100">
                    </div>
            </div>
            <div class="row mt-5">
                <p class="text-center mb-5">Aquí puedes ver las herramientas y conocimientos que tengo</span>
                <div class="col-md-5">
                    <h3 class="text-center">Conocimientos</h3>
                        <div class="espacio-conocimientos">

                                <img class="img-fluid " src="<?php echo get_stylesheet_directory_uri(); ?>/img/html.png">

                                <img class="img-fluid " src="<?php echo get_stylesheet_directory_uri(); ?>/img/css.png">
   
                                <img class="img-fluid " src="<?php echo get_stylesheet_directory_uri(); ?>/img/js.png">

                                <img class="img-fluid " src="<?php echo get_stylesheet_directory_uri(); ?>/img/php.png">

                        </div>
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-5">
                    <h3 class="text-center responsive-herramientas">Herramientas</h3>
                    <div class="espacio-conocimientos">

                    <img class="img-fluid " src="<?php echo get_stylesheet_directory_uri(); ?>/img/xd.png">
                        
                        <img class="img-fluid " src="<?php echo get_stylesheet_directory_uri(); ?>/img/ai.png">

                        <img class="img-fluid " src="<?php echo get_stylesheet_directory_uri(); ?>/img/figma.png">

                        <img class="img-fluid " src="<?php echo get_stylesheet_directory_uri(); ?>/img/wordpress.png">

                        <img class="img-fluid " src="<?php echo get_stylesheet_directory_uri(); ?>/img/vegas.png">

                    </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid banner-servicios my-5">
    <div class="row">
        <div class="col-md-10 mx-auto my-3">
                        <div class="row text-white">
                            <div class="col-md-5">
                                <h3>Brindo mis servicios en la ayuda para adaptarte a el mundo de la web</h3>
                            </div>
                            <div class="col-md-1 borde-blanco"></div>
                            <div class="col-md-5 responsive-banner">
                                <span>Me dedico  ayudar a pequeñas y grandes empresas a que den  el salto a la web, de esta manera expandiendo su alcance a la gente</span>
                                <h4>Construyo a la medida de tus requerimientos</h4>
                            </div>
                        </div>
        </div>  
    </div>
</div>

<!-- ----------------------------------- TARJETAS PROYECTOS --------------------------------------------- -->

<section class="container-fluid margen-seccion" id="proyectos">
    <div class="row">
        <div class="col-md-9 mx-auto my-5">
            <div class="row">
                    <div class="col-md-3 my-auto mx-auto">
                        <hr class="border-2 opacity-100">
                    </div>
                    <div class="col-md-4 mx-auto">
                        <h2 class="text-center">Proyectos realizados</h2>
                    </div>
                    <div class="col-md-3 my-auto mx-auto">
                        <hr class="border-2 opacity-100">
                    </div>
            </div>
            <div class="row">

                    <?php if (have_posts()): ?>
                    <?php query_posts("showposts=3&category_name=proyectos"); ?>
                    <?php while (have_posts()): the_post(); ?>
                        <div class="tarjeta-proyecto">
                            <div class="col-md-3">
                                <?php the_post_thumbnail('full', array('class' => 'img-fluid w-100 responsive-banner foto-responsive')); ?>

                            </div>
                            <div class="col-md-1"></div>
                            <div class="col-md-7 padding-responsive">
                                    <h2><?php the_title(); ?></h2>
                                    <span class=""><?php the_content(); ?></span>
                                    <a href="<?php the_permalink() ?>" class="btn btn-danger w-25 mb-4 " ><h3>Ver más</h3></a>
                            </div>
                        </div>


                    <?php endwhile; ?>
                    <?php else: ?>
                    <?php endif; ?>
                    <?php wp_reset_query(); ?>

            </div>
        </div>
    </div>
</section>
 


<?php get_footer(); ?>