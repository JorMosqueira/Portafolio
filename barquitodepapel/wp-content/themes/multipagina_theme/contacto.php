<!-- Conectar pagina de wordpress con una pagina template de php ++++++++++++++++++ -->
<?php
/*
Template Name: Contacto
*/
?>


<?php get_header(); ?>

<main>
    <section class="container-fluid mb-5">
        <?php
        echo do_shortcode('[smartslider3 slider="7"]');
        ?>
    </section>
    <section class="container py-5">
        <div class="row pb-5">
            <div class="col-md-2 my-auto">
                <hr class="border-2 opacity-100">
            </div>
            <div class="col-md-8">
                <h2 class="text-center">Contacta con nosotros, te ayudaremos a responder cualquier duda que tengas</h2>
            </div>
            <div class="col-md-2 my-auto">
                <hr class="border-2 opacity-100">
            </div>
        </div>
        <div class="row py-5">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-lg-5 col-md-12">
                        <?php if (have_posts()): ?>
                            <?php query_posts("category_name=datos-contacto"); ?>
                            <?php while (have_posts()):
                                the_post(); ?>
                                <div class=" d-flex align-items-center mb-2 mx-auto">
                                    <i class="fa-solid fa-location-dot fa-2xl mx-5 i-none"></i>
                                    <div>
                                        <h6>
                                            Dirección
                                        </h6>
                                        <p>
                                            <?php the_field('direccion'); ?>
                                        </p>
                                    </div>
                                </div>
                                <div class=" d-flex align-items-center mb-2 mx-auto">
                                    <i class="fa-solid fa-phone-volume fa-2xl mx-5 i-none"></i>
                                    <div>
                                        <h6>
                                            Número de teléfono
                                        </h6>
                                        <p>
                                            <?php the_field('numero'); ?>
                                        </p>
                                    </div>
                                </div>
                                <div class=" d-flex align-items-center mb-2 mx-auto">
                                    <i class="fa-solid fa-envelope fa-2xl mx-5 i-none"></i>
                                    <div>
                                        <h6>
                                            Correo electrónico
                                        </h6>
                                        <p>
                                            <?php the_field('correo_electronico'); ?>
                                        </p>
                                    </div>
                                </div>
                                <div class=" d-flex align-items-center mb-2 mx-auto">
                                    <i class="fa-solid fa-clock fa-2xl mx-5 i-none"></i>
                                    <div>
                                        <h6>
                                            Horarios de atención
                                        </h6>
                                        <p>
                                            <?php the_field('horarios_de_atencion'); ?>
                                        </p>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php else: ?>
                        <?php endif; ?>
                        <?php wp_reset_query(); ?>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-lg-6 col-md-12 margen-break-sm fondo-contacto">
                        <form class="formulario" action="">
                            <div class="my-2">
                                <label for="nombre">Nombre:</label>
                                <input class="formulario__item" type="text" name="nombre" id="nombre"
                                    placeholder="Ejemplo: Benjamín Abarca" required>
                                <span class="error">✘ Ingresa tu nombre</span>
                                <span class="correcto">✔ Bien hecho!</span>
                            </div>

                            <div class="my-2">
                                <label for="telefono">Teléfono:</label>
                                <input class="formulario__item" type="text" name="telefono" id="telefono"
                                    placeholder="Ejemplo: +56 9 12345678" required
                                    pattern="^(\+?56)?(\s?)(0?9)(\s?)[98765432]\d{7}$">
                                <span class="error">✘ Ingresa tu número telefónico</span>
                                <span class="correcto">✔ Bien hecho!</span>
                            </div>
                            <div class="formulario__full my-2">
                                <label for="correo">Correo electrónico:</label>
                                <input class="formulario__item" type="text" name="correo" id="correo"
                                    placeholder="Ejemplo: Jhon@doe.com" required
                                    pattern="[a-zA-Z0-9!#$%&'*\/=?^_`\{\|\}~\+\-]([\.]?[a-zA-Z0-9!#$%&'*\/=?^_`\{\|\}~\+\-])+@[a-zA-Z0-9]([^@&%$\/\(\)=?¿!\.,:;]|\d)+[a-zA-Z0-9][\.][a-zA-Z]{2,4}([\.][a-zA-Z]{2})?">
                                <span class="error">✘ Ingresa tu correo electrónico</span>
                                <span class="correcto">✔ Bien hecho!</span>
                            </div>
                            <div class="formulario__full my-2">
                                <label class="formulario__mensaje" for="mensaje">Mensaje:</label>
                                <textarea class="formulario__item" name="mensaje" id="mensaje" placeholder="Su mensaje"
                                    required></textarea>
                                <span class="error">✘ Ingresa un mensaje para la escuela</span>
                                <span class="correcto">✔ Bien hecho!</span>
                            </div>
                            <div class="formulario__full">
                                <button class="btn btn-primary w-50 rounded-pill mt-4" type="submit">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row my-5">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3355.5934134773656!2d-70.72324082346144!3d-32.74998536198447!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x968816cc45152341%3A0xd3db29ac2eeacc3a!2sSto%20Domingo%2041%2C%202171643%20San%20Felipe%2C%20Valpara%C3%ADso!5e0!3m2!1ses!2scl!4v1710628706761!5m2!1ses!2scl" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
</main>

<?php get_footer(); ?>