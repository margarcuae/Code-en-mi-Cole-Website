<!-- Odometr includes -->
<link rel="stylesheet" href="https://github.hubspot.com/odometer/themes/odometer-theme-default.css" />
<script src="http://github.hubspot.com/odometer/odometer.js"></script>
<script src="<?php echo get_bloginfo('template_directory'); ?>/js/movimiento.js"></script>

<div class="fondo font-lato " id="animacion1">
    <div></div>
    <div class="center">
        Un nuevo
    </div>
    <div class="contenedor-portada " >
            <ul>
                <li class="li-animacion1">#PENSAMIENTO</li>
                <li class="li-animacion1">#LENGUAJE</li>
                <li class="li-animacion1">#MUNDO</li>
            </ul>
    </div>
    <div></div>
</div>


<section class="home2" >
    <div class="home-title center" >
    <h2 class="font-montserrat" style="margin:0px; margin-bottom: 10px;" >¿QUÉ OCURRE?</h2>
    <div style="height: 1px; width: 40px; background-color: #1078ff; margin-bottom: 60px; margin-left: auto; margin-right: auto;" ></div>
    </div>
    <div class="home-foto1">
        <img src="<?php echo get_bloginfo('template_directory'); ?>/img/home/home-recurso4.png" alt="" width="200px" height="230px">
    </div>
    <div class="home-foto2">
    <img src="<?php echo get_bloginfo('template_directory'); ?>/img/home/home-recurso5.png" alt="" width="200px" height="230px">    </div>
    <div class="home-foto3">
    <img src="<?php echo get_bloginfo('template_directory'); ?>/img/home/home-recurso6-3.png" alt="" width="200px" height="230px">    </div>
    
</section>
<div id="barra-out">
    <div id="barra"></div>
</div>





<section class="home3"  id="quehacemos" style="padding-top: 20px;">
    <div class="h3Title font-montserrat">
        <h2>¿QUÉ HACEMOS PARA SOLUCIONARLO?</h2>
    </div>
    <div class="h3Img1">
        <img src="<?php echo get_bloginfo('template_directory'); ?>/img/home/home-recurso1.png" alt="" width="50px">
    </div>
    <div class="h3Texto font-lato">
        <p>Formamos niños y jóvenes  en Ciencia de la Computación desde la escuela</p>
    </div>
    <div class="h3Img2">
    <img src="<?php echo get_bloginfo('template_directory'); ?>/img/home/home-recurso2.png" alt=""  width="30px">
    </div>
</section>












<div id="barra-out2">
    <div id="barra2"></div>
</div>

<section class="home4" style="padding-top: 20px;">

<center class="h4title">
    <h2 class="font-montserrat">¿CÓMO LO HACEMOS?</h2>
    <hr>
</center>
    
    <section class="home4-1">
        

        <div class="h4Cont1 h4blanco font-lato">
            
            
                <div class="h4img1" id="h4img1" onmouseover="letra()" onmouseleave="noletra()">
                    <div class=" h4-voltear"  id="h4-voltear">
                        <P  >Programa de Ciencia de la Computación para primaria y secundaria</P>
                    </div>
                </div>
            <div class="" >
                
              <img onclick="window.location.href='/colegios'" src="<?php echo get_bloginfo('template_directory'); ?>/img/home/icon/iconletra-01.png" alt="" width="250px">
            </div>
        </div>

        <div class="h4Cont2 h4blanco">
            <div class="h4img2" onmouseover="letra2()" onmouseleave="noletra2()">
            <div class=" h4-voltear"  id="h4-voltear2">
                        <P>Talleres de creación de tecnología  desde los 4 a 16 años</P>
                    </div>
            </div>
            <div class="">
            <img onclick="window.location.href='/academia'" src="<?php echo get_bloginfo('template_directory'); ?>/img/home/icon/iconletra-02.png" alt="" width="250px">
            </div>
            </div>
        </div>

        <div class="h4Cont3 h4blanco">
        <div class="h4img3" onmouseover="letra3()" onmouseleave="noletra3()">
        <div class=" h4-voltear"  id="h4-voltear3">
                        <P>Capacitación a docentes, universitarios, profesionales y empresarios</P>
                    </div>
        </div>
            <div class="">
            <img onclick="window.location.href='/workshop'" src="<?php echo get_bloginfo('template_directory'); ?>/img/home/icon/iconletra-03.png" alt="" width="250px">
                </div>
            </div>
        </div>
    </section>




    <section class="home4-2" >
        <div class="h4Cont4 h4blanco">
        <div class="h4img4 " onmouseover="letra4()" onmouseleave="noletra4()">
            <div class=" h4-voltear"  id="h4-voltear4">
                        <P>Desarrollo de proyectos de responsabilidad social</P>
            </div>
        </div>
            <div class="">
            <img onclick="window.location.href='/hora'" src="<?php echo get_bloginfo('template_directory'); ?>/img/home/icon/iconletra-04.png" alt="" width="250px">
                </div>
            </div>
        </div>

        <div class="h4Cont5 h4blanco">
        <div class="h4img5"onmouseover="letra5()" onmouseleave="noletra5()">
        <div class=" h4-voltear"  id="h4-voltear5">
                        <P>Capacitación en ciencia de la computación</P>
            </div>
    </div>

            <div class="" >
            <img onclick="window.location.href='/formacion-docente'" src="<?php echo get_bloginfo('template_directory'); ?>/img/home/icon/iconletra-05-2.png" alt="" width="250px">
                </div >
                
            </div>
        </div>
    </section>

</section>


<script>
            function letra() {
                document.getElementById("h4-voltear").style.display = "grid";
            }
            function noletra() {
                document.getElementById("h4-voltear").style.display = "none"; 
            }

            function letra2() {
                document.getElementById("h4-voltear2").style.display = "grid";
            }
            function noletra2() {
                document.getElementById("h4-voltear2").style.display = "none"; 
            }
            function letra3() {
                document.getElementById("h4-voltear3").style.display = "grid";
            }
            function noletra3() {
                document.getElementById("h4-voltear3").style.display = "none"; 
            }
            function letra4() {
                document.getElementById("h4-voltear4").style.display = "grid";
            }
            function noletra4() {
                document.getElementById("h4-voltear4").style.display = "none"; 
            }
            function letra5() {
                document.getElementById("h4-voltear5").style.display = "grid";
            }
            function noletra5() {
                document.getElementById("h4-voltear5").style.display = "none"; 
            }

        </script>


<section id="home5" >

    <section class="home5" >
        <h2 class="font-lato" >Transformando generaciones en creadores tecnológicos</h2>
        
    </section>
</section>



<section class="home6" >
    <div class="h6-contenido" id="home6">
        <div class="h6-title">
            <h2 class="font-montserrat" >NUESTRO IMPACTO</h2>
            <hr>
        </div>
        <div class="h6-minicont">
            <div class="h6-m2">
                <img src="<?php echo get_bloginfo('template_directory'); ?>/img/home/icon1.png" alt="">
            </div>  
            <div class="h6-n1">
                <p>+</p>
                <p id="estudiantesal" class="odometer">0</p>
            </div>
            <div class="h6-d1" >
                <p>Estudiantes alcanzados</p>
            </div>
        </div>

        <div class="h6-minicont">
            <div class="h6-m2">
                <img src="<?php echo get_bloginfo('template_directory'); ?>/img/home/icon1.png" alt="">
            </div>  
            <div class="h6-n1">
            <p>+</p>
                <p id="organizaciones" class="odometer">0</p>
            </div>
            <div class="h6-d1">
                <p>Organizaciones involucradas</p>
            </div>
        </div>

        <div class="h6-minicont">
            <div class="h6-m2">
                <img src="<?php echo get_bloginfo('template_directory'); ?>/img/home/icon1.png" alt="">
            </div>  
            <div class="h6-n1">
            <p>+</p>
                <p id="estudiantes" class="odometer">0</p>
            </div>
            <div class="h6-d1">
                <p>Estudiantes con mayores habilidades tecnológicas</p>
            </div>
        </div>

        <div class="h6-minicont">
            <div class="h6-m2">
                <img src="<?php echo get_bloginfo('template_directory'); ?>/img/home/icon1.png" alt="">
            </div>  
            <div class="h6-n1">
            <p>+</p>
                <p id="voluntarios" class="odometer">0</p>
            </div>
            <div class="h6-d1">
                <p>Voluntarios involucrados</p>
            </div>
        </div>
        
        <div class="h6-minicont">
        <div class="h6-m2">
                <img src="<?php echo get_bloginfo('template_directory'); ?>/img/home/icon1.png" alt="">
            </div>  
            <div class="h6-n1">
            <p>+</p>
                <p id="colegios" class="odometer">0</p>
            </div>
            <div class="h6-d1">
                <p>Colegios beneficiados con el programa</p>
            </div>
        </div>

        <div class="h6-minicont">
        <div class="h6-m2">
                <img src="<?php echo get_bloginfo('template_directory'); ?>/img/home/icon1.png" alt="">
            </div>  
            <div class="h6-n1 ">
            <p>+</p>
                <p id="docentes" class="odometer">0</p>
            </div>
            <div class="h6-d1">
                <p>Docentes capacitados</p>
            </div>
        </div>
    </div>
    <div class="h6-fondo">

    </div>
</section>




<section class="home7 font-lato"  id="eventos" style="padding-top: 60px;">
<center class="font-montserrat subtitle">
        <h2 style="margin-top:0px;">EVENTOS</h2>
        <div style="height: 1px; width: 40px; background-color: #1078ff; margin-bottom: 60px; margin-left: auto; margin-right: auto;" ></div>

    </center>
    <div class="h7-container" >
            <div class="h7-img1" >
                <img src="<?php echo get_bloginfo('template_directory'); ?>/img/home/recurso38.png" alt="" width="60px">
                <p> &#60;Hora del código&#62;</p>
            </div>
            <div class="h7-img2">
                <img src="<?php echo get_bloginfo('template_directory'); ?>/img/home/recurso39.png" alt=""width="60px">
                <p>&#60;Computer Science education conference&#62;</p>
            </div>
            <div class="h7-img3">
                <img src="<?php echo get_bloginfo('template_directory'); ?>/img/home/icon1.png" alt="" width="60px">
                <p>&#60;Encuentro de organizaciones educativas inovadoras&#62;</p>
            </div>
    </div>
   
</section>

<section class="home8" id="nosotros">

    <center class="font-montserrat subtitle" style="margin:0px">
        <h2>NOSOTROS</h2>
        <div style="height: 1px; width: 40px; background-color: #009c97; margin-bottom: 60px; margin-left: auto; margin-right: auto;" ></div>
    </center>
    <div class="h8-subtitle font-montserrat">

        <h3 class="cursor" onclick="proposito()"> PROPÓSITO</h3>
        <h3 class="cursor" onclick="historia()" >HISTORIA</h3>
        <h3 class="cursor" onclick="valores()">VALORES</h3>

    </div>

<div class="h8-contenidogen">

<div  id="proposito" class="h8-contenido font-lato" > 
    <div>
    <p>
            Dar acceso al pensamiento y las habilidades de la ciencia de la computación,
            con una formación de calidad  y aplicable para impulsar el desarrollo de los 
            estudiantes, docentes y actores que intervienen en la educación
        </p>
    </div>
    <div>
        <img src="<?php echo get_bloginfo('template_directory'); ?>/img/home/home-foto11.png" alt="" width="370px">
    </div>

</div>

<div  class="h8-contenido font-lato" id="historia" style="display: none;">
    <div>
        <p>
        Programa educativo en Ciencia de la Computación a nivel escolar, donde alumnos aprenden a programar y crear tecnología. Ganadores de Startup Perú 5G y del Tren del Emprendimiento
        </p>
    </div>
    <div>
    <img src="<?php echo get_bloginfo('template_directory'); ?>/img/home/home-foto11.png" alt="" width="370px">
    </div>
</div>

<div  class=" h8-contenido font-lato" id="valores"  style="display: none;">
    
<div>
        <p> <b> Trascendental:</b>Creemos en las personas y para nosotros cualquier persona puede aprender.</p>
        <p><b>Innovación: </b>Nuestra cultural inovadora es una grata consecuencia.</p>
        <p><b>Compromiso: </b>Con nuestros colaboradores y clientes.</p>
        <p><b>Solidaridad :</b>Para llevar la oportunidad tecnológica a más personas.</p>
        <p><b>Trabajo</b></p>

    </div>
    <div>
    <img src="<?php echo get_bloginfo('template_directory'); ?>/img/home/home-foto11.png" alt="" width="370px">
    </div>

</div>
</div>
</section>




<script>
function historia() {
    document.getElementById("valores").style.display = "none";
    document.getElementById("proposito").style.display = "none"; 
    document.getElementById("historia").style.display = "grid";      
}

function valores() {
    document.getElementById("valores").style.display = "grid";
    document.getElementById("proposito").style.display = "none"; 
    document.getElementById("historia").style.display = "none"; 
      
}

function proposito() {
    document.getElementById("valores").style.display = "none";
    document.getElementById("proposito").style.display = "grid"; 
    document.getElementById("historia").style.display = "none"; 
      
}

</script>





<section class="home85" style="padding: 60px; margin-bottom:60px">
<center class="font-montserrat subtitle2" >
<h2 >ALCANCE
</h2>
<div style="height: 1px; width: 40px; background-color: #1078ff; margin-bottom: 60px; margin-left: auto; margin-right: auto;" ></div>
</center>

<center>
<img src="<?php echo get_bloginfo('template_directory'); ?>/img/home/mapa2.png" alt="">
</center>
</section>



<section class="home9">
<center class="font-montserrat subtitle" >
<h2 >ALIADOS ESTRATÉGICOS
</h2> <hr>
</center>



<?php include("aliados.php"); ?>

</section>


<section class="home10 font-lato" style="margin-bottom: 0px;" > 
    <center>
        <p>
            Y tú ¿Estás listo para ser creador ? 
        </p>
    </center>

</section>


<section class="home11" style="padding-top:60px; margin-bottom: 0px;">
<center class="font-montserrat subtitle" >
<h2 >ÚNETE </h2> 
<div style="height: 1px; width: 40px; background-color: #009c97; margin-bottom: 60px; margin-left: auto; margin-right: auto;" ></div>
</center>

<div class="h11-contenido font-lato" style="padding-top:0px">
    <div class="h11-cont1">
        <div>
            <button id="btn-abrir-popup" >Solicitar el programa</button>
            <div class="overlay" id="overlay">
                <section class="popup" id="popup">
                    <a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="fas fa-times"></i></a>
                    <iframe width="640px" height= "480px" src= "https://forms.office.com/Pages/ResponsePage.aspx?id=DQSIkWdsW0yxEjajBLZtrQAAAAAAAAAAAAO__SnT6j1UMjdEWEowT0FXMFhNTUdSQUNZSko0U1hUSC4u&embed=true" frameborder= "0" marginwidth= "0" marginheight= "0" style= "border: none; max-width:100%; max-height:100vh" allowfullscreen webkitallowfullscreen mozallowfullscreen msallowfullscreen> </iframe>
                </section>
		    </div>
        </div>
        <div>
            <button id="btn-abrir-popup2" >Preinscribete en la academia</button>
            <div class="overlay" id="overlay2">
                <section class="popup" id="popup2">
                    <a href="#" id="btn-cerrar-popup2" class="btn-cerrar-popup"><i class="fas fa-times"></i></a>
                    <iframe width="640px" height= "480px" src= "https://forms.office.com/Pages/ResponsePage.aspx?id=DQSIkWdsW0yxEjajBLZtrQAAAAAAAAAAAAO__SnT6j1URFhEN0g5VVlJRzRPR1pKSFRHVEUyUjE0Qy4u&embed=true" frameborder= "0" marginwidth= "0" marginheight= "0" style= "border: none; max-width:100%; max-height:100vh" allowfullscreen webkitallowfullscreen mozallowfullscreen msallowfullscreen> </iframe>
                </section>
		    </div>
        </div>
        <div>
            <button id="btn-abrir-popup3" >Quiero ser voluntario</button>
            <div class="overlay" id="overlay3">
                <section class="popup" id="popup3">
                    <a href="#" id="btn-cerrar-popup3" class="btn-cerrar-popup"><i class="fas fa-times"></i></a>
                    <iframe width="640px" height= "480px" src= "https://forms.office.com/Pages/ResponsePage.aspx?id=DQSIkWdsW0yxEjajBLZtrQAAAAAAAAAAAAO__SnT6j1UNTBNRlFKTjVQSFhPQTdHR0c1TERSNjY3TC4u&embed=true" frameborder= "0" marginwidth= "0" marginheight= "0" style= "border: none; max-width:100%; max-height:100vh" allowfullscreen webkitallowfullscreen mozallowfullscreen msallowfullscreen> </iframe>
                </section>
		    </div>
        </div>
        <div>
            <button id="btn-abrir-popup4">Quiero ser sponsor</button>
            <div class="overlay" id="overlay4">
                <section class="popup" id="popup4">
                    <a href="#" id="btn-cerrar-popup4" class="btn-cerrar-popup"><i class="fas fa-times"></i></a>
                    <iframe width="640px" height= "480px" src= "https://forms.office.com/Pages/ResponsePage.aspx?id=DQSIkWdsW0yxEjajBLZtrQAAAAAAAAAAAAO__SnT6j1UOEZSME5DWlY5MkZYREw2RzZBTVlDOVRGQi4u&embed=true" frameborder= "0" marginwidth= "0" marginheight= "0" style= "border: none; max-width:100%; max-height:100vh" allowfullscreen webkitallowfullscreen mozallowfullscreen msallowfullscreen> </iframe>
                </section>
		    </div>
        </div>

    </div>

    <div>
        <img src="<?php echo get_bloginfo('template_directory'); ?>/img/home/home-foto12.png" alt="">
    </div>
</div>


</section>



<script>
    var btnAbrirPopup = document.getElementById('btn-abrir-popup'),
	overlay = document.getElementById('overlay'),
	popup = document.getElementById('popup'),
    btnCerrarPopup = document.getElementById('btn-cerrar-popup');
    
    var btnAbrirPopup2 = document.getElementById('btn-abrir-popup2'),
	overlay2 = document.getElementById('overlay2'),
	popup2 = document.getElementById('popup2'),
    btnCerrarPopup2 = document.getElementById('btn-cerrar-popup2');
    
    
    var btnAbrirPopup3 = document.getElementById('btn-abrir-popup3'),
	overlay3 = document.getElementById('overlay3'),
	popup3 = document.getElementById('popup3'),
    btnCerrarPopup3 = document.getElementById('btn-cerrar-popup3');
    
    var btnAbrirPopup4 = document.getElementById('btn-abrir-popup4'),
	overlay4 = document.getElementById('overlay4'),
	popup4 = document.getElementById('popup4'),
    btnCerrarPopup4 = document.getElementById('btn-cerrar-popup4');
    


    btnAbrirPopup.addEventListener('click', function(){
	overlay.classList.add('active');
	popup.classList.add('active');
    });

    btnAbrirPopup2.addEventListener('click', function(){
	overlay2.classList.add('active');
	popup2.classList.add('active');
    });
    btnAbrirPopup3.addEventListener('click', function(){
	overlay3.classList.add('active');
	popup3.classList.add('active');
    });
    btnAbrirPopup4.addEventListener('click', function(){
	overlay4.classList.add('active');
	popup4.classList.add('active');
    });

    btnCerrarPopup.addEventListener('click', function(e){
        e.preventDefault();
        overlay.classList.remove('active');
        popup.classList.remove('active');
    });
    btnCerrarPopup2.addEventListener('click', function(e){
        e.preventDefault();
        overlay2.classList.remove('active');
        popup2.classList.remove('active');
    });
    btnCerrarPopup3.addEventListener('click', function(e){
        e.preventDefault();
        overlay3.classList.remove('active');
        popup3.classList.remove('active');
    });
    btnCerrarPopup4.addEventListener('click', function(e){
        e.preventDefault();
        overlay4.classList.remove('active');
        popup4.classList.remove('active');
    });
</script>



<section id="">

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3827.380761206224!2d-71.54248628507567!3d-16.405477442651637!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91424af631b383af%3A0x42aff66448d2a5cf!2sSalaverry%20301%2C%20Arequipa%2004001!5e0!3m2!1ses-419!2spe!4v1584647749292!5m2!1ses-419!2spe" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>





</section>


<style>
#barra-out{
    background-color: #f3f3f3;
}

#barra-out2{
    background-color: white;
}

 #barra{
        width:100%;
        height:40px;
        clip-path: polygon(0 0,0 100%,100% 100%,100% 0,62% 0, 50% 30px,38% 0);
        background-color: white ;
        margin-bottom: -2px;
    }

    #barra2{
        width:100%;
        height:40px;
        clip-path: polygon(0 0,0 100%,100% 100%,100% 0,62% 0, 50% 30px,38% 0);
        background-color: #58becc ;
        margin-bottom: -2px;
    }


    @media screen and (max-width: 600px) {
        #barra{
            height: 40px;
        }
        #barra2{
            height: 40px;
        }
    }
</style>