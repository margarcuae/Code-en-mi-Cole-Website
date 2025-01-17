<?php /* Template Name: Colegios */ ?>
<html>
    <head>
    <?php include("head.php"); ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    </head>

    <body>
        <?php include("nav.php"); ?>
        <div class="font-lato" id="seccion1">
            <h1>Colegios</h1>
            <p id="navega">¿ Qué hacemos ? <span style="margin: 0 30px;">></span> Colegios</p>
        </div>


        <div id="seccion2">
            <div>
                <img src="<?php echo get_bloginfo('template_directory'); ?>/img/colegios/recurso13.png"> 
            </div>
    
            <div>
                <h2 class="font-lato ">         
                    ¿POR QUE ENSEÑAR CIENCIA DE LA COMPUTACIÓN  DESDE LA ETAPA ESCOLAR?
                </h2>
                <p class="font-lato" >
                    Introducir a los estudiantes de forma temprana en las ciencia de la computación, 
                    les permitirá disponer de conocimientos imprescindibles en el siglo XXI: fomentando sus habilidades de
                    resolución de problemas, la lógica y la creatividad, fundamentales sea cual sea su futuro desarrollo profesional.
                </p>
            </div>
        </div>

        <div id="seccion3">
            <h2 class="font-lato">BENEFICIOS</h2> 
            <div class="grid-block">
                <div class="block">
                    <div class="white-block">
                        <h4 class="font-montserrat" >Beneficios para los estudiantes</h4>
                        <ul class="font-montserrat">
                            <li>Certificado a nombre de Code en mi Cole y SUMATEC.</li>
                            <li>Participación en la Feria Demo Day</li>
                            <li>Asesoria en la elaboración de sus proyectos</li>
                        </ul>
                    </div>
                </div>
                <div class="block">
                    <div class="white-block">
                        <h4 class="font-montserrat">Beneficios para la institución Educativa</h4>
                        <ul class="font-montserrat">
                            <li>Aumento de prestigio como institución Educativa de vanguardia</li>
                            <li>Preparación para concursos de tecnología</li>
                            <li>Los estudiantes aplican su aprendizaje logrado en las clases de matemáticas, algoritmos, etc.</li>
                        </ul>
                    </div>
                </div>
                <div class="block">
                    <div class="white-block">
                        <h4 class="font-montserrat" >Beneficios en su futuro</h4>
                        <ul class="font-montserrat">
                            <li>Entienden la abstracción, la lógica y los algoritomos.</li>
                            <li>Los estudiantes serán capaces de evaluar y aplicar tecnologías de la información</li>
                            <li>Estudiantes con conocimiento del funcionamiento externo e interno de la tecnología de modo que puedan ser capaces de crearla.</li>
                            <li>Estudiantes con mejores habilidades de resolución de problemas, trabajo en equipo y creatividad.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div id="seccion4">
            <h2 class="font-lato">GALERÍA</h2> 
            <hr id="line-hr" width="60">

            <div id="gallery-1" class="gallery">
                <div class="photo" id="photo-l">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/img/colegios/recurso15.png">
                </div>
                <div class="photo" id="photo-c">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/img/colegios/recurso16.png">
                </div>
                <div class="photo" id="photo-r">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/img/colegios/recurso17.png">
                </div>
            </div>
            

            <div id="gallery-2" class="gallery">
                <div class="photo" id="photo-l">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/img/colegios/recurso17.png">
                </div>
                <div class="photo" id="photo-c">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/img/colegios/recurso16.png">
                </div>
                <div class="photo" id="photo-r">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/img/colegios/recurso15.png">
                </div>
            </div>

            
            <div class="dots-group">
                <span  class="dot" id="1" onclick="currentSlide(1)" ></span>
                <span class="dot" id="2" onclick="currentSlide(2)"></span>
            </div>
        </div>
       

        <div id="seccion5" class="font-montserrat">
            <div>
                <p style="font-size: 1.2rem ;">¿Te gustaría recibir un taller de inducción gratuito? <br> Escríbenos y nos pondremos en contacto contigo.</p>
                <img src="<?php echo get_bloginfo('template_directory'); ?>/img/academia/programador.png" alt="" height="300px">
            </div>
            <div>
                <div id="block-shadow">
                    
                    <iframe width="640px" height= "400px" src= "https://forms.office.com/Pages/ResponsePage.aspx?id=DQSIkWdsW0yxEjajBLZtrQAAAAAAAAAAAAO__SnT6j1UMjdEWEowT0FXMFhNTUdSQUNZSko0U1hUSC4u&embed=true" frameborder= "0" marginwidth= "0" marginheight= "0" style= "border: none; max-width:100%; max-height:100vh" allowfullscreen webkitallowfullscreen mozallowfullscreen msallowfullscreen> </iframe>

                    <!-- <button class="button-gradient">Enviar</button> -->
                </div>
            </div>
        </div>


        <?php include("footer.php"); ?>
    </body>

</html>


<style>
/* Seccion 1 */

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
        background-image: url('<?php echo get_bloginfo('template_directory'); ?>/img/colegios/recurso12.png');
        background-repeat: no-repeat;
        color: white;
    }


@media screen and (max-width: 600px) {

    h1{
            font-size: 40px;
        }

        #seccion1{
            height: 200px;
        }
}
</style>

<style>
    /* Seccion 2 */
#seccion2 {
    display: grid;
    grid-template-columns: 1fr 2fr ;
    margin: 100px 10% 0% 10%;
    column-gap: 50px;
    justify-items: center;
    flex-direction: column;
    text-align: center;
}

#seccion2 img{
    width: 60%;
}

#seccion2 h2{
    color: #1078FF;
    font-weight: 700;
}

#seccion2 p{
    color: #808080;
    font-size: 1.4rem;
}

@media screen and (max-width: 600px) {

    #seccion2 {
        grid-template-columns: 1fr;
            margin: 50px 10% 0 10%;
            row-gap: 25px;
    }
    #seccion2 img{
        width: 50%;
    }
}
</style>

<style>
/* Seccion 3 */
#seccion3{
    background-image: url("<?php echo get_bloginfo('template_directory'); ?>/img/colegios/recurso14.png");
    background-size: cover;
    background-position: center; 
    margin-top: 3rem;
}
#seccion3 h2{
    color: #1078FF;
    font-weight: 700;
    text-align: center;
}

#seccion3 h4{
    color: #1078FF;
    text-transform: uppercase;
}
.white-block{
    background-color: white;
    box-shadow: 10px 10px 30px 2px #ACACAC;
    text-align: center;
}
    
@media screen and (min-width: 601px) {
    #seccion3{
        padding: 10px 30px 0;
    }

    #seccion3 h2{
        padding-left: 30%; 
    }

    .grid-block{
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        grid-template-rows: 1fr;
        grid-column-gap: 30px;
        grid-row-gap: 0px;
        padding: 0px 10px 50px 32% ;

    }

    .block{
        display: flex;
        justify-content: flex-end;
        flex-direction: column;
    }

    .white-block{
        padding: 10px 15px 15px 10px;
        background-color: white;
        box-shadow: 10px 10px 30px 2px #ACACAC;
        
    }

}


@media screen and (max-width: 600px) {
    #seccion3{
        background-size: initial;
        background-position: center; 
        padding: 10px 0 10px;        
    }

    #grid-block{
        display: grid;
        padding: 10px 10px 10px 10px ;
    }

    .white-block{
        padding: 10px 15px 15px 10px;
        background-color: white;
        box-shadow: 10px 10px 30px 2px #ACACAC;
        margin: 10px 15px 15px 10px ;
    }
    .white-block ul{
        font-size: 0.8rem;
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
        grid-template-columns: 1fr 1.2fr 1fr;
        grid-template-rows: 1fr;
        grid-column-gap: 10px;
        grid-row-gap: 0px;
        align-items: center;
        margin-left: 100px;
        margin-right: 100px;
    }

    .gallery img{
        height: 100%;    
        margin: auto; 
    }

    #photo-l{
        height: 270px;
        overflow: hidden;
    }

    #photo-c{
        height: 300px;
        overflow: hidden;
        
    }

    #photo-r{
        height: 270px;
        overflow: hidden;
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
        $(".gallery").hide("slow");
        $(gallery_id).show("slow");
    });
});
</script>

<style>
/* Seccion 5 */

#seccion5 {
    display: grid;
    grid-template-columns: 1fr 1fr;
    margin: 30px 10%;
    column-gap: 30px;
    flex-direction: column;
    justify-items: center;
    text-align: center;
}

#block-shadow{
    height: 400px;
    width: 400px;
    -webkit-box-shadow: 13px 17px 31px -4px rgba(0,0,0,0.55);
    -moz-box-shadow: 13px 17px 31px -4px rgba(0,0,0,0.55);
    box-shadow: 13px 17px 31px -4px rgba(0,0,0,0.55);
}


.button-gradient{
    
    background: rgb(51,43,180);
    background: linear-gradient(90deg, rgba(51,43,180,1) 0%, rgba(61,170,184,1) 61%, rgba(0,255,158,1) 100%);
    border-radius: 12px;
    border: none;
    color: white;
    text-align: center;
    width:100px;
    height: 25px;
    font-size: 15px;
    font-family: 'Montserrat', sans-serif;

    margin-top:20px;
    margin-bottom: 20px;
}

@media screen and (max-width: 600px) {

    #seccion5{
        grid-template-columns: 1fr;
    }
            
    #block-shadow{
        margin-top:30px;

        height: 400px;
        width: 270px;
    }
}
</style>
    