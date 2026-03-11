<?php get_header(); ?>
<div class="container-fluid">
    <!--------------------------------- DATOS ANIMAL --------------------------------->

    <div class="row my-5 ">
        <div class="col-md-11 mx-auto my-5 single-producto">

                        <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                        <div class="row">
                            <div class="col-md-4">

                                <?php the_post_thumbnail('full', array('class' => 'img-fluid h-100 w-100')); ?> <!-- mostarar imagen miniatura -->

                            </div>

                            <div class="col-md-1"></div>

                            <div class="col-md-7">
                            <h5><?php the_field('material-container'); ?></h5>

                            <h1><?php the_title(); ?></h1>
                            <span class="mb-3"><i class="fa-solid fa-circle-check" style="color: #4175fc;"></i><?php the_field('cualidad1'); ?></span>
                            <br>
                            <span class="mb-3"><i class="fa-solid fa-circle-check" style="color: #4175fc;"></i><?php the_field('cualidad2'); ?></span>
                            <br>
                            <span class="mb-3"><i class="fa-solid fa-circle-check" style="color: #4175fc;"></i><?php the_field('cualidad3'); ?></span>


                            <hr>
                            <p><?php the_content(); ?></p>
                            </div>
                            
                        </div>
                        <div class="row mt-5">
                            <div class="col-md-2"></div>
                            <div class="col-md-4 mx-auto text-center">
                                <h3 class="mb-4"><?php the_field('variante_de_precio_1'); ?></h3>
                                <h3 class="mb-4"><?php the_field('variante_de_precio_2'); ?></h3>
                                <h3 class="mb-4"><?php the_field('variante_de_precio_3'); ?></h3>
                                <h3 class="mb-4"><?php the_field('variante_de_precio_4'); ?></h3>

                            </div>
                            <div class="col-md-2"></div>

                        </div>
                        <div class="row">
                            <div class="col-md-6 mx-auto text-center">
                                <a href="tel:+569%2054376654" class="boton-cotizar">Cotizar</a>
                            </div>
                        </div>

<!-- ----------------------------- FANCYBOX ENTRADA ------------------------------- -->

                        <div class="row">
                            <div class="col-md-11 mx-auto my-4">
                                <h1 class="text-center my-5">Galería de imagenes</h1>

                                    <div class="row my-5">
                                        <div class="col-5">
                                            <?php $image = get_field('imagen1');
                                            if (!empty($image)): ?>
                                                <a href="<?php echo esc_url($image['url']); ?>" data-fancybox="gallery"
                                                    data-caption="Galería de imagenes">
                                                    <img class="img-fluid galeria-containers" src="<?php echo esc_url($image['url']); ?>"
                                                        alt="<?php echo esc_attr($image['alt']); ?>" />
                                            <?php endif; ?>
                                            </a>
                                        </div>
                                        <div class="col-4">
                                        <?php $image = get_field('imagen2');
                                            if (!empty($image)): ?>
                                                <a href="<?php echo esc_url($image['url']); ?>" data-fancybox="gallery"
                                                    data-caption="Galería de imagenes">
                                                    <img class="img-fluid galeria-containers" src="<?php echo esc_url($image['url']); ?>"
                                                        alt="<?php echo esc_attr($image['alt']); ?>" />
                                            <?php endif; ?>
                                            </a>
                                        </div>
                                        <div class="col-3">
                                            <?php $image = get_field('imagen3');
                                            if (!empty($image)): ?>
                                                <a href="<?php echo esc_url($image['url']); ?>" data-fancybox="gallery"
                                                    data-caption="Galería de imagenes">
                                                    <img class="img-fluid galeria-containers" src="<?php echo esc_url($image['url']); ?>"
                                                        alt="<?php echo esc_attr($image['alt']); ?>" />
                                            <?php endif; ?>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-7">
                                            <?php $image = get_field('imagen4');
                                            if (!empty($image)): ?>
                                                <a href="<?php echo esc_url($image['url']); ?>" data-fancybox="gallery"
                                                    data-caption="Galería de imagenes">
                                                    <img class="img-fluid galeria-containers" src="<?php echo esc_url($image['url']); ?>"
                                                        alt="<?php echo esc_attr($image['alt']); ?>" />
                                            <?php endif; ?>
                                            </a>
                                        </div>
                                        <div class="col-5">
                                            <?php $image = get_field('imagen5');
                                            if (!empty($image)): ?>
                                                <a href="<?php echo esc_url($image['url']); ?>" data-fancybox="gallery"
                                                    data-caption="Galería de imagenes">
                                                    <img class="img-fluid galeria-containers" src="<?php echo esc_url($image['url']); ?>"
                                                        alt="<?php echo esc_attr($image['alt']); ?>" />
                                            <?php endif; ?>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-3">
                                            <?php $image = get_field('imagen6');
                                            if (!empty($image)): ?>
                                                <a href="<?php echo esc_url($image['url']); ?>" data-fancybox="gallery"
                                                    data-caption="Galería de imagenes">
                                                    <img class="img-fluid galeria-containers" src="<?php echo esc_url($image['url']); ?>"
                                                        alt="<?php echo esc_attr($image['alt']); ?>" />
                                            <?php endif; ?>
                                            </a>
                                        </div>
                                        <div class="col-6">
                                            <?php $image = get_field('imagen7');
                                            if (!empty($image)): ?>
                                                <a href="<?php echo esc_url($image['url']); ?>" data-fancybox="gallery"
                                                    data-caption="Galería de imagenes">
                                                    <img class="img-fluid galeria-containers" src="<?php echo esc_url($image['url']); ?>"
                                                        alt="<?php echo esc_attr($image['alt']); ?>" />
                                            <?php endif; ?>
                                            </a>
                                        </div>
                                        <div class="col-3">
                                        <?php $image = get_field('imagen8');
                                            if (!empty($image)): ?>
                                                <a href="<?php echo esc_url($image['url']); ?>" data-fancybox="gallery"
                                                    data-caption="Galería de imagenes">
                                                    <img class="img-fluid galeria-containers" src="<?php echo esc_url($image['url']); ?>"
                                                        alt="<?php echo esc_attr($image['alt']); ?>" />
                                            <?php endif; ?>
                                            </a>
                                        </div>
                                    </div>
                            </div>
                        </div>


                        <?php endwhile; ?>	
                        <?php else : ?>  
                        <?php endif; ?>
                        <?php wp_reset_query(); ?>

        </div>

    </div>
    



<?php get_footer(); ?>