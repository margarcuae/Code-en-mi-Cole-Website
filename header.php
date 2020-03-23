<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CEMC</title>

        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;900&family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.4/gsap.min.js"></script>


        <?php wp_head();?>

    </head>

    <body <?php body_class(); ?> >

     
    <!--
    <header class="header">
        <figure class="logotipo">
                <a href="index.php">
                    <img src="<?php echo get_template_directory_uri();?>/img/codecole.png" alt="" width="130">
                </a>
        </figure>
                
        <?php wp_nav_menu(
            array(
                'theme_location'=> 'top_menu',
                'menu_class' =>'menu font-montserrat' 
            )
        );?>
    </header>

    -->

    
 
    <header class="header">
        <figure class="logotipo">
            <a href="index.php">
                <img src="<?php echo get_bloginfo('template_directory'); ?>/img/codecole.png" alt="" width="130">
            </a>

            </figure>
    <!-- MENU - NAVEGADOR  -->
        <input type="checkbox" id="btn-menu">
        <label for="btn-menu"> <img src="img/menu.png" alt=""> </label>
        
        <nav class="menu font-montserrat">
        <ul class="menu2">
            <li>
                <a href="index.php">HOME</a>
            </li>
            <li class="no-responsive">
                <p>|</p>
            </li>
            <li class="submenu"> 
                <a href="quehacemos.php">QUÉ HACEMOS</a>
            </li>
            <li class="no-responsive">
                <p>|</p>
            </li>   
            <li>
                <a href="nosotros.php">NOSOTROS</a>
            </li>
            <li class="no-responsive">
                <p>|</p>
            </li>
            <li >
                <a href="eventos.php">EVENTOS</a>
            </li>
            <li class="no-responsive">
                <p>|</p>
            </li>
            <li>
                <a href="blog.php">BLOG</a>
            </li>
            <li class="no-responsive">
                <p>|</p>
            </li>
            <li>
                <a href="blog.php">CONTACTO</a>
            </li>
            <li class ="si-responsive">
                <input type="checkbox" id="btn-close" onclick="cambiar()" >
                <label for="btn-close"> <img src="img/cancel3.png" alt=""> </label>
            </li>
        </ul>
    </nav>
</header>


<script>
    function cambiar() {
        if(document.getElementById("btn-close").checked == true){
            document.getElementById("btn-menu").checked = false;
            document.getElementById("btn-close").checked = false;

        }
    }
</script>




<div style="
    height: 69px;
">

</div>