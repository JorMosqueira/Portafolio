<?php
/*
Template Name: Talleres
*/
?>

<?php get_header(); ?>

<main>
    <section class="container-fluid mb-5">
        <?php
        echo do_shortcode('[smartslider3 slider="6"]');
        ?>
    </section>
    <section class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <div class="row d-flex justify-content-between align-items-center">
                    <div class="col-md-6">
                        <h2>¿Como funcionan nuestros talleres y actividades?</h2>
                        <p class="mt-5">Nuestro jardín realiza una variedad de actividades centradas en el desarrollo
                            integral del
                            párvulo. Esto incluye actividades sensoriales, artísticas, físicas, cognitivas y de
                            lenguaje. Juegos que proveen la coordinador motora, la creatividad, actividades de
                            aprendizaje temprano, como la exploración de formas, colores y números, todas ellas
                            adaptadas a las capacidades de niño y niña.</p>
                    </div>
                    <div class="col-md-5">
                        <img class="img-fluid img-borde margen-break-sm"
                            src="<?php echo get_stylesheet_directory_uri(); ?>/img/pagtaller.png">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="banner-actividades">
        <h2 class="text-center text-white">Actividades & Talleres</h2>
    </div>
    <section class="container py-5">
        <div class="row">
            <div class="col-lg-12 col-md-10 talleres mx-auto">
                <?php if (have_posts()): ?>
                    <?php query_posts("category_name=talleres"); ?>
                    <?php while (have_posts()):
                        the_post(); ?>
                        <div class="taller-body">
                            <div class="row">
                                <div class="col-lg-4 col-md-12">
                                    <?php the_post_thumbnail('full', array('class' => 'img-fluid imagen-taller')); ?>
                                </div>
                                <div class="col-lg-7 col-md-9 col-sm-10 mx-auto">
                                    <div class="info-taller">
                                        <h3>
                                            <?php the_title(); ?>
                                        </h3>
                                        <p>
                                            <?php the_content(); ?>
                                        </p>
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
    </section>
</main>

<?php get_footer(); ?>