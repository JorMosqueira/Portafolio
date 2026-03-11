<?php
/*
Template Name: Profesionales
*/
?>

<?php get_header(); ?>


<main>
    <section>
        <?php
        echo do_shortcode('[smartslider3 slider="5"]');
        ?>
    </section>
    <section class="container my-5 py-5">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-4 my-auto">
                        <hr class="border-2 opacity-100">
                    </div>
                    <div class="col-md-4">
                        <h2 class="text-center">¡Conoce a nuestros profesionales!</h2>
                    </div>
                    <div class="col-md-4 my-auto">
                        <hr class="border-2 opacity-100">
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5 py-5">
            <div class="col-md-12">
                <div class="row">
                    <?php if (have_posts()): ?>
                        <?php query_posts("category_name=profesionales"); ?>
                        <?php while (have_posts()):
                            the_post(); ?>
                            <div
                                class="col-xl-3 col-lg-6 col-sm-6 mb-5 d-flex justify-content-center align-items-center flex-column">
                                <div class="card">
                                    <div class="card-container">
                                        <div class="card-face front-face">
                                            <?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?>
                                        </div>
                                        <div class="card-face back-face">
                                            <div class="container-about">
                                                <span class="my-4">
                                                    <?php the_field('nombre_del_profesional'); ?>
                                                </span>
                                                <p>
                                                    <?php the_field('cargo'); ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
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
    <section class="container conector-actividades">
        <div class="row">
            <div class="col-md-12">
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <img class="img-fluid img-borde"
                            src="<?php echo get_stylesheet_directory_uri(); ?>/img/tallerarte.png">
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 margen-break-sm">
                        <h4>¿Quieres saber que actividades realizan
                            nuestras educadoras?</h4>
                        <p class="my-4">Estos talleres se adaptan a las edades y habilidades de los niños y se llevan a
                            cabo de
                            manera lúdica y participativa para que puedan disfrutar y aprender al mismo tiempo.</p>
                        <div class="pt-5">
                            <a class="boton-regular text-decoration-none" href="<?php echo esc_url(home_url('talleres/')); ?>">Saber más</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>


<?php get_footer(); ?>