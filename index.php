<?php 
/*
*
* 	Template Name: Página de Inicio
* 	
*/
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <?php include("head.php"); ?>
</head>
<body>

    <?php include("nav.php"); ?>

    <?php 
        
        if ( get_post_meta(get_the_ID(), 'mostrar', true) == "si" ){
            
            if ( have_posts() ) : while ( have_posts() ) : the_post();
            get_template_part( 'modal', get_post_format() );
            endwhile; endif;
            
        }
    ?>


 <?php include("casa.php"); ?> 
    
<?php include("footer.php"); ?> 
    
</body>
</html>