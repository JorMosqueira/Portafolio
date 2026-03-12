<?php
/*
Template Name: Directorio nacional
*/
?>

<?php get_header(); ?>

<!-- SLIDER DINÁMICO -->
<section class="slider">
    <div class="container col-md-10 mx-auto">
        <div class="row">

            <?php
            echo do_shortcode('[smartslider3 slider="4"]');
            ?>

        </div>
    </div>
</section>

<!-- ACERCA DEL DIRECTORIO NACIONAL -->
<section class="seccion-separador">
    <div class="container col-md-10">
        <div class="row">
            <!-- Imagen -->
            <div class="col-md-5">
                <img class="w-100 imagen-objetivos-2"
                    src="<?php echo get_stylesheet_directory_uri(); ?>/img/imagen-objetivo-2.jpg" alt="">
            </div>
            <div class="col-md-1">

            </div>
            <!-- Información -->
            <div class="col-md-6 margen-break-sm">
                <h2 class="titulos-azul"> Acerca del directorio nacional</h2>
                <p class="mt-4">Nuestro Directorio Nacional es mucho más que una lista de nombres; es un crisol de talento, experiencia y oportunidades. Desde empresas familiares arraigadas en la tradición hasta startups innovadoras que desafían el statu quo, cada miembro aporta su propia voz única a nuestra comunidad diversa y dinámica.</p>
            </div>

        </div>
    </div>
</section>

<!-- MESA EJECUTIVA -->
<section class="seccion-separador">
    <div class="container col-md-10 mx-auto">
        <h2 class="titulos-negro">Mesa ejecutiva</h2>
        <hr class="mb-5">
        <div class="row">
            <?php if (have_posts()): ?>
                <?php query_posts("category_name=mesa-ejecutiva"); ?>
                <?php while (have_posts()):
                    the_post(); ?>

                    <div class="col-xl-4 col-lg-6 col-sm-12 mx-auto mb-5">
                        <div class="tarjeta-ejecutivos">
                            <?php
                            $image = get_field('imagen_ejecutivo');
                            if (!empty($image)): ?>
                                <img class="ejecutivo-fotos mb-3" src="<?php echo esc_url($image['url']); ?>"
                                    alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php endif; ?>
                            <h5>
                                <?php the_field('nombre_ejecutivo'); ?>
                            </h5>
                            <p class="mb-0">
                                <?php the_field('cargo_ejecutivo'); ?>
                            </p>
                        </div>
                    </div>

                <?php endwhile; ?>
            <?php else: ?>
            <?php endif; ?>
            <?php wp_reset_query(); ?>
        </div>
    </div>
</section>

<!-- DIRECTORES Y DIRECTORAS NACIONALES -->
<section class="seccion-separador">
    <div class="container">
        <h2 class="d-flex justify-content-center titulos-negro">Directoras y Directores Nacionales</h2>
        <hr class="my-4">
        <div class="row centrar">

            <?php if (have_posts()): ?>
                <?php query_posts("category_name=directores-nacionales&showposts=12"); ?>
                <?php while (have_posts()):
                    the_post(); ?>

                    <div class="col-md-3 mx-0 tarjeta-directores mb-2">
                        <h4>
                            <?php the_title(); ?>
                        </h4>
                    </div>


                <?php endwhile; ?>
            <?php else: ?>
            <?php endif; ?>
            <?php wp_reset_query(); ?>

        </div>
</section>
<?php get_footer(); ?>
