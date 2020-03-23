<?php get_header();?>


<div class="single-body">
    
    <div class="single-grid-two-columns">
        <div>
            <div class="single-title">
                <h1> <?php the_title(); ?> </h1>
            </div>

            
            <div class="single-section-1">    
                <?php if(has_post_thumbnail()):?>
                    <img src="<?php the_post_thumbnail_url('largest');?>">
                <?php endif;?>
            </div>
            
            <div class="single-section-2">
                <?php if (have_posts()) : while(have_posts()) : the_post(); ?>

                    <?php the_content();?>

                <?php endwhile; endif;?>
            </div>
        </div>
            
           
        <div>
            <div class="single-section-2">
                <h2>RECIENTES</h2>
                <div class="single-grid-rows">
                    <?php /* For Local */  // if ( function_exists( 'wpsp_display' ) ) wpsp_display( 30 ); ?>
                    <?php /* For Deployed */  if ( function_exists( 'wpsp_display' ) ) wpsp_display( 42 ); ?>
                </div>
            </div>
        </div>        
    </div>
</div>
    


<?php get_footer();?>