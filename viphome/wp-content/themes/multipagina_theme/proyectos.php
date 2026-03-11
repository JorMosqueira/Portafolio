<?php
/*
Template Name: Proyectos
*/
?>

<?php get_header(); ?>


<main>
<div class="container-fluid">
    <div class="row banner-proyectos">
        <div class="col-md-9 my-5 mx-auto ">
            <div class="row">
                <div class="col-md-10 mx-auto text-center">
                        <div class="row">
                            <div class="col-md-4 my-auto">
                                <hr class="border-2 opacity-100 text-light">
                            </div>
                            <div class="col-md-4">
                                <h2 class="text-light fw-bolder mb-3">Nuestros proyectos</h2>
                            </div>
                            <div class="col-md-4 my-auto">
                                <hr class="border-2 opacity-100 text-light">
                            </div>
                        </div>

                </div>

            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row proyectos py-5">
        <div class="col-md-10 mx-auto">
            <div class="row pt-4">
                    <?php if (have_posts()) : ?>
                    <?php query_posts("category_name=proyectos"); ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <div class="col-md-5">
                            <?php the_post_thumbnail('full', array('class' => 'img-fluid sombra')); ?>
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-md-6">
                        <h1 class="mb-4"><?php the_title(); ?></h1>
                        <span class="ubicacion"><i class="fa-solid fa-location-dot mr-4" style="color: #4175fc;"></i><?php the_field('ubicacion'); ?></span>
                        <p><?php the_content(); ?></p>

                        <span class="mb-4"><i class="fa-solid fa-circle-check" style="color: #4175fc;"></i><?php the_field('garantia1'); ?></span>
                        <br>
                        <br>

                        <span class="mb-4"><i class="fa-solid fa-circle-check" style="color: #4175fc;"></i><?php the_field('garantia2'); ?></span>
                        <br>
                        <br>

                        <span class="mb-4"><i class="fa-solid fa-circle-check" style="color: #4175fc;"></i><?php the_field('garantia3'); ?></span>
                        <br>
                        <br>

                        </div>

                    <?php endwhile; ?>	
                    <?php else : ?>  
                    <?php endif; ?>
                    <?php wp_reset_query(); ?>
                    
                    <div class="col-md-12">
                        <div class="owl container mt-5">
                            <div class="owl-carousel owl-theme">

                            <div class="item"><?php echo '<img src="../wp-content/themes/multipagina_theme/img/ffxvi/galeria1-proyecto1.png" class="img-fluid">'?></div>
                            <div class="item"><?php echo '<img src="../wp-content/themes/multipagina_theme/img/ffxvi/galeria2-proyecto1.png" class="img-fluid">'?></div>
                            <div class="item"><?php echo '<img src="../wp-content/themes/multipagina_theme/img/ffxvi/galeria3-proyecto1.png" class="img-fluid">'?></div>
                            <div class="item"><?php echo '<img src="../wp-content/themes/multipagina_theme/img/ffxvi/galeria4-proyecto1.png" class="img-fluid">'?></div>
                            <div class="item"><?php echo '<img src="../wp-content/themes/multipagina_theme/img/ffxvi/galeria5-proyecto1.png" class="img-fluid">'?></div>


                            </div>
                        </div>
                    </div>

            </div>
            
        </div>
    </div>
</div>
<div class="container-fluid bg-galeria">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <h1>Proyectos</h1>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row proyectos py-5">
        <div class="col-md-10 mx-auto">
            <div class="row pt-4">
                    <?php if (have_posts()) : ?>
                    <?php query_posts("category_name=proyectos2"); ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <div class="col-md-1"></div>

                        <div class="col-md-6">
                            <h1 class="mb-4"><?php the_title(); ?></h1>
                            <span class="ubicacion"><i class="fa-solid fa-location-dot mr-4" style="color: #4175fc;"></i><?php the_field('ubicacion'); ?></span>
                            <p><?php the_content(); ?></p>

                            <span class="mb-4"><i class="fa-solid fa-circle-check" style="color: #4175fc;"></i><?php the_field('garantia1'); ?></span>
                            <br>
                            <br>

                            <span class="mb-4"><i class="fa-solid fa-circle-check" style="color: #4175fc;"></i><?php the_field('garantia2'); ?></span>
                            <br>
                            <br>

                            <span class="mb-4"><i class="fa-solid fa-circle-check" style="color: #4175fc;"></i><?php the_field('garantia3'); ?></span>
                            <br>
                            <br>


                        </div>

                        <div class="col-md-5">
                            <?php the_post_thumbnail('full', array('class' => 'img-fluid sombra')); ?>
                        </div>

                    <?php endwhile; ?>	
                    <?php else : ?>  
                    <?php endif; ?>
                    <?php wp_reset_query(); ?>
                    
                    <div class="col-md-12">
                        <div class="owl container mt-5">
                            <div class="owl-carousel owl-theme">

                            <div class="item"><?php echo '<img src="../wp-content/themes/multipagina_theme/img/ffxvi/galeria1-proyecto2.png" class="img-fluid">'?></div>
                            <div class="item"><?php echo '<img src="../wp-content/themes/multipagina_theme/img/ffxvi/galeria2-proyecto2.png" class="img-fluid">'?></div>
                            <div class="item"><?php echo '<img src="../wp-content/themes/multipagina_theme/img/ffxvi/galeria3-proyecto2.png" class="img-fluid">'?></div>
                            <div class="item"><?php echo '<img src="../wp-content/themes/multipagina_theme/img/ffxvi/galeria4-proyecto2.png" class="img-fluid">'?></div>
                            <div class="item"><?php echo '<img src="../wp-content/themes/multipagina_theme/img/ffxvi/galeria5-proyecto2.png" class="img-fluid">'?></div>




                            </div>
                        </div>
                    </div>

            </div>
            
        </div>
    </div>
</div>


</main>

<?php get_footer(); ?>