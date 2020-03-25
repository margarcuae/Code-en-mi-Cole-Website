<?php /* Template Name: Eventos */ ?>
<html>
    <head>
    <?php include("head.php"); ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    </head>

    <body>
        <?php include("nav.php"); ?>
        <div id="seccion1">
            <img src="<?php echo get_bloginfo('template_directory'); ?>/img/events.png" alt="Eventos" width="70%" >

            <h1 id="csc-title" class="font-lato">Encuentro de Organizaciones<br> Educativas Innovadoras</h1>
            
            <p class="font-lato">
            En Latinoamérica y el Perú se vienen desarrollando diferentes iniciativas que impulsan cambios que la 
            educación y la formación necesitan para transformarse en la era digital. El reto que asumimos es convocar estas iniciativas. Conocerlas, integrarlas y fortalecerlas, para construir juntos: una nueva era.            
            </p>
        </div>

    <div id="seccion4">
        <h2 class="font-lato galeria-titulo">GALERÍA</h2> 
        <hr id="line-hr" width="60">

        <div id="gallery-1" class="gallery">
            <div class="photo" id="photo-l">
                <img src="<?php echo get_bloginfo('template_directory'); ?>/img/galery1.jpeg">
            </div>
            <div class="photo" id="photo-c">
                <img src="<?php echo get_bloginfo('template_directory'); ?>/img/galery2.jpeg">
            </div>
            <div class="photo" id="photo-r">
                <img src="<?php echo get_bloginfo('template_directory'); ?>/img/galery3.jpeg">
            </div>

            <div class="photo" id="photo-l">
                <img src="<?php echo get_bloginfo('template_directory'); ?>/img/galery1.jpeg">
            </div>
            <div class="photo" id="photo-c">
                <img src="<?php echo get_bloginfo('template_directory'); ?>/img/galery2.jpeg">
            </div>
            <div class="photo" id="photo-r">
                <img src="<?php echo get_bloginfo('template_directory'); ?>/img/galery3.jpeg">
            </div>
        </div>
        

        <div id="gallery-2" class="gallery">
            <div class="photo" id="photo-l">
                <img src="<?php echo get_bloginfo('template_directory'); ?>/img/galery4.jpeg">
            </div>
            <div class="photo" id="photo-c">
                <img src="<?php echo get_bloginfo('template_directory'); ?>/img/galery5.jpeg">
            </div>
            <div class="photo" id="photo-r">
                <img src="<?php echo get_bloginfo('template_directory'); ?>/img/galery1.jpeg">
            </div>

            <div class="photo" id="photo-l">
                <img src="<?php echo get_bloginfo('template_directory'); ?>/img/galery1.jpeg">
            </div>
            <div class="photo" id="photo-c">
                <img src="<?php echo get_bloginfo('template_directory'); ?>/img/galery2.jpeg">
            </div>
            <div class="photo" id="photo-r">
                <img src="<?php echo get_bloginfo('template_directory'); ?>/img/galery3.jpeg">
            </div>

        </div>

        <div class="dots-group">
            <span  class="dot" id="1" onclick="currentSlide(1)" ></span>
            <span class="dot" id="2" onclick="currentSlide(2)"></span>
        </div>
    </div>
        

        <?php include("footer.php"); ?>
    </body>
</html>

<style>
/**  seccion 1 **/
#seccion1{
    text-align: center;
    
}

#seccion1 p{
    margin-top: 10px;
    padding-left: 15% ;
    padding-right: 15% ;
    font-size: 15pt;  
    
}

#seccion1 h1{
    font-size:40pt;
    font-weight:bold;
    margin-top: 0;
}

@media screen and (max-width: 600px) {
}
</style>


<style>
/**  seccion 1 **/
#seccion2{
    margin-bottom: 50px;
    text-align: center;
}

#seccion2 h2{
    margin-top: 70px;
    font-weight:bold;
    color: #1D4E9B;
}

@media screen and (min-width: 601px) {
    
    #gallery {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        grid-template-rows: repeat(2, 1fr);
        grid-column-gap: 30px;
        grid-row-gap: 30px;
        align-items: center;
        margin: 50px 100px 50px 100px;
        
    }

    #gallery img{
        height: 100%;    
        margin: auto; 
    }


    #photo{
        height: 300px;
        overflow: hidden;
    }
}

@media screen and (max-width: 600px) {
    #gallery {
        display: grid;
        grid-template-columns: repeat(1, 1fr);
        grid-template-rows: repeat(6, 1fr);
        grid-column-gap: 30px;
        grid-row-gap: 30px;
        align-items: center;
        margin: 50px 30 50px 30px;
    }

    #gallery img{
        height: 100%;    
        margin: auto; 
    }

    #photo{
        height: 300px;
        overflow: hidden;
    }
}

.dots-group{
    margin-top: 30px;
    text-align: center;

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










<!--



<style>


.grid-container {
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
    if (n > slides.length) {slideIndex = 1}    
    if (n < 1) {slideIndex = slides.length}
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

-->