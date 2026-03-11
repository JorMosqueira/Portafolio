<?php wp_footer(); ?>

<!-- ----------------------FOOTER------------------- -->

<footer class="container-fluid">
    <div class="row">
        <div class="col-md-11 mx-auto">
            <div class="row">

                <?php if (have_posts()): ?>
                    <?php query_posts("category_name=footer"); ?>
                    <?php while (have_posts()):
                        the_post(); ?>
                        <div class="col-md-2 logo-footer">
                            <?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?>
                        </div>
                        <?php the_content(); ?>
                    <?php endwhile; ?>
                <?php else: ?>
                <?php endif; ?>
                <?php wp_reset_query(); ?>

            </div>
        </div>
    </div>
</footer>


<script src="https://kit.fontawesome.com/c0e79807e2.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
    integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS"
    crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


</body>
</html>

