<?php get_header();?>


    <div class="archive-body">
        <div class="archive-title">
            <h1> <?php single_cat_title(); ?> </h1>

        </div>
        <div class="archive-section-2">
            <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
                <h3><?php the_title();?></h3>
                <?php the_excerpt();?>
                <a href="<?php the_permalink();?>"> Leer Más </a>
                
                <hr>
            <?php endwhile; endif;?>
        </div>
    </div>

    

<?php get_footer();?>