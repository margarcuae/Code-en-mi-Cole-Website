<?php /* Template Name: Blog */ ?>



<?php get_header();?>


    <div class="blog-body">
    
        <div class="column-1">
            <div class="blog-title">
                <h1>BLOG</h1>
                <p>ÚLTIMAS ENTRADAS</p>
            </div>    
            <div class="blog-section-2">
                <?php if ( function_exists( 'wpsp_display' ) ) wpsp_display( 23 ); ?>
            </div>
        </div>
                
    </div>

<?php get_footer();?>