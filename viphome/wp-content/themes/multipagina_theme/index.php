<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>


<main>
    
<div class="container-fluid">
    <div class="row banner-home">
        <div class="col-md-10 my-5 mx-auto">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="text-light fw-bolder mb-3">¡Bienvenido a nuestro sitio!</h1>
                    <h4 class="text-light mb-3">Aquí podrás ver todos los containers que tanto buscabas</h4>
                    <p class="text-light mb-5 ">Nosotros como empresa nos enfocamos en personas que buscan alternativas a las viviendas tradicionales, ya sea por razones económicas, ecológicas o estéticas. Además, la construcción con contenedores ofrece una gran flexibilidad y creatividad, lo que puede ser atractivo para quienes desean un hogar único y personalizado.
                    </p>
                    <a href="http://localhost/viphome/productos/" class="boton-banner">Ver catalogo</a>
                </div>

            </div>
        </div>
    </div>

</div>
    <!-- ------------------------------------------ PRODUCTOS DESTACADOS ---------------------------------------------- -->
<section class="container-fluid destacado">
    <div class="row">
        <div class="col-md-10 mx-auto my-4">
            <h1 class="my-5 text-center">Containers Destacados</h1>
            <div class="row d-flex align-items-center justify-content-evenly flex-row destacado-responsivo">
                    <?php if (have_posts()): ?>
                    <?php query_posts("category_name=productos-destacados&showposts=3"); ?>
                    <?php while (have_posts()): the_post(); ?>
                        <div class="col-md-3 tarjeta-producto d-flex flex-column mt-5 ">

                            <?php the_post_thumbnail('full', array('class' => 'img-fluid mb-3')); ?>
                            <h3><?php the_title(); ?></h3>
                            <h4><?php the_field('material-container'); ?></h4>
                            <hr>
                            <span class="my-3"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/metros.png" alt="Icono de metros cuadrados" class="img-fluid"><?php the_field('m2-container'); ?></span>
                            <span class="mb-3"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/habitacion.png" alt="Icono de habitacion" class="img-fluid"><?php the_field('habitacion-container'); ?></span>
                            <hr>
                            <h5><?php the_field('precio-container'); ?></h5>

                            <a href="<?php the_permalink() ?>" target="_blank">Ver producto</a>

                        </div> 
                    <?php endwhile; ?>
                    <?php else: ?>
                    <?php endif; ?>
                    <?php wp_reset_query(); ?>
            </div>
        </div>
    </div>

</section>

<div class="container-fluid bg-galeria">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <h1>Nuestra galería de proyectos</h1>
        </div>
    </div>
</div>

<section class="container-fluid fotos-galeria">
    <div class="row">
        <div class="col-md-11 mx-auto my-4">

                <div class="row my-5">
                    <div class="col-5"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/galeria1.png"
                            data-fancybox="gallery" data-caption="Nuestra galería de containers"><img
                                class="img-fluid galeria-containers"
                                src="<?php echo get_stylesheet_directory_uri(); ?>/img/galeria1.png"></a>
                    </div>
                    <div class="col-4"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/galeria2.png"
                            data-fancybox="gallery" data-caption="Nuestra galería de containers"><img
                                class="img-fluid galeria-containers"
                                src="<?php echo get_stylesheet_directory_uri(); ?>/img/galeria2.png"></a>
                    </div>
                    <div class="col-3"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/galeria3.png"
                            data-fancybox="gallery" data-caption="Nuestra galería de containers"><img
                                class="img-fluid galeria-containers"
                                src="<?php echo get_stylesheet_directory_uri(); ?>/img/galeria3.png"></a>
                    </div>
                </div>

                <div class="row mb-5">
                    <div class="col-7"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/galeria4.png"
                            data-fancybox="gallery" data-caption="Nuestra galería de containers"><img
                                class="img-fluid galeria-containers"
                                src="<?php echo get_stylesheet_directory_uri(); ?>/img/galeria4.png"></a>
                    </div>
                    <div class="col-5"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/galeria5.png"
                            data-fancybox="gallery" data-caption="Nuestra galería de containers"><img
                                class="img-fluid galeria-containers"
                                src="<?php echo get_stylesheet_directory_uri(); ?>/img/galeria5.png"></a>
                    </div>
                </div>

                <div class="row mb-5">
                    <div class="col-3"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/galeria6.png"
                            data-fancybox="gallery" data-caption="Nuestra galería de containers"><img
                                class="img-fluid galeria-containers"
                                src="<?php echo get_stylesheet_directory_uri(); ?>/img/galeria6.png"></a>
                    </div>
                    <div class="col-6"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/galeria7.png"
                            data-fancybox="gallery" data-caption="Nuestra galería de containers"><img
                                class="img-fluid galeria-containers"
                                src="<?php echo get_stylesheet_directory_uri(); ?>/img/galeria7.png"></a>
                    </div>
                    <div class="col-3"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/galeria8.png"
                            data-fancybox="gallery" data-caption="Nuestra galería de containers"><img
                                class="img-fluid galeria-containers"
                                src="<?php echo get_stylesheet_directory_uri(); ?>/img/galeria8.png"></a>
                    </div>
                </div>
        </div>
    </div>
</section>

    <!-- -------------------- GARANTIAS ---------------- -->

    <section class="container-fluid my-5 text-white py-5 text-center section-garantias">
        <div class="row">
            <div class="col-md-10 mx-auto my-4">
                <div class="garantias">
                    <div class="row">
                        <div class="col-md-4 my-auto">
                            <hr class="border-2 opacity-100">
                        </div>
                        <div class="col-md-4">
                            <h2 class="text-center">Nuestras garantías</h2>
                        </div>
                        <div class="col-md-4 my-auto">
                            <hr class="border-2 opacity-100">
                        </div>
                    </div>
                    <div class="row mt-5 mb-4">
                        <div class="d-md-flex justify-content-md-around">
                            <div class="col-md-3 col-sm-12 margen-break-sm tarjeta-garantia">
                                <img class="img-fluid iconos-valores" src="<?php echo get_stylesheet_directory_uri(); ?>/img/garantia1.png">
                                <h4 class="my-4">Garantía en Posventa</h4>
                            </div>
                            <div class="col-md-3 col-sm-12 margen-break-sm tarjeta-garantia">
                                <img class="img-fluid iconos-valores" src="<?php echo get_stylesheet_directory_uri(); ?>/img/garantia2.png">
                                <h4 class="my-4">Cumplimos lo que prometimos</h4>
                            </div>
                            <div class="col-md-3 col-sm-12 margen-break-sm tarjeta-garantia">
                                <img class="img-fluid iconos-valores" src="<?php echo get_stylesheet_directory_uri(); ?>/img/garantia3.png">
                                <h4 class="my-4">Te garantizamos calidad</h4>
                            </div>

                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="d-md-flex justify-content-md-around">

                            <div class="col-md-3 col-sm-12 margen-break-sm tarjeta-garantia">
                                <img class="img-fluid iconos-valores" src="<?php echo get_stylesheet_directory_uri(); ?>/img/garantia4.png">
                                <h4 class="my-4">Contamos con experiencia</h4>
                            </div>
                            <div class="col-md-3 col-sm-12 margen-break-sm tarjeta-garantia">
                                <img class="img-fluid iconos-valores" src="<?php echo get_stylesheet_directory_uri(); ?>/img/garantia5.png">
                                <h4 class="my-4">Personalización</h4>
                            </div>
                            <div class="col-md-3 col-sm-12 margen-break-sm tarjeta-garantia">
                                <img class="img-fluid iconos-valores" src="<?php echo get_stylesheet_directory_uri(); ?>/img/garantia6.png">
                                <h4 class="my-4">Eficiencia</h4>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- -------------------------------------- SECCION CALIDAD ------------------------------ -->

    <section class="container-fluid mt-5 margin-vip">
        <div class="row ">
            <div class="col-md-9 mx-auto my-4">
                <div class="row calidad">
                    <div class="col-md-4">
                        <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/seccion-calidad.png">
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-7">
                        <h2 class="mb-4">¡La mejor calidad y durabilidad para todos los mercados e industrias!</h2>
                        <p class="mb-3">Con más de 34 años perfeccionando containers, lo que nos permite crear lo que necesites.</p>
                        <p class="mb-5">Trabajamos para sectores residenciales, comerciales, industriales y gubernamentales.</p>
                        <a href="/viphome/proyectos" class="boton-banner mt-5">Ver más</a>

                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>



