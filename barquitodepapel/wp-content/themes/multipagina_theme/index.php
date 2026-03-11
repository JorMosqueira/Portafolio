<?php
/*
Template Name: Inicio
*/
?>

<?php get_header(); ?>


<main>
    <section class="container">
        <?php
        echo do_shortcode('[smartslider3 slider="2"]');
        ?>
        <?php
        echo do_shortcode('[insta-gallery id="0"]');
        ?>

        <div class="row">
            <div class="col-md-12 mx-auto my-4">
                <div class="row py-5">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <h1 class="text-center my-5">¡Bienvenido a Barquito de papel!</h1>
                        <p class="text-center">
                            Estamos emocionados de darles la bienvenida a nuestro acogedor jardín infantil, donde la
                            diversión y el aprendizaje se entrelazan en un entorno seguro y estimulante. En "Barquito de
                            Papel", cada niño es una joya única, y nuestro compromiso es nutrir su curiosidad y
                            creatividad.
                        </p>
                    </div>
                    <div class="col-md-2"></div>
                </div>
                <div class="row d-flex justify-content-between align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <img class="img-borde img-fluid"
                            src="<?php echo get_stylesheet_directory_uri(); ?>/img/patio1.png">

                    </div>
                    <div class="col-lg-6 col-md-12">
                        <p class="margen-break-sm">El Jardín Infantil “Barquito de Papel” se encuentra ubicado en la
                            ciudad
                            de San
                            Felipe
                            desde hace
                            aproximadamente 18 años, con la finalidad de presentar a la comunidad otra opción a la hora
                            de
                            decidir un jardín infantil para los integrantes más pequeños de la familia.<br><br>

                            Sus bases se sustentan fundamentalmente en un sistema de necesidades y creencias que tienen
                            que
                            ver con una igualdad de oportunidades y posibilidades a la hora de elegir un
                            establecimiento,
                            con el acceso directo a aquellas personas que privilegian la buena educación por sobre lo
                            material, sin importar su clase social o cultural. Por lo tanto, dentro de nuestro sistema
                            de
                            necesidades y creencias existe un sistema de aranceles diferenciados para todos los
                            párvulos,
                            pudiendo así acceder cualquiera a nuestro jardín, sin que se privilegie el arancel para
                            escoger
                            un establecimiento.<br><br>

                            Si quieres saber más sobre nosotros clickea aquí.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


        <!-- -------------------- TALLERES ---------------- -->

    <div class="banner-actividades">
        <h2 class="text-center text-white">Actividades & Talleres</h2>
    </div>
    <section class="container mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-8 mx-auto pb-4">
                        <div class="cuadro-iconos">
                            <img class="img-fluid img-none" src="<?php echo get_stylesheet_directory_uri(); ?>/img/trofeo.png">
                            <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/escuela.png">
                            <img class="img-fluid img-none" src="<?php echo get_stylesheet_directory_uri(); ?>/img/compañerismo.png">
                        </div>
                        <p class="mt-5">Los talleres de Barquito de Papel, son la brújula que guía a los pequeños
                            exploradores hacia
                            un mundo de aprendizaje y desarrollo. En estos espacios interactivos, los niños tienen la
                            oportunidad de cultivar no solo habilidades cognitivas, sino también habilidades sociales,
                            emocionales y motoras. Cada taller es una ventana abierta a la imaginación y la creatividad,
                            estimulando la curiosidad innata de los niños mientras exploran nuevas ideas y conceptos.
                            Desde talleres de arte que despiertan la expresión individual hasta actividades científicas
                            que fomentan el pensamiento crítico.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 mx-auto py-5 text-center">
                    <a class="boton-grande text-decoration-none" href="<?php echo esc_url(home_url('talleres/')); ?>">Ver todos los Talleres</a>
                </div>
                <div class="col-lg-12 col-md-10 talleres mx-auto">
                    <div class="taller-body">
                        <div class="row">
                            <div class="col-lg-4 col-md-12">
                                <img class="img-fluid imagen-taller"
                                    src="<?php echo get_stylesheet_directory_uri(); ?>/img/tallerarte.png">
                            </div>
                            <div class="col-lg-8 col-md-9 col-sm-10 mx-auto">
                                <div class="info-taller">
                                    <h3>Taller de arte y creatividad</h3>
                                    <p>Espacio donde los niños y niñas pueden experimentar con diferentes materiales
                                        artísticos y expresar su creatividad a través del dibujo, la pintura, el
                                        modelado y
                                        otras actividades artísticas.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="taller-body">
                        <div class="row">
                            <div class="col-lg-4 col-md-12">
                                <img class="img-fluid imagen-taller"
                                    src="<?php echo get_stylesheet_directory_uri(); ?>/img/tallermusica.png">
                            </div>
                            <div class="col-lg-8 col-md-9 col-sm-10 mx-auto">
                                <div class="info-taller">
                                    <h3>Taller de música y movimiento</h3>
                                    <p>Se enfoca donde los niños y niñas exploren el ritmo, la melodía y el movimiento a
                                        través de canciones, instrumentos musicales y actividades de baile.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


        <!-- -------------------- EQUIPO DE BARQUITO ---------------- -->

    <div class="banner-profesionales">
        <h2 class="text-center text-white">Nuestras Profesionales</h2>
    </div>


    <section class="container pb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-4 my-auto">
                        <hr class="border-2 opacity-100">
                    </div>
                    <div class="col-md-4">
                        <h2 class="text-center">Conoce nuestro equipo</h2>
                    </div>
                    <div class="col-md-4 my-auto">
                        <hr class="border-2 opacity-100">
                    </div>
                </div>
                <div class="col-md-7 mx-auto pb-5 text-center">
                    <h3 class="my-5 ">Contamos con profesionales en las siguientes áreas</h3>
                    <h4 class="text-center"> Nutricionista - Parvularias - Directoras - entre otros.</h4>
                </div>
                <div class="row py-5">
                    <?php if (have_posts()): ?>
                        <?php query_posts("showposts=4&category_name=profesionales"); ?>
                        <?php while (have_posts()):
                            the_post(); ?>
                            <div class="col-xl-3 col-lg-6 col-sm-6 mb-5 d-flex justify-content-center align-items-center flex-column">
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

        <!-- -------------------- MATRICULAS ---------------- -->

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

        <!-- -------------------- INFRAESTRUCTURA ---------------- -->

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
            </div>
        </div>
    </section>

    <!-- -------------------- GARANTIAS ---------------- -->

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

    <!-- -------------------- TESTIMONIOS ---------------- -->
    <section class="container my-5 py-5">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-4 my-auto">
                        <hr class="border-2 opacity-100">
                    </div>
                    <div class="col-md-4">
                        <h2 class="text-center">Conoce los testimonios de nuestras familias</h2>
                    </div>
                    <div class="col-md-4 my-auto">
                        <hr class="border-2 opacity-100">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container-fluid">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="row">
                    <?php if (have_posts()): ?>
                        <?php query_posts("category_name=testimonios"); ?>
                        <?php while (have_posts()):
                            the_post(); ?>
                            <div class="col-md-6 text-center text-white testimonio">
                                <?php the_content(); ?>
                            </div>
                        <?php endwhile; ?>
                    <?php else: ?>
                    <?php endif; ?>
                    <?php wp_reset_query(); ?>
                </div>
            </div>
        </div>
    </section>

        <!-- -------------------- CONVENIOS ---------------- -->

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