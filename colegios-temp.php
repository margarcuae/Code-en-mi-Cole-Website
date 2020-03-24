<html>
    <head>
    <?php include("head.php"); ?>


    </head>

    <body>
        <?php include("nav.php"); ?>
 

    <div class="font-lato" id="seccion1">
        <h1>Colegios</h1>
        <p id="navega">Qué hacemos ? <span style="margin: 0 30px;">></span> Colegios</p>
    </div>


<!--
    <div id="seccion2" class="font-lato">
        <div >
            <img class="image-md" src="<?php echo get_bloginfo('template_directory'); ?>/img/colegios/recurso13.png"> 
        </div>

        <div>
            <div class="font-lato titulo-azul">         
                ¿POR QUE ENSEÑAR CIENCIA DE LA COMPUTACIÓN  DESDE LA ETAPA ESCOLAR?
            </div>
            <div class="text-gris">
                    <p class="font-lato ">
                        Introducir a los estudiantes de forma temprana en las ciencias de la computación, 
                        les permitirá disponer de conocimientos imprescindibles en el siglo XXI: fomentando sus habilidades de
                        resolución de problemas, la lógica y la creatividad, fundamentales sea cual sea su futuro desarrollo profesional.
                    </P>
                </div>
        </div>
    </div>


    <div class="beneficios-container" >
        <div class="cards" >
            <div class="parent" > 
                <div class="div1">  
                    <h2 class="font-lato">BENEFICIOS</h2> 
                </div>
                <div class="div2" >
                    <h4 class="font-montserrat" >Beneficios para los estudiantes</h4>
                    <ul class="font-montserrat">
                        <li>Certificado a nombre de Code en mi Cole y SUMATEC.</li>
                        <li>Participación en la Feria Demo Day</li>
                        <li>Asesoria en la elaboración de sus proyectos</li>
                    </ul>
                </div>
                <div class="div3">
                    <h4 class="font-montserrat">Beneficios para la institución Educativa</h4>
                    <ul class="font-montserrat">
                        <li>Aumento de prestigio como institución Educativa de vanguardia</li>
                        <li>Preparación para concursos de tecnología</li>
                        <li>Los estudiantes aplican su aprendizaje logrado en las clases de matemáticas, algoritmos, etc.</li>
                    </ul>

                </div>
                <div class="div4" >
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
    


    <div>
        <h2 class="font-lato galeria-titulo">GALERÍA</h2> 
        <hr id="line-hr" width="60">

    </div>

    <div class="slideshow-container">
        <div class="mySlides fade">
            <div class="grid-container-gallery">
                <div class="grid-item parent">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/img/galery1.jpeg">
                </div>
                <div class="grid-item">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/img/galery2.jpeg">
                </div>
                <div class="grid-item">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/img/galery3.jpeg">
                </div>  
            </div>
        </div>

        <div class="mySlides fade">
        <div class="grid-container-gallery">
                <div class="grid-item parent">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/img/galery4.jpeg">
                </div>
                <div class="grid-item">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/img/galery5.jpeg">
                </div>
                <div class="grid-item">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/img/galery3.jpeg">
                </div>  
  
            </div>
        </div>

        <div id="dots-group">
            <span class="dot" onclick="currentSlide(1)"></span> 
            <span class="dot" onclick="currentSlide(2)"></span> 
            <span class="dot" onclick="currentSlide(3)"></span> 
        </div>

    </div>


    <div id="seccion4" class="font-montserrat">
            <div>
                <p style="font-size: 1.4rem ;">Te gustaría recibir un taller de inducción gratuito? <br> Escríbenos y nos pondremos en contacto contigo.</p>
                <img src="<?php echo get_bloginfo('template_directory'); ?>/img/academia/programador.png" alt="" height="300px">
            </div>
            <div>
                <div id="block-shadow">
                    <p style="font-size: 1rem; font-weight: bold; padding-top: 25px; margin:0"> 
                        PREINSCRÍBETE A LA ACADEMIA
                    </p>
                    <iframe src="" frameborder="0">

                        
                    </iframe>
                </div>
            </div>
        </div>
-->
    </div>
        <?php include("footer.php"); ?>
    </body>

</html>

<style>
h1 {
        font-size: 4.5rem;
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



    
#seccion2 {
    display: grid;
    grid-template-columns: 1fr 2fr ;
    margin: 100px 10% 0 10%;
    column-gap: 50px;
    justify-items: center;
    flex-direction: column;
    text-align: center;
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

.img-rec-18{
    width: 400px;
}

.solicitar-card{
    box-shadow: 10px 10px 30px 2px #ACACAC;
}

.solicitar-programa{
    margin-left:4%;
    margin-right:4%;
    margin-top: 3%;
    margin-bottom:3%;

    display: grid;
    grid-template-columns: auto auto;
    grid-gap: 5px;
    padding: 10px;
    
}

.solicitar-programa > div {
  text-align: center;
  padding: 20px 0;
  font-size: 30px;
  font-weight: bold;

}


#line-hr{
        border: 0.4pt solid #1D4E9B;    
        margin-bottom:3%;
    
    }
    
.galeria-titulo{
    color: #1078FF;
    font-weight: 700;
    font-size: 40;
    text-align:center;

    margin-top: 50px;
}

.parent {
    width: 60%;
    margin-right: 2em;
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-template-rows: repeat(3, 0.3fr) 1fr;
    grid-column-gap: 20px;
    grid-row-gap: 0px;
    text-align: center;
    
}

.cards{
    display: flex;
    flex-direction: row-reverse;
    height: 90%;   
    display: flex;
    align-items: center;
    align-content: center;
}


.div2 { grid-area: 4 / 1 / 5 / 2; 
    background-color: white;
    box-shadow: 10px 10px 30px 2px #ACACAC;
    padding-top: 50px;
    padding-bottom: 50px;
    padding-right: 40px;
    padding-left: 30px;    text-align: center;

}
.div3 { grid-area: 3 / 2 / 5 / 3;
    background-color: white;
    box-shadow: 10px 10px 30px 2px #ACACAC;
    padding-right: 40px;
    padding-left: 30px;
    padding-top: 50px;
}
.div4 { grid-area: 2 / 3 / 5 / 4;
    background-color: white;
    box-shadow: 10px 10px 30px 2px #ACACAC;
    padding-right: 40px;
    padding-left: 30px;
    padding-top: 50px;

}

.div1 { grid-area: 1 / 1 / 2 / 4; }


.parent h4{
    color: #1078FF;
    text-transform: uppercase;
    font-size: 22;


}

.parent li{
    color: #000000;
    font-weight: 700;
    font-size: 18;
    list-style-type: "-";
}

.beneficios-container h2{
    color: #1078FF;
    display: flex;
    padding-left: 35%; 
    font-weight: 700;


}

.beneficios-container{
    background-image: url("<?php echo get_bloginfo('template_directory'); ?>/img/colegios/recurso14.png");
    background-size: cover;
    background-position: center;    
}



#line-hr{
    border: 0.4pt solid #1078FF;        
}

.text-gris{
    color: #808080;
    font-size: 20pt;
}

.titulo-azul{
    color: #1078FF;
    font-weight: 700;
    font-size: 30;
}

.image-md{
    width: 60%;
}







.titulos-peque {
        font-size: 0.9rem;
        color: #0066FF;
    }

.contenedor-portada-colegios{
    display: flex;
    font-size: 80px;
    color:white;
    padding: 100px 0;
    padding-left: 60px;
}


.container {
  width: 1170px; /* specify a width */
  margin: 0 auto;  /* centers the container */
  padding: 0 15px; /* adds some padding to the left and right*/
}


.jumbotron h1{ 
    text-align: left; /* centers the heading */
    color: #FFF;
    font-weight: bold;
    font-size: 80;
    margin-left:-250px;
  
}


</style>



<style>


.grid-container-gallery {
  display: grid;
  grid-row-gap: 50px;
  grid-column-gap: 70px;
  grid-template-columns: auto auto auto;
  padding: 150px;
}

.grid-item {
    cursor: pointer;
  padding: 20px;
  text-align: center;
  
    width: 100%; 
    height:20rem;
    overflow: hidden;
    
    /* Magic */
    display: flex;
    align-items: center; /* vertical */
    justify-content: center; /* horizontal */
}

.grid-item:hover {background-color: #3e8e41}


.grid-item:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

    #line-hr{
        border: 0.4pt solid #1D4E9B;        
    }

    #galery-title{
        margin-top: 100px;
        font-size: 33;
        font-weight:bold;
        color: #1D4E9B;
    }

    #csc-title{
        font-size:50pt;
        font-weight:bold;
        margin-top: 0;
    }

    #p-text{
        margin-top: 10px;
        padding-left: 15% ;
        padding-right: 15% ;
        font-size: 16pt;    
    }


</style>

<style>
        /* Slideshow container */
        .slideshow-container {
            margin-top: -100px;
            max-width: 100%;
            position: relative;
            
        }

        /* The dots/bullets/indicators */
        .dot {
            
        cursor: pointer;
        height: 15px;
        width: 15px;
        
        background-color: #bbb;
        border-radius: 50%;
        display: inline-block;
        transition: background-color 0.6s ease;
        }

        #dots-group{
            margin-top: -100px;
            position: relative;
            text-align:center; 
            margin-bottom: 50px;
        }

        .active, .dot:hover {
            
        background-color: #717171;
        }

        /* Fading animation */
        .fade {
        -webkit-animation-name: fade;
        -webkit-animation-duration: 1.5s;
        animation-name: fade;
        animation-duration: 1.5s;
        }

        @-webkit-keyframes fade {
        from {opacity: .4} 
        to {opacity: 1}
        }

        @keyframes fade {
        from {opacity: .4} 
        to {opacity: 1}
        }

        
</style>


<style>
/* Responsible design */
@media screen and (max-width: 600px) {

    
#seccion1{
    width: 100%;
}

/*  Section 2*/ 
#seccion2 {
    grid-template-columns: 1fr;
    margin: 50px 10% 0 10%;
    row-gap: 25px;
}

#seccion2 img{
    width: 50%;
}

/* ----------- */


/* Section 3 */



.beneficios-container{

}

.parent {
display: grid;
grid-template-columns: 1fr;
grid-template-rows: repeat(4, 1fr);
grid-column-gap: 0px;
grid-row-gap: 0px;
}

.cards{


}

.div1 { grid-area: 1 / 1 / 2 / 2; }
.div2 { grid-area: 2 / 1 / 3 / 2; }
.div3 { grid-area: 3 / 1 / 4 / 2; }
.div4 { grid-area: 4 / 1 / 5 / 2; }

/* ------------------ */







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

#block-shadow{
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


}

</style>

<script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
    showSlides(slideIndex += n);
    }

    function currentSlide(n) {
    showSlides(slideIndex = n);
    }

    function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    
    var dots = document.getElementsByClassName("dot");
        if (n > slides.length) 
            {slideIndex = 1}    
        if (n < 1) 
            {slideIndex = slides.length}
            
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";  
        dots[slideIndex-1].className += " active";
    }
</script>