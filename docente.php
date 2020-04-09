<?php /* Template Name: Docente */ ?>
<html>
    <head>
    <?php include("head.php"); ?>
    </head>

    <body>
        <?php include("nav.php"); ?>
        <div class="center" width="100%">
            <img id="imagen-n1" src="<?php echo get_bloginfo('template_directory'); ?>/img/docente.png" alt="Conferencia" width="30%" >
            <h1 id="csc-title" class="font-lato">Programa de Formación Docente<br> <span style="color:blue"> en Ciencia de la Computación </span> </h1>
            <p id="p-text" class="font-lato">
               Buscamos introducir a los participantes al mundo de la Ciencia de la Computación, conocer sus fundamentos y aplicarlos, aprendiendo y desarrollando el pensamiento computacional a través de la programación, de manera que el docente pueda aplicarlo en sus sesiones de aprendizaje, sea que tenga alumnos del nivel primaria o secundaria.
Nuestro objetivo es que toda escuela en el perú y latinoamérica puedan llevar el curso de ciencias de la computación. 

            </p>
        </div>

        <div id="barra"></div>  
        <div class="center" id="seccion2">
            <h2 id="title2" class="font-montserrat">LA CIENCIA DE LA COMPUTACIÓN IMPLICA: <br><br> <hr id="raya"> </h2>
            

            <div id="subsec">
                
                <div >
                    <img class="img-small" src="<?php echo get_bloginfo('template_directory'); ?>/img/docente-r1.png" >
                    <div style="display: inline-block; vertical-align: middle;">
                        <h3 class="font-lato small-title">Conocer</h3>
                        <p class="font-lato small-paragraph">Los principios, diseño, aplicación e impacto de la computación en el mundo.</p>
                    </div>
                </div>

                <div>
                    <img class="img-small" src="<?php echo get_bloginfo('template_directory'); ?>/img/docente-r2.png" >
                    <div style="display: inline-block; vertical-align: middle;">
                        <h3 class="font-lato small-title">Algoritmos</h3>
                        <p class="font-lato small-paragraph">Diseñar pasos que nos permitan dar instrucciones para llevar a cabo una tarea específica.</p>
                    </div>
                </div>

                <div>
                    <img class="img-small" src="<?php echo get_bloginfo('template_directory'); ?>/img/docente-r3.png" >
                    <div style="display: inline-block; vertical-align: middle;">
                        <h3 class="font-lato small-title">Desarrollar pensamiento Computacional</h3>
                        <p class="font-lato small-paragraph">Lo cual involucra desarrollo de habilidades de resolución de problemas, pensamiento crítico, abstracción y creatividad .</p>
                    </div>
                </div>

                <div>
                    <img class="img-small" src="<?php echo get_bloginfo('template_directory'); ?>/img/docente-r4.png" >
                    <div style="display: inline-block; vertical-align: middle;">
                        <h3 class="font-lato small-title">Crear tecnología</h3>
                        <p class="font-lato small-paragraph">Que mejore el mundo a través de la programación.</p>
                    </div>
                </div>

                
            </div>

            
        </div>

        <div class="center" id="seccion3">
            <h2 id="title3" class="font-montserrat">¿POR QUÉ CIENCIA DE LA COMPUTACIÓN? <br><br> <hr id="raya"> </h2>
            <p class="font-lato" id="p-sec3" style=" padding: 5% 0;">
              Ciencia de la Computación es una de las áreas más increíbles que hay en el mundo. No solo son increíblemente expresivas, posibilitando un número infinito de combinaciones e ideas, sino que cuando son bien utilizadas, dan como resultado un producto útil y funcional que puede entretener e informar a las masas. 
            </p>    
        </div>



    
        <?php include("footer.php"); ?>

       
    </body>
</html>


<style>

    #csc-title{
        font-size:40pt;
        font-weight:bold;
        margin-top: 35pt;
    }

    #title2{
        margin:0;
        padding-top: 10px;
        color:#1d4e9b
    }
    #title3{
        margin: 0;
        padding-top:40px;
        color:#1d4e9b
    }

    #p-text{
        margin-top: 100px;
        padding-left: 15% ;
        padding-right: 15% ;
        font-size: 16pt;    
    }

   
    #barra{
        width:100%;
        height:100px;
        clip-path: polygon(0 0,0 100%,100% 100%,100% 0,62% 0, 50% 30px,38% 0);
        background-color: #e6e6e6;
        margin-bottom: -2px;
    }

    #seccion2{
        padding: 0px;
        background-color: #e6e6e6;
        margin:0;
        padding-bottom: 50px;
    }

    #raya{
        background-color: #1d4e9b;
        height:1px;
        width:90px;
        border:0px;
    }

    #subsec{
        display:grid;
        grid-template-columns: repeat(2,1fr);
        justify-items: center;
        align-items: center;
        grid-row-gap: 50px;
        margin-left: 10%;
        margin-right: 10%;
    }

    .img-small{
        width: 60px;
        vertical-align: middle;
    }

    .small-title{
        display: inline;
        color: blue;
    }

    .small-paragraph{
        padding:20px;
        width: 250px;
    }

    #seccion3{

        width: 100%;
        background-color: #ecd6d8;
        background-image:url('<?php echo get_bloginfo('template_directory'); ?>/img/docentes-seccion2.png');
        background-size: 800px;
        background-repeat: no-repeat;
        background-position-x:60%;
        background-position-y:120px;
        padding-bottom: 60px;
        



    }

    #p-sec3{
        display: block; 
        margin-left:15%; 
        margin-bottom:0; 
        width: 500px;
        font-size: 16pt;
        font-weight: lighter;  
    }


    @media screen and (max-width: 600px) {

        #imagen-n1{
            width: 60%;
        }
        #csc-title{
            font-size:25pt;
            margin: 35pt 15px 0 15px;
        }

        #subsec{
            grid-template-columns: 1fr;
            row-gap: 15px   ;
        }

        #seccion3 {
            height: 600px;
            background-position-x: 80%;
            background-position-y: 350px;   
        }

        #p-text{
            margin-top: 10px;
            font-size: 12pt;
        }

        #p-sec3{
            margin-left: auto;
            margin-right: auto;
            width: 85%;
            font-size: 11pt;
        }

        #barra{
            height: 40px;
        }

        .small-paragraph{
            padding: 8px 15px;
            margin-top: 0px;
        }

        .small-title{
            padding-top: 20px;
        }

    }


</style>
