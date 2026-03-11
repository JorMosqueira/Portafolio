<?php
/*
Template Name: Productos
*/
?>

<?php get_header(); ?>


<main>

<section class="container-fluid">
    <div class="row banner-productos">
        <div class="col-md-10 my-5 mx-auto d-flex justify-content-center flex-column align-items-center">
                <div class="row ">
                    <div class="col-md-12 mx-auto ">
                        <h1 class="text-light fw-bolder mb-3">Nuestros productos</h1>
                    </div>

                </div>
            </div>
    </div>
    <div class="row">
        <div class="col-md-11 mx-auto my-4">
            <div class="row">
                <div class="col-md-12 ">
                        <?php echo do_shortcode('[caf_filter id="55"]'); ?>

                </div>
            </div>
        </div>


    </div>

</section>

</main>

<?php get_footer(); ?>