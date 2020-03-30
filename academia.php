<?php /* Template Name: Academia */ ?>

<html>

<head>
    <?php include("head.php"); ?>
</head>

<body>
    <?php include("nav.php"); ?>
    <div class="font-lato" id="seccion1">
        <h1>Academia</h1>
        <p id="navega">Qué hacemos ? <span style="margin: 0 30px;"></span> Academia</p>
    </div>

    <div id="seccion2" class="font-lato">
        <div class="titulos-peque"><img src="<?php echo get_bloginfo('template_directory'); ?>/img/academia/conoce.png" alt="">
            <h2>CONOCE</h2>
        </div>
        <div class="titulos-peque"><img src="<?php echo get_bloginfo('template_directory'); ?>/img/academia/aprende.png" alt="">
            <h2>APRENDE</h2>
        </div>
        <div class="titulos-peque"><img src="<?php echo get_bloginfo('template_directory'); ?>/img/academia/crea.png" alt="">
            <h2>CREA</h2>
        </div>
    </div>
    <p class="font-lato" style="color: #999999; margin: 40px 15%; text-align: center; font-size: 1.4rem;">
        Con nuestros programas especializados buscamos potenciar las habilidades creativas de nuestros estudiantes
        convirtiendo sus ideas en proyectos tecnológicos.
    </p>

    <div id="seccion3">
        <div style="grid-area: foto1;"><img src="<?php echo get_bloginfo('template_directory'); ?>/img/academia/foto1.png" class="center-cropped" alt=""></div>
        <div style="grid-area: foto2;"><img src="<?php echo get_bloginfo('template_directory'); ?>/img/academia/foto2.png" class="center-cropped" alt=""></div>
        <div style="grid-area: foto3;"><img src="<?php echo get_bloginfo('template_directory'); ?>/img/academia/foto3.png" class="center-cropped" alt=""></div>

        <div style="grid-area: texto1;">
            <h2 class="font-montserrat titulo-sec3">PENSAMIENTO COMPUTACIONAL</h2>
            <div class="font-lato" style="margin-bottom: 20px;">
                <h3>Edad Sugerida:</h3>
                <p class="acompana">De 4 a 7 años</p>
                <p class="texto">Se trata de la alfabetización digital, y que como tal hay que comenzar desde las primeras etapas del desarrollo individual, al igual como sucede con otras habilidades clave: la lectura y las habilidades matemáticas.</p>
                <h3>Duración:</h3>
                <p class="acompana">12 sesiones</p> <br>
                <p class="acompana" style="font-size: 0.8rem;">150 minutos cada sesión</p>
            </div>
            <button class="boton">DESCARGAR PDF</button>
        </div>

        <div style="grid-area: texto2;">
            <h2 class="font-montserrat titulo-sec3">DISEÑO Y CREACIÓN DE VIDEOJUEGOS</h2>
            <div class="font-lato" style="margin-bottom: 20px;">
                <h3>Edad Sugerida:</h3>
                <p class="acompana">De 8 a 11 años</p><br>
                <p class="acompana"> <span style="margin-left: 138px;"></span>   De 12 a 16 años</p>
                <p class="texto">Permite aprender a programar, de una manera dinámica y ofrece un producto que a agrada a los más jóvenes, dando un gran porcentaje de que usen nuestra enseñanza como base para crear videojuegos con mayor dificultad o guiarse a otras ramas de la ciencia de la computación.</p>
                <h3>Duración:</h3>
                <p class="acompana">12 sesiones</p> <br>
                <p class="acompana" style="font-size: 0.8rem;">150 minutos cada sesión</p>
            </div>
            <button class="boton">DESCARGAR PDF</button>
        </div>
        <div style="grid-area: texto3;">
            <h2 class="font-montserrat titulo-sec3">CREACIÓN DE APLICACIONES</h2>
            <div class="font-lato" style="margin-bottom: 20px;">
                <h3>Edad Sugerida:</h3>
                <p class="acompana">De 12 a 16 años</p>
                <p class="texto">El curso enseña a programar aplicaciones móviles desde las más básicas hata las más sofisticadas, con utilización de sensores, gestión de datos y conexión a Internet mediante programación por bloques, además, publicar tus aplicaciones en Google Play</p>
                <h3>Duración:</h3>
                <p class="acompana">12 sesiones</p> <br>
                <p class="acompana" style="font-size: 0.8rem;">150 minutos cada sesión</p>
            </div>
            <button class="boton">DESCARGAR PDF</button>
        </div>
        
    </div>

    <div id="seccion4" class="font-montserrat">
        <div>
            <p style="font-size: 1.4rem ;">Te gustaría recibir un taller de inducción gratuito? <br> Escríbenos y nos pondremos en contacto contigo.</p>
            <img src="<?php echo get_bloginfo('template_directory'); ?>/img/academia/programador.png" alt="" height="300px">
        </div>
        <div>
            <div id="cuadrito">
                <!-- <p style="font-size: 1rem; font-weight: bold; padding-top: 25px; margin:0"> 
                    PREINSCRÍBETE A LA ACADEMIA
                </p> -->
                <iframe width="640px" height= "400px" src= "https://forms.office.com/Pages/ResponsePage.aspx?id=DQSIkWdsW0yxEjajBLZtrQAAAAAAAAAAAAO__SnT6j1URFhEN0g5VVlJRzRPR1pKSFRHVEUyUjE0Qy4u&embed=true" frameborder= "0" marginwidth= "0" marginheight= "0" style= "border: none; max-width:100%; max-height:100vh" allowfullscreen webkitallowfullscreen mozallowfullscreen msallowfullscreen> </iframe>
            </div>
        </div>
    </div>
    <?php include('footer.php'); ?>
</body>

</html>

<style>
    h1 {
        font-size: 4.5rem;
    }

    #navega {
        position: absolute;
        margin: 0;
        bottom: 20px;
        font-size: 1.1rem;
        font-weight: normal;
    }

    #seccion1 {
        position: relative;
        padding-top: 30px;
        padding-left: 55px;
        font-weight: bold;
        height: 250px;
        background-image: url('<?php echo get_bloginfo('template_directory'); ?>/img/academia/background.png');
        background-repeat: no-repeat;
        color: white;
        background-color: #58BBC9;
    }

    #seccion2 {

        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        margin: 100px 10% 0 10%;
        column-gap: 50px;
        justify-items: center;
        flex-direction: column;
        text-align: center;
    }

    .titulos-peque {
        font-size: 0.9rem;
        color: #0066FF;
    }

    #seccion3 {
        background-color: #e5e5e5;
        display: grid;
        grid-template-areas:
            'foto1 texto1'
            'foto2 texto2'
            'foto3 texto3';
        grid-template-columns: 1fr 1fr;
        justify-items: center;
        text-align: center;
        padding: 100px 10%;
        row-gap: 100px;
        column-gap: 60px;
    }

    .titulo-sec3 {
        font-size: 1.4rem;
        font-weight: bold;
        color: #3bb8ad;
    }

    .center-cropped {
        object-fit: none;
        /* Do not scale the image */
        object-position: center;
        /* Center the image within the element */
        height: 300px;
        width: 400px;
    }

    #seccion4 {

        display: grid;
        grid-template-columns: 1fr 1fr;
        margin: 30px 10%;
        column-gap: 30px;
        flex-direction: column;
        justify-items: center;
        text-align: center;
    }

    h3{
        display: inline;
        color: #666666;
    }
    
    .acompana{
        display: inline;
        color: #666666;
    }

    .texto{
        color:#4d4d4d;
        text-align: justify;
        text-justify: inter-word;
    }

    .boton{
        background-color: #58bbc9;
    }

    #cuadrito{
        height: 400px;
        width: 400px;
        -webkit-box-shadow: 13px 17px 31px -4px rgba(0,0,0,0.55);
        -moz-box-shadow: 13px 17px 31px -4px rgba(0,0,0,0.55);
        box-shadow: 13px 17px 31px -4px rgba(0,0,0,0.55);
    }



    @media screen and (max-width: 600px) {

        #seccion2 {
            
            grid-template-columns: 1fr;
            margin: 50px 10% 0 10%;
            row-gap: 25px;
            
          
        }

        #seccion3{
            grid-template-areas:
            'texto1' 'foto1' 
            'texto2' 'foto2' 
            'texto3' 'foto3' ;
            grid-template-columns: 1fr;
            padding: 40px 8%;  
            row-gap: 40px;
        }

        #seccion4{
            grid-template-columns: 1fr;
        }

        #cuadrito{
            height: 400px;
            width: 270px;
            -webkit-box-shadow: 13px 17px 31px -4px rgba(0,0,0,0.55);
            -moz-box-shadow: 13px 17px 31px -4px rgba(0,0,0,0.55);
            box-shadow: 13px 17px 31px -4px rgba(0,0,0,0.55);
        }

        .center-cropped{
            height: 280px;
            width: 300px;
        }


        h1{
            font-size: 40px;
        }

        #seccion1{
            height: 200px;
        }

    }
</style>