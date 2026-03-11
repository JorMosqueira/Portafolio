<?php
/*
Template Name: Inicio
*/
?>

<?php get_header(); ?>



<!-- ----------------------------------- TARJETA DE PRESENTACION --------------------------------------------- -->
<div class="container-fluid mb-5 ">
    <div class="row banner-home">
        <div class="col-md-10 mx-auto">
            <div class="row">
                <div class="col-md-5">
                    <h1 class="text-light fw-bolder mb-2">¡Bienvenido!</h1>
                    <h3 class="">¡Pequeño explorador!</h3>
                    <p class="mt-3">Explora nuestro sitio web y ve todo lo que tiene para ofrecer nuestro juego de mesa</p>
                </div>
                <div class="col-md-6">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/personas.png" alt="Personas felices dando la bienvenida" class="personas">
                </div>
            </div>
        </div>

    </div>
</div>
<section class="container-fluid ">

    <div class="row presentacion" >
        <div class="col-md-8 mx-auto ">
            <div class="row ">
                <div class="col-lg-5 p-0 col-md-12">
                    <img class="img-fluid " src="<?php echo get_stylesheet_directory_uri(); ?>/img/presentacion.png">
                </div>
                <div class="col-lg-7 col-md-12">
                            <h1>¿Qué es Gesto a gesto?</h1>
                            <h4>Ve cómo nos surgió la idea de hacer este juego de mesa</h4>

                            <p class="my-5 text-start">Gesto a Gesto consiste en un juego de cartas con el desafío de poder aprender el abecedario y gestos de la lengua de señas chilena, con dos modalidades: La primera se basa en deletreo de palabras con una guía de abecedario e ilustraciones entendibles para el jugador, que va de la mano con una modificación para aumentar la dificultad para jugadores más avanzados en el mundo de esta maravillosa lengua.</p>
                            <p class="my-5 text-start">La segunda modalidad consiste en un sistema similar, pero en vez de emplear los gestos y letras, consiste en la lectura de labios para poder introducir a mas personas en los distintos contextos que podemos vivir nosotros, como las personas de  la comunidad sordo muda.</p>

                </div>
            </div>
        </div>
    </div>
</section>
<section class="container-fluid" id="producto">

    <!-- ----------------------------------- PRESENTACION PRODUCTO --------------------------------------------- -->
    <div class="row imagenes-producto">
        <div class="col-md-10 mx-auto my-5">
            <div class="row mb-5">
                        <div class="col-md-3 my-auto mx-auto">
                        <hr class="border-2 opacity-100">
                    </div>
                    <div class="col-md-4 mx-auto">
                        <h2 class="text-center">Imágenes de Gesto a Gesto</h2>
                    </div>
                    <div class="col-md-3 my-auto mx-auto">
                        <hr class="border-2 opacity-100">
                    </div>
            </div>
        </div>
        
    </div>
</section>
<section class="container mb-5 carta-margin">
    <div class="row d-flex justify-content-evenly ">
        <div class="col-xl-3 col-lg-4 col-sm-6 mb-5 d-flex justify-content-center">
            <div class="card">
                <div class="card-container">
                    <div class="card-face front-face">
                        <img class="img-fluid " src="<?php echo get_stylesheet_directory_uri(); ?>/img/ilustracion.jpg">
                    </div>
                                        <div class="card-face back-face">
                                            <div class="container-about">
                                                <h5>Rata topo:</h5>
                                                <span class="my-2 text-center">
                                                Decidimos elegir a una rata topo, ya que estos peculiares animales, tienen la característica de ser prácticamente ciegos y sordos. siendo un pequeño animal que no recibe el valor que se merece.</span>

                                            </div>
                                        </div>
                </div>
                
            </div>
            
        </div>
        <div class="col-xl-3 col-lg-4 col-sm-6 mb-5 d-flex justify-content-center">
            <div class="card">
                <div class="card-container">
                    <div class="card-face front-face">
                        <img class="img-fluid " src="<?php echo get_stylesheet_directory_uri(); ?>/img/ilustracion.jpg">
                    </div>
                                        <div class="card-face back-face">
                                            <div class="container-about">
                                                <h5>Portada:</h5>
                                                <span class="my-2 text-center">
                                                Nosotros desarrollamos nuestra portada con el sentido de demostrar una de las posibles situaciones que pueden ocurrir al jugar nuestro juego, como tambien el brindar conocimiento indirecto con nuestras mascotas que explicamos en las siguientes láminas.
                                                </span>

                                            </div>
                                        </div>
                </div>
                
            </div>
            
        </div>
        <div class="col-xl-3 col-lg-4 col-sm-6 mb-5 d-flex justify-content-center">
            <div class="card">
                <div class="card-container">
                    <div class="card-face front-face">
                        <img class="img-fluid " src="<?php echo get_stylesheet_directory_uri(); ?>/img/ilustracion.jpg">
                    </div>
                                        <div class="card-face back-face">
                                            <div class="container-about">
                                                <h5>Jirafa:</h5>
                                                <span class="my-2 text-center">
                                                Nosotros elegimos a una jirafa por su peculiar manera de comunicación que es prácticamente nula, a excepción de pequeños gruñidos con sus parientes de especie, pero en el plano general no hay muy poca comunicación.
                                                </span>

                                            </div>
                                        </div>
                </div>
                
            </div>
            
        </div>  
              
    </div>
</section>

<section class="container-fluid seccion-reglas" id="reglas">
<!-- ----------------------------------- REGLAS --------------------------------------------- -->
    <div class="row mt-5">
        <div class="col-md-11 mx-auto my-5">
            <div class="row">
                    <div class="col-md-4 my-auto mx-auto">
                        <hr class="border-2 opacity-100">
                    </div>
                    <div class="col-md-3 mx-auto">
                        <h2 class="text-center">Reglas</h2>
                    </div>
                    <div class="col-md-4 my-auto mx-auto">
                        <hr class="border-2 opacity-100">
                    </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-11 mx-auto my-4">
            <div class="row">
                    <?php if (have_posts()): ?>
                    <?php query_posts("category_name=reglas&showposts=6"); ?>
                    <?php while (have_posts()): the_post(); ?>

                        <!-- ----------- TARJETA DE SERVICIO ---------- -->
                        <div class="col-md-4 text-center mt-5 d-flex">
                            <div class="tarjeta-reglas">

                                <?php the_post_thumbnail('full', array('class' => 'testimonio-imagen')); ?>
                                <h4><?php the_title(); ?></h4>
                                <p><?php the_content(); ?></p>
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



 


<?php get_footer(); ?>