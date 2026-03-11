<!-- Conectar pagina de wordpress con una pagina template de php ++++++++++++++++++ -->
<?php
/*
Template Name: Contacto
*/
?>


<?php get_header(); ?>

<main>
    <section class="container-fluid mb-5">

        <div class="row banner-contacto">
            <div class="col-md-10 my-5 mx-auto d-flex justify-content-center flex-column align-items-center">
                <div class="row ">
                    <div class="col-md-12 mx-auto ">
                        <h1 class="text-light fw-bolder mb-3">Contacto</h1>
                    </div>

                </div>
            </div>
        </div>

    </section>
    <section class="container py-5">
        <div class="row py-5">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-lg-5 col-md-12 margen-break-sm fondo-contacto ">
                        <div class="formulario-contacto">

                            <h2 class="mb-5 text-center">Formulario de contacto</h2>
                            <?php echo do_shortcode('[fluentform id="3"]'); ?>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12 contacto">
                        <h1 class="fw-bolder mb-5">Solicita un presupuesto gratuito</h1>
                        <p class="mb-4">Si tienes una idea en mente, contacta a nuestro equipo para solicitar apoyo para conseguir el espacio modular que necesitas.</p>
                        <p class="mb-4">Nuestro equipo de profesionales está capacitado para encontrar la viabilidad de tus ideas, de tal modo que, la satisfacción al cliente es la base de nuestros proyectos.                        </p>
                        <div class="bg-contacto">
                            <div class="row mb-5 mt-4">
                                <div class="col-md-2">
                                    <img class="img-fluid iconos-valores" src="<?php echo get_stylesheet_directory_uri(); ?>/img/contacto-ubicacion.png">
                                </div>
                                <div class="col-md-8">
                                    <h5>Dirección</h5>
                                    <p>Los álamos 2447, La Pintana, Sector Industrial</p>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-md-2">
                                    <img class="img-fluid iconos-valores" src="<?php echo get_stylesheet_directory_uri(); ?>/img/contacto-llamanos.png">
                                </div>
                                <div class="col-md-3">
                                    <h5>Llámanos</h5>
                                    <p>+569 54376654</p>
                                </div>
                                <div class="col-md-2">
                                    <img class="img-fluid iconos-valores" src="<?php echo get_stylesheet_directory_uri(); ?>/img/contacto-correo.png">
                                </div>
                                <div class="col-md-4">
                                    <h5>Correo</h5>
                                    <p>contacto@viphomespa.cl</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row my-5">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3322.1956412305667!2d-70.64522141100565!3d-33.626168937729815!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662d83747c0b637%3A0xb2c99ddedafaf5aa!2sLos%20Alamos%202447%2C%208820000%20La%20Pintana%2C%20Regi%C3%B3n%20Metropolitana!5e0!3m2!1ses!2scl!4v1731457170364!5m2!1ses!2scl" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
</main>

<?php get_footer(); ?>