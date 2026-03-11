<?php
/*
Template Name: Matricula
*/
?>

<?php get_header(); ?>


<main>
    <section class="container-fluid mb-5">
        <?php
        echo do_shortcode('[smartslider3 slider="4"]');
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
                        <h2 class="text-center">¡Matrículas Abiertas!</h2>
                    </div>
                    <div class="col-md-4 my-auto">
                        <hr class="border-2 opacity-100">
                    </div>
                </div>
                <div class="row d-flex justify-content-between align-items-center my-5 py-5">
                    <div class="col-md-5">
                        <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/cupo.png">
                    </div>
                    <div class="col-md-6 margen-break-sm">
                        <h4>¿Cómo funcionan nuestras matrículas?</h4>
                        <p class="mt-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis est lorem, sodales
                            id pretium
                            suscipit, cursus sed massa. Interdum et malesuada fames ac ante ipsum primis in
                            faucibus.Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus
                            mus. Sed vel egestas tortor. Maecenas lobortis eros eget elit porta, nec dapibus quam
                            accumsan. Interdum et malesuada fames ac ante ipsum primis in faucibus.Orci varius natoque
                            penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed vel egestas tortor.
                            Maecenas lobortis eros eget elit porta, nec dapibus quam accumsan.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container horarios text-white">
        <div class="row">
            <div class="col-md-12">
                <div class="row d-md-flex justify-content-md-center">
                    <div class="col-md-2 my-auto">
                        <hr class="border-2 opacity-100">
                    </div>
                    <div class="col-md-6">
                        <h2 class="text-center fw-bold">Jornadas y Horarios de atención</h2>
                    </div>
                    <div class="col-md-2 my-auto">
                        <hr class="border-2 opacity-100">
                    </div>
                </div>
                <div class="col-md-8 text-center mx-auto mt-5">
                    <p>Nuestro jardín permanecerá abierto desde las 7:40 am hasta las 18:00 pm.</p>
                    <p class="my-3">Atención apoderados es de 8:30 a 9:30 am y de 17:30 a 18:00 pm.</p>
                    <p> Nos mantenemos abierto los doce meses del año.</p>
                    <p class="my-3">Los meses de enero y febrero nuestro jardín permanece abierto con talleres de
                        verano.</p>
                </div>
            </div>
        </div>
    </section>
    <div class="col-lg-6 col-md-12 mx-auto py-5 text-center">
        <div class="my-5">
            <a class="boton-grande text-decoration-none" href="<?php echo esc_url(home_url('contacto/')); ?>">Contáctanos</a>
        </div>
    </div>
</main>

<?php get_footer(); ?>