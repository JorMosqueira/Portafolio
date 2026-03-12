<?php get_header(); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 mx-auto my-5">
            
            <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?> 
                        
                <h1><?php the_title(); ?></h1>
                <p><?php the_content(); ?></p>
                
            <?php endwhile; ?>	
            <?php else : ?>  
            <?php endif; ?>
            <?php wp_reset_query(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>