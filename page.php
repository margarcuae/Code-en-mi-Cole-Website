<?php get_header();?>

    <div class="page-body">
        <div class="page-title">
            <h1> <?php the_title(); ?> </h1>
        </div>
        
        <div class="page-section-2">
            <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
                <?php the_content();?>
            <?php endwhile; endif;?>
        </div>
    </div>

    
<?php get_footer();?>