<?php /* Template Name: Conferencia */ ?>
<html>
    <head>
    <?php include("head.php"); ?>
    </head>

    <body>
        <?php include("nav.php"); ?>
        <div class="center" width="100%">
            <img src="<?php echo get_bloginfo('template_directory'); ?>/img/conference.png" alt="Conferencia" width="70%" >
            <h1 id="csc-title" class="font-lato">Computer Science<br>Education Conference</h1>
            <p id="p-text" class="font-lato">
                Enseñar Ciencia de la Computación desde la escuela se ha convertido en algo fundamental, darle la oportunidad a niños de aprender y aplicar esta disciplina es sin lugar a dudas algo que va a ayudar en su desarrollo futuro.
<br>
Como parte de estos esfuerzos por llevar esta educación a más escuelas de Perú y Latinoamérica, es que diversas organizaciones unimos esfuerzos a fin de crear una espacio de difusión y discusión para que los diferentes actores involucrados en la formación de una persona, puedan tomar acciones a fin de llevar esta enseñanza a más lugares.
<br>
                <br>
¿Qué ocurriría si le damos la oportunidad para que 50,000 niños peruanos tengan las herramientas para mejorar el mundo?

            </p>
            <a href="/cs-conferencia">
                <button id="btn-saber" class="boton">
                    SABER MÁS
                </button>
            </a>


            <div id="seccion4">
                <h2 class="font-lato galeria-titulo">GALERÍA</h2> 
                <hr id="line-hr" width="60">

                <div id="gallery-1" class="gallery">
                    <div class="photo" id="photo-l">
                        <img src="<?php echo get_bloginfo('template_directory'); ?>/img/programas_sociales/res_1.JPG">
                    </div>
                    <div class="photo" id="photo-c">
                        <img src="<?php echo get_bloginfo('template_directory'); ?>/img/programas_sociales/res_2.JPG">
                    </div>
                    <div class="photo" id="photo-r">
                        <img src="<?php echo get_bloginfo('template_directory'); ?>/img/programas_sociales/res_3.jpg">
                    </div>

                    <div class="photo" id="photo-l">
                        <img src="<?php echo get_bloginfo('template_directory'); ?>/img/programas_sociales/res_4.jpg">
                    </div>
                    <div class="photo" id="photo-c">
                        <img src="<?php echo get_bloginfo('template_directory'); ?>/img/programas_sociales/res_5.jpg">
                    </div>
                    <div class="photo" id="photo-r">
                        <img src="<?php echo get_bloginfo('template_directory'); ?>/img/programas_sociales/res_6.jpg">
                    </div>
                </div>
                

                <div id="gallery-2" class="gallery">
                    <div class="photo" id="photo-l">
                        <img src="<?php echo get_bloginfo('template_directory'); ?>/img/programas_sociales/res_7.jpg">
                    </div>
                    <div class="photo" id="photo-c">
                        <img src="<?php echo get_bloginfo('template_directory'); ?>/img/programas_sociales/res_8.jpg">
                    </div>
                    <div class="photo" id="photo-r">
                        <img src="<?php echo get_bloginfo('template_directory'); ?>/img/programas_sociales/res_9.jpg">
                    </div>

                    <div class="photo" id="photo-l">
                        <img src="<?php echo get_bloginfo('template_directory'); ?>/img/programas_sociales/res_10.jpg">
                    </div>
                    <div class="photo" id="photo-c">
                        <img src="<?php echo get_bloginfo('template_directory'); ?>/img/programas_sociales/res_11.jpg">
                    </div>
                    <div class="photo" id="photo-r">
                        <img src="<?php echo get_bloginfo('template_directory'); ?>/img/programas_sociales/res_12.jpg">
                    </div>

                </div>

                <div class="dots-group">
                    <span  class="dot" id="1" onclick="currentSlide(1)" ></span>
                    <span class="dot" id="2" onclick="currentSlide(2)"></span>
                </div>
            </div>



        </div>
        <?php include("footer.php"); ?>

    </body>
</html>


<style>
    #csc-title{
        font-size:50pt;
        font-weight:bold;
        margin-top: 35pt;
    }

    #p-text{
        margin-top: 100px;
        padding-left: 15% ;
        padding-right: 15% ;
        font-size: 16pt;    
    }

    #btn-saber{
        margin-top: 60px;
        margin-bottom: 60px;
    }



    @media screen and (max-width: 600px) {
        #csc-title{
            font-size:20pt;
            font-weight:bold;
            margin-top:25pt;
        }


        #p-text{
            margin-top: 30px;
            padding-left: 15% ;
            padding-right: 15% ;
            font-size: 13pt;    
        }


        #btn-saber{
           margin-top: 10px;
           margin-bottom: 30px;
        }


    }

</style>





<style>
    /* Seccion 4 */
    #seccion4{
        text-align: center;
        margin-bottom: 80px;
    }
    #seccion4 h2{
        color: #1078FF;
        font-weight: 700;
        font-weight: 700;
        text-align:center;
        margin-top: 50px;
    }
    
    #seccion4 hr{
            border: 0.4pt solid #1D4E9B;    
            margin-bottom:2%;
        }

        /* Monitor de PC*/
        @media screen and (min-width: 601px) {
        .gallery{
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-template-rows: repeat(2, 1fr);
            grid-column-gap: 10px;
            grid-row-gap: 10px;
            margin-left: 100px;
            margin-right: 100px;
            justify-items: center;
            align-items: center;
        }

        .gallery img{
            height: 100%;    
            margin: auto; 
        }



        #photo-l{
            height: 270px;
            overflow: hidden;
            margin-bottom: 15px;    
        }

        #photo-c{
            height: 270px;
            overflow: hidden;
            margin-bottom: 15px;
        }

        #photo-r{
            height: 270px;
            overflow: hidden;
            margin-bottom: 15px;
        }

        .dots-group{
            margin-top: 30px;
        }

        .dot {
            height: 15px;
            width: 15px;
            background-color: coral;
            border-radius: 50%;
            display: inline-block;
        }

        .dot:hover{

        background-color: purple;

        }

    }
    /* Smatphone */
    @media screen and (max-width: 600px) {
        .gallery{
            margin-top: 50px;
            margin-bottom: 50px;
            display: grid;
            grid-template-columns: 1fr;
            grid-template-rows: repeat(3, 1fr);
            grid-column-gap: 0px;
            grid-row-gap:5px;   
            margin-left: 10px;
            margin-right: 10px;
            overflow: hidden;
        }
        
        #photo-l{
        height: 300px;
        overflow: hidden;
        }

        #photo-c{
            height: 300px;
            overflow: hidden;
        }

        #photo-r{
            height: 300px;
            overflow: hidden;
        }

        .gallery img{
            height: 100%;    
            margin: auto; 
            
        }
    }
</style>

<script>

    $(document).ready(function(){
    $(".gallery").hide();
    $("#gallery-1").show();
    });

    $(document).ready(function(){
        $(".dot").click(function(evt){
            var gallery_id="#gallery-"+$(this).attr("id");
            $(".gallery").hide();
            $(gallery_id).show();
        });
    });
</script>

