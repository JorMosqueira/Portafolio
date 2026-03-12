<?php
/*
Template Name: Quienes somos
*/
?>

<?php get_header(); ?>

<!-- SLIDER DINÁMICO -->

<?php
echo do_shortcode('[smartslider3 slider="3"]');
?>

<!-- ¿QUÉ ES CONUPIA? -->
<section class="seccion-separador">
    <div class="container col-md-10 mx-auto">
        <div class="row">
            <?php if (have_posts()): ?>
                <?php query_posts("category_name=info-conupia"); ?>
                <?php while (have_posts()):
                    the_post(); ?>

                    <div class="col-md-7 info-conupia my-auto">
                        <h2 class="titulos-azul">
                            <?php the_title(); ?>
                        </h2>
                        <p>
                            <?php the_content(); ?>
                        </p>
                    </div>
                    <div class="col-md-5 margen-break-sm">
                        <?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?>
                    </div>

                <?php endwhile; ?>
            <?php else: ?>
            <?php endif; ?>
            <?php wp_reset_query(); ?>
        </div>
    </div>
</section>

<!-- MISIÓN Y VISIÓN -->
<section class="fondo-mv">
    <div class="container col-md-10 mx-auto">
        <div class="row">
            <?php if (have_posts()): ?>
                <?php query_posts("category_name=info-conupia"); ?>
                <?php while (have_posts()):
                    the_post(); ?>

                    <div class="col-md-5 card-mv">
                        <div class="margen-carta">
                            <img class="mb-4" src="<?php echo get_stylesheet_directory_uri(); ?>/img/mision.png" alt="">
                            <h2>Misión</h2>
                            <p>Promover condiciones que contribuyan al desarrollo económico y productivo de las Mipyme,
                                impulsando
                                políticas públicas apropiadas para el mejoramiento de la productividad de las empresas y las
                                competencias de los empresarios y sus trabajadores.</p>
                        </div>
                    </div>

                    <div class="col-md-2"></div>

                    <div class="col-md-5 card-mv my-auto">
                        <div class="margen-carta">
                            <img class="mb-4" src="<?php echo get_stylesheet_directory_uri(); ?>/img/vision.png" alt="">
                            <h2>Visión</h2>
                            <p>Ser la entidad gremial que mejor represente los intereses y aspiraciones de las Mipyme de
                                Chilenas.
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

<!-- NUESTRAS EXPECTATIVAS -->
<section class="seccion-separador">
    <div class="container col-md-10 mx-auto">
        <div class="row">
            <h2 class="titulos-azul mb-5">Nuestras expectativas</h2>
            <div class="col-md-6">
                <!-- Imagen -->
                <img class="w-100 imagen-objetivos mb-4"
                    src="<?php echo get_stylesheet_directory_uri(); ?>/img/imagen-objetivo-1.jpeg" alt="">

                <!-- Información -->
                <h4 class="subtitulo-somos mb-3">Objetivos</h4>
                <p class="mb-3">Desde su formación como Confederación Gremial, ha luchado por resguardar los intereses
                    de sus asociados. Y tiene como objetivo permanente ser el interlocutor válido de un amplio espectro
                    empresarial constituido por micro, pequeños y medianos empresarios, industriales, de los servicios y
                    artesanos, muchos de los cuales son trabajadores por cuenta propia.</p>
            </div>
            <div class="col-md-6 margen-break-sm">
                <!-- Imagen -->
                <img class="w-100 imagen-objetivos mb-4"
                    src="<?php echo get_stylesheet_directory_uri(); ?>/img/imagen-objetivo-2.jpg" alt="">

                <!-- Información -->
                <h4 class="subtitulo-somos mb-3">Estrategia</h4>
                <p class="mb-3">Entre las principales actividades, están la promoción de un marco de políticas públicas
                    y leyes favorables a las Mipyme para el fomento de ellas y su representación ante organismos
                    gremiales, gubernamentales e internacionales.</p>

            </div>
        </div>
        <hr class="lineas-horizontales seccion-separador">
    </div>
</section>



<!-- NUESTRA EMPRESA -->
<section class="seccion-separador">
    <div class="container col-md-10 mx-auto">
        <div class="row">
            <div class="col-md-6">
                <img class="w-100 imagen-objetivos mb-3"
                    src="<?php echo get_stylesheet_directory_uri(); ?>/img/imagen-empresas.jpg" alt="">
            </div>
            <div class="col-md-1">

            </div>
            <div class="col-md-5 my-auto">
                <h2 class="titulos-azul mb-4">Nuestra confederación</h2>
                <h4 class="subtitulo-somos mb-4">Valores y Ética Empresarial - Conupia</h4>
                <div class="valores-lista">
                    <div class="listados my-auto mb-3">
                        <img class="check-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/check-icon.png"
                            alt="">
                        <p class="m-0">Igualdad de oportunidades</p>
                    </div>


                    <div class="listados my-auto mb-3">
                        <img class="check-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/check-icon.png"
                            alt="">
                        <p class="m-0">Superación de las brechas de desigualdad</p>
                    </div>


                    <div class="listados my-auto mb-3">
                        <img class="check-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/check-icon.png"
                            alt="">
                        <p class="m-0">Cooperación</p>
                    </div>


                    <div class="listados my-auto mb-3">
                        <img class="check-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/check-icon.png"
                            alt="">
                        <p class="m-0">Solidaridad</p>
                    </div>

                </div>
            </div>
        </div>
        <hr class="lineas-horizontales seccion-separador">
    </div>
</section>



<!-- NUESTRA ESTRUCTURA -->
<section class="seccion-separador">
    <div class="container col-md-10 mx-auto">
        <div class="row">
            <div class="col-md-6 my-auto">
                <h2 class="titulos-azul mb-4">Nuestra estructura</h2>
                <h4 class="subtitulo-somos mb-3">Estructura Orgánica</h4>
                <p>Un Directorio Nacional compuesto por el Presidente Nacional y 26 Directores Nacionales, siendo la
                    máxima autoridad la Asamblea Nacional agrupando a más de 60 asociaciones de base y Confederaciones,
                    Federaciones regionales, Asociaciones comunales, sectoriales y de género a lo largo de todo el País.
                    <span>En su Directorio Nacional están representadas todas las regiones del país.</span>
                </p>
            </div>
            <div class="col-md-6">
                <img class="w-100 imagen-objetivos mb-3"
                    src="<?php echo get_stylesheet_directory_uri(); ?>/img/imagen-organica.jpeg" alt="">
            </div>
        </div>
    </div>
</section>


<!-- CONUPIA EN IMÁGENES -->
<section class="seccion-separador">
    <div class="container col-md-10 mx-auto">
        <h2 class="titulos-negro">Imágenes auditorio</h2>
        <hr class="my-4 lineas-horizontales">
        
        <!-------Primera fila ------->
        <div class="row my-3">
            <!-- Imagen 1 -->
            <div class="col-md-4 col-sm-12"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/conupia1.jpeg" data-fancybox="gallery" data-caption="">
            <img class="img-fluid img-auditorio w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/img/conupia1.jpeg"></a></div>
            
            <!-- Imagen 2 -->
            <div class="col-md-4 col-sm-12"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/conupia2.jpeg" data-fancybox="gallery" data-caption="">
            <img class="img-fluid img-auditorio w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/img/conupia2.jpeg"></a></div>
            
            <!-- Imagen 3 -->
            <div class="col-md-4 col-sm-12"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/conupia3.jpeg" data-fancybox="gallery" data-caption="">
            <img class="img-fluid img-auditorio w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/img/conupia3.jpeg"></a></div>
        </div>

        <!------- Tercera fila ------->
        <div class="row mt-3">
            <!-- Imagen 1 -->
            <div class="col-md-6 col-sm-12"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/conupia6.jpeg" data-fancybox="gallery" data-caption="">
            <img class="img-fluid img-auditorio w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/img/conupia6.jpeg"></a></div>
            
            <!-- Imagen 2 -->
            <div class="col-md-6 col-sm-12"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/conupia7.jpeg" data-fancybox="gallery" data-caption="">
            <img class="img-fluid img-auditorio w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/img/conupia7.jpeg"></a></div>

        </div>

                <!------- Segunda fila ------->
        <div class="row my-3">
            <!-- Imagen 1 -->
            <div class="col-md-3 col-sm-12"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/conupia8.jpeg" data-fancybox="gallery" data-caption="">
            <img class="img-fluid img-auditorio w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/img/conupia8.jpeg"></a></div>

            <!-- Imagen 2 -->
            <div class="col-md-6 col-sm-12"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/conupia4.jpeg" data-fancybox="gallery" data-caption="">
            <img class="img-fluid img-auditorio w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/img/conupia4.jpeg"></a></div>
            <!-- Imagen 3 -->
            <div class="col-md-3 col-sm-12"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/conupia10.jpeg" data-fancybox="gallery" data-caption="">
            <img class="img-fluid img-auditorio w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/img/conupia10.jpeg"></a></div>
        </div>

    </div>
</section>
<!-- NUESTRAS REDES -->
<section class="container-fluid px-0">
    <div class="row mx-0">
        <div class="col-md-12 p-0">
            <div class="conector-matricula text-white">
                <div class="row mx-0">
                    <div class="col-lg-5 col-md-12 col-sm-12 niños-matricula">
                    </div>
                    <div class="col-lg-6 col-sm-8 my-auto mx-sm-auto px-0">
                        <div class="info-matricula-conector">
                            <h2 class="mb-4">Nuestras redes</h2>
                            <p class="mb-3">CONUPIA participa en foros de desarrollo productivo a nivel
                                nacional-regional y en actividades realizadas por diversos organismos internacionales:
                            </p>

                            <div class="listados my-auto mb-2">
                                <img class="check-icon"
                                    src="<?php echo get_stylesheet_directory_uri(); ?>/img/flecha-arriba.png" alt="">
                                <p class="m-0">CLAMPI (Confederación Latinoamericana de la Mediana y Pequeña Industria).
                                </p>
                            </div>
                            <div class="listados my-auto mb-2">
                                <img class="check-icon"
                                    src="<?php echo get_stylesheet_directory_uri(); ?>/img/flecha-arriba.png" alt="">
                                <p class="m-0">OLAMP (Organización Latinoamericana de la Mediana y Pequeña Empresa).</p>
                            </div>
                            <div class="listados my-auto mb-2">
                                <img class="check-icon"
                                    src="<?php echo get_stylesheet_directory_uri(); ?>/img/flecha-arriba.png" alt="">
                                <p class="m-0">ALAMPYME (Asociación Latinoamericana de Micros, Pequeños y Medianos
                                    Empresarios AG).</p>
                            </div>
                            <div class="listados my-auto mb-2">
                                <img class="check-icon"
                                    src="<?php echo get_stylesheet_directory_uri(); ?>/img/flecha-arriba.png" alt="">
                                <p class="m-0">CEPAL (Comisión Económica para América Latina y el Caribe).</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- COLABORADORES -->
<section class="seccion-separador">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-11 mx-auto mb-4">
                <div class="row">   

                    <div class="col-md-1"></div>
                    
                    <div class="col-md-5">
                        <img class="check-icon colaborador w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/img/banco-estado-logo-vector.png" alt="">
                        <!--acá debe ir una imagen de colaborador 1-->
                    </div>

                    <div class="col-md-5">
                        <img class="check-icon colaborador w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/img/foto-sct-noticia-removebg-preview.png" alt="">
                        <!--acá debe ir una imagen de colaborador 2-->
                    </div>
                    <div class="col-md-1"></div>

                </div>
            </div>


        </div>
    </div>
</section>

<?php get_footer(); ?>