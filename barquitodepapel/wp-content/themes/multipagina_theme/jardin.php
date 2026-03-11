<?php
/*
Template Name: Jardin
*/
?>
<?php get_header(); ?>

<main>
    <section class="container-fluid pb-5">
        <?php
        echo do_shortcode('[smartslider3 slider="3"]');
        ?>
    </section>
    <section class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <div class="row mx-auto">
                    <div class="col-md-6 col-sm-12">
                        <h3 class="mb-5">¿Quiénes somos?</h3>
                        <p>El Jardín Infantil “Barquito de Papel” se encuentra ubicado en la ciudad de San Felipe desde
                            hace aproximadamente 18 años, con la finalidad de presentar a la comunidad otra opción a la
                            hora de decidir un jardín infantil para los integrantes más pequeños de la familia.

                            Sus bases se sustentan fundamentalmente en un sistema de necesidades y creencias que tienen
                            que ver con una igualdad de oportunidades y posibilidades a la hora de elegir un
                            establecimiento, con el acceso directo a aquellas personas que privilegian la buena
                            educación por sobre lo material, sin importar su clase social o cultural. Por lo tanto,
                            dentro de nuestro sistema de necesidades y creencias existe un sistema de aranceles
                            diferenciados para todos los párvulos, pudiendo así acceder cualquiera a nuestro jardín, sin
                            que se privilegie el arancel para escoger un establecimiento.
                        </p>
                    </div>
                    <div class="col-md-6 col-sm-12 margen-break-sm text-center">
                        <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo-grande.png">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container valores my-5 text-white py-5 text-center">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-7 mx-auto">
                        <h2 class="text-center border-bottom border-2 pb-3">Valores que inculca Barquito de papel</h2>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="d-md-flex justify-content-md-around">
                        <div class="col-md-3 col-sm-12"><img class="img-fluid iconos-valores"
                                src="<?php echo get_stylesheet_directory_uri(); ?>/img/puños.png">
                            <h4 class="my-4">Respeto</h4>
                            <p>Le enseñaremos a respetar y respetaremos a sus niños en todo momento.</p>
                        </div>
                        <div class="col-md-3 col-sm-12 margen-break-sm"><img class="img-fluid iconos-valores"
                                src="<?php echo get_stylesheet_directory_uri(); ?>/img/feliz.png">
                            <h4 class="my-4">Autonomía</h4>
                            <p>Le enseñaremos los valores de la vida y se aplicaran en todo momento.</p>
                        </div>
                        <div class="col-md-3 col-sm-12 margen-break-sm"><img class="img-fluid iconos-valores"
                                src="<?php echo get_stylesheet_directory_uri(); ?>/img/ampolletas.png">
                            <h4 class="my-4">Creatividad</h4>
                            <p>Los reconoceremos por sus logros y ellos mismos aprenderán a reconocer los logros de los
                                demás.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <div class="row my-5">
                    <div class="col-md-4 my-auto">
                        <hr class="border-2 opacity-100">
                    </div>
                    <div class="col-md-4">
                        <h2 class="text-center">Nuestra visión y misión</h2>
                    </div>
                    <div class="col-md-4 my-auto">
                        <hr class="border-2 opacity-100">
                    </div>
                </div>
                <div class="row my-5">
                    <div class="col-md-6 my-auto">
                        <img class="img-borde img-fluid"
                            src="<?php echo get_stylesheet_directory_uri(); ?>/img/misionvision.png"
                            alt="imagen generica">
                    </div>
                    <div class="col-md-6 text-end margen-break-sm">
                        <h4 class="border-bottom border-2 pb-3 border-black">Misión</h4>
                        <p class="mt-5">La misión fundamental del Jardín Infantil “Barquito de Papel” es otorgar
                            Educación parvularia
                            de calidad a lactantes de 85 días a 2 años, hij@s de madres que trabajan con remuneración,
                            fuera del hogar y que están beneficiadas con el código del trabajo, y por la ley de
                            protección de maternidad, ley nº20.545. Además de atender la diversidad de los alumn@s para
                            desarrollar sus competencias, empleando nuevas estrategias metodológicas, en el desarrollo
                            de un currículum preescolar pertinente y flexible que integra a la familia y es enriquecido
                            con la formación de hábitos, valores y actitudes positivas</p>
                        <h4 class="border-bottom border-2 pb-3 mt-5 border-black">Visión</h4>
                        <p class="mt-5">Trascender como un Establecimiento Educacional formador de personas creativas,
                            responsables, equilibradas y respetuosas de la diversidad.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container-fluid px-0 py-5">
        <div class="row">
            <div class="col-md-12">
                <div class="conector-matricula text-white">
                    <div class="row">
                        <div class="col-lg-5 col-md-12 col-sm-12 niños-matricula">
                        </div>
                        <div class="col-lg-6 col-sm-8 my-auto mx-sm-auto px-0">
                            <div class="info-matricula-conector">
                                <h1>¡Matrículas Abiertas!</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis est lorem, sodales id
                                    pretium
                                    suscipit, cursus sed massa. Interdum et malesuada fames ac ante ipsum primis in
                                    faucibus.Orci
                                    varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                    Sed
                                    vel
                                    egestas tortor. Maecenas lobortis eros eget elit porta, nec dapibus quam
                                    accumsan.<br><br>

                                    Sed vel egestas tortor. Maecenas lobortis eros eget elit porta, nec dapibus quam
                                    accumsan.
                                </p>
                                <a class="boton-regular text-decoration-none" href="<?php echo esc_url(home_url('matricula/')); ?>">Saber más</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row my-5">
                    <div class="col-md-4 my-auto">
                        <hr class="border-2 opacity-100">
                    </div>
                    <div class="col-md-4">
                        <h2 class="text-center">Niveles</h2>
                    </div>
                    <div class="col-md-4 my-auto">
                        <hr class="border-2 opacity-100">
                    </div>
                </div>
                <div class="row my-5 text-white">
                    <div class="nivel cuna-menor">
                        <div class="texto-nivel col-md-5">
                            <h3>Sala Cuna Menor</h3>
                            <h5 class="mt-5 mb-4">Desde los 6 meses</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis est lorem, sodales id
                                pretium
                                suscipit, cursus sed massa. Interdum et malesuada fames ac ante ipsum primis in
                                faucibus.Orci varius natoque penatibus et magnis dis parturient montes, nascetur
                                ridiculus
                                mus. Sed vel egestas tortor. Maecenas lobortis eros eget elit porta, nec dapibus quam
                                accumsan.
                            </p>
                        </div>
                        <div class="col-md-5">
                            <img class="img-fluid imagen-nivel"
                                src="<?php echo get_stylesheet_directory_uri(); ?>/img/cunamenor.png">
                        </div>
                    </div>
                    <div class="nivel cuna-mayor">
                        <div class="texto-nivel col-md-5">
                            <h3>Sala Cuna Mayor</h3>
                            <h5 class="mt-5 mb-4">Desde los 6 meses</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis est lorem, sodales id
                                pretium
                                suscipit, cursus sed massa. Interdum et malesuada fames ac ante ipsum primis in
                                faucibus.Orci varius natoque penatibus et magnis dis parturient montes, nascetur
                                ridiculus
                                mus. Sed vel egestas tortor. Maecenas lobortis eros eget elit porta, nec dapibus quam
                                accumsan.
                            </p>
                        </div>
                        <div class="col-md-5">
                            <img class="img-fluid imagen-nivel"
                                src="<?php echo get_stylesheet_directory_uri(); ?>/img/cunamayor.png">
                        </div>
                    </div>
                    <div class="nivel medio-menor">
                        <div class="texto-nivel col-md-5">
                            <h3>Medio Menor</h3>
                            <h5 class="mt-5 mb-4">Desde los 6 meses</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis est lorem, sodales id
                                pretium
                                suscipit, cursus sed massa. Interdum et malesuada fames ac ante ipsum primis in
                                faucibus.Orci varius natoque penatibus et magnis dis parturient montes, nascetur
                                ridiculus
                                mus. Sed vel egestas tortor. Maecenas lobortis eros eget elit porta, nec dapibus quam
                                accumsan.
                            </p>
                        </div>
                        <div class="col-md-5">
                            <img class="img-fluid imagen-nivel"
                                src="<?php echo get_stylesheet_directory_uri(); ?>/img/mediomenor.png">
                        </div>
                    </div>
                    <div class="nivel medio-mayor">
                        <div class="texto-nivel col-md-5">
                            <h3>Medio Mayor</h3>
                            <h5 class="mt-5 mb-4">Desde los 6 meses</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis est lorem, sodales id
                                pretium
                                suscipit, cursus sed massa. Interdum et malesuada fames ac ante ipsum primis in
                                faucibus.Orci varius natoque penatibus et magnis dis parturient montes, nascetur
                                ridiculus
                                mus. Sed vel egestas tortor. Maecenas lobortis eros eget elit porta, nec dapibus quam
                                accumsan.
                            </p>
                        </div>
                        <div class="col-md-5">
                            <img class="img-fluid imagen-nivel"
                                src="<?php echo get_stylesheet_directory_uri(); ?>/img/mediomayor.png">
                        </div>
                    </div>
                    <div class="nivel transicion">
                        <div class="texto-nivel col-md-5">
                            <h3>Transición 1</h3>
                            <h5 class="mt-5 mb-4">Desde los 6 meses</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis est lorem, sodales id
                                pretium
                                suscipit, cursus sed massa. Interdum et malesuada fames ac ante ipsum primis in
                                faucibus.Orci varius natoque penatibus et magnis dis parturient montes, nascetur
                                ridiculus
                                mus. Sed vel egestas tortor. Maecenas lobortis eros eget elit porta, nec dapibus quam
                                accumsan.
                            </p>
                        </div>
                        <div class="col-md-5">
                            <img class="img-fluid imagen-nivel"
                                src="<?php echo get_stylesheet_directory_uri(); ?>/img/transicion.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-4 my-auto">
                        <hr class="border-2 opacity-100">
                    </div>
                    <div class="col-md-4">
                        <h2 class="text-center">Nuestra infraestructura</h2>
                    </div>
                    <div class="col-md-4 my-auto">
                        <hr class="border-2 opacity-100">
                    </div>
                </div>
                <div class="col-md-7 mx-auto pb-5">
                    <h3 class="my-5 text-center">Conoce nuestras instalaciones, desde el patio exterior, interior y más.
                    </h3>
                </div>
                <div class="row my-5">
                    <div class="col-5"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/infraestructura1.png"
                            data-fancybox="gallery" data-caption="Descripcion generica'"><img
                                class="img-fluid imagen-infraestructura"
                                src="<?php echo get_stylesheet_directory_uri(); ?>/img/infraestructura1.png"></a></div>
                    <div class="col-4"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/infraestructura2.png"
                            data-fancybox="gallery" data-caption="Descripcion generica'"><img
                                class="img-fluid imagen-infraestructura"
                                src="<?php echo get_stylesheet_directory_uri(); ?>/img/infraestructura2.png"></a></div>
                    <div class="col-3"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/infraestructura3.png"
                            data-fancybox="gallery" data-caption="Descripcion generica'"><img
                                class="img-fluid imagen-infraestructura"
                                src="<?php echo get_stylesheet_directory_uri(); ?>/img/infraestructura3.png"></a></div>
                </div>
                <div class="row">
                    <div class="col-7"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/infraestructura4.png"
                            data-fancybox="gallery" data-caption="Descripcion generica'"><img
                                class="img-fluid imagen-infraestructura"
                                src="<?php echo get_stylesheet_directory_uri(); ?>/img/infraestructura4.png"></a></div>
                    <div class="col-5"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/infraestructura5.png"
                            data-fancybox="gallery" data-caption="Descripcion generica'"><img
                                class="img-fluid imagen-infraestructura"
                                src="<?php echo get_stylesheet_directory_uri(); ?>/img/infraestructura5.png"></a></div>
                </div>
                <div class="row mt-5">
                    <div class="col-4"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/infraestructura6.png"
                            data-fancybox="gallery" data-caption="Descripcion generica'"><img
                                class="img-fluid imagen-infraestructura"
                                src="<?php echo get_stylesheet_directory_uri(); ?>/img/infraestructura6.png"></a></div>
                    <div class="col-3"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/infraestructura7.png"
                            data-fancybox="gallery" data-caption="Descripcion generica'"><img
                                class="img-fluid imagen-infraestructura"
                                src="<?php echo get_stylesheet_directory_uri(); ?>/img/infraestructura7.png"></a></div>
                    <div class="col-5"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/infraestructura8.png"
                            data-fancybox="gallery" data-caption="Descripcion generica'"><img
                                class="img-fluid imagen-infraestructura"
                                src="<?php echo get_stylesheet_directory_uri(); ?>/img/infraestructura8.png"></a></div>
                </div>
                <h5 class="text-center mt-5">Para visualizar de mejor manera la infraestructura, clickea alguna imagen
                </h5>
            </div>
        </div>
    </section>
    <section class="container convenios my-5 pb-5">
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-center mb-5">Convenios</h3>
                <div class="row d-flex justify-content-around pt-5">
                    <?php if (have_posts()): ?>
                        <?php query_posts("category_name=convenios"); ?>
                        <?php while (have_posts()):
                            the_post(); ?>
                            <div class="col-2">
                                <img src="<?php the_field('imagen1'); ?>" alt="" class="img-fluid">
                            </div>
                            <div class="col-2">
                                <img src="<?php the_field('imagen2'); ?>" alt="" class="img-fluid">
                            </div>
                            <div class="col-2">
                                <img src="<?php the_field('imagen3'); ?>" alt="" class="img-fluid">
                            </div>
                            <div class="col-2">
                                <?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?>
                            </div>
                        <?php endwhile; ?>
                    <?php else: ?>
                    <?php endif; ?>
                    <?php wp_reset_query(); ?>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>