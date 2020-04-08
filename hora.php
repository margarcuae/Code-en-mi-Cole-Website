<?php /* Template Name: Hora */ ?>

<html>

<head>
    <?php include("head.php"); ?>
</head>

<body>
    <?php include("nav.php"); ?>

    <div class="center" style="background-color: black;">
        <video id="video" autoplay muted loop>
            <source src="<?php echo get_bloginfo('template_directory'); ?>/videos/videohoradelcodigo.mp4"
                type="video/mp4">
            Tu navegador no soporta Videos
        </video>
    </div>


    <div class="center " style="padding-top:45px; margin:0">
        <img id="img1" src="<?php echo get_bloginfo('template_directory'); ?>/img/horacod-logo.png" alt=""
            width="500px">
    </div>

    <div id="secc1" class="center font-lato">
        <p id="p-la-hora">
            La Hora del Código es un movimiento global impulsado por Code.org, que llega a millones de estudiantes en
            más de 180 países, en el que alumnos y personas de todas las edades aprenden los principios básicos de la
            programación.
        </p>
    </div>
    <div id="secc2">
        <div>
            <iframe id="video2" width="720" height="412" src="https://www.youtube.com/embed/nKIu9yen5nc" frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        </div>
        <div style="display: flex; justify-content: center; align-content: center;">
            <img id="img2" src="<?php echo get_bloginfo('template_directory'); ?>/img/hourofcode.png" alt="">
        </div>
    </div>

    <div id="barra" class="font-lato">
        <div id="consiste-barra" class="cuadrito" onclick="consiste()">¿EN QUÉ CONSISTE?</div>
        <div id="requisitos-barra" class="cuadrito" onclick="requisitos()">REQUISITOS</div>
        <div id="participar-barra" class="cuadrito" onclick="participar()">¿CÓMO PARTICIPAR?</div>
        <div id="taller-barra" class="cuadrito" onclick="taller()">TALLER</div>
    </div>

    <div id="consiste" class="font-lato">
        <p>
            LA HORA DEL CÓDIGO es una iniciativa educativa impulsada por Code.org (USA) y Code en mi Cole (Perú), diseñada para demostrar que estudiantes de todas las edades y de cualquier parte del mundo pueden aprender a programar y comprender los fundamentos básicos de la Ciencia de la Computación. Elementos que son fundamentales e imprescindibles introducir en los estudiantes de forma temprana; sea cual sea su futuro desarrollo profesional.

        </p>
        <br>
    </div>

    <div id="requisitos" class="font-lato" style="text-align: justify;">
        <div style="grid-area: r1; display: flex; align-items: center;">
            <img src="<?php echo get_bloginfo('template_directory'); ?>/img/hora.png" height="90px"
                style="margin-right: 10px;">
            La actividad dura alrededor de una hora y dentro de ese periodo se trata de alcanzar la mayor cantidad de
            líneas de código. No se necesita tener experiencia previa
        </div>
        <div style="grid-area: r2;display: flex; align-items: center;">
            <img src="<?php echo get_bloginfo('template_directory'); ?>/img/browser.png" height="90px"
                style="margin-right: 10px;">
            Un espacio donde se pueda congregar a personas con algunas computadoras, laptops, tablets y/o celulares
            inteligentes, no es necesario tener conexión a internet.
        </div>
        <div style="grid-area: r3;display: flex; align-items: center;">
            <img src="<?php echo get_bloginfo('template_directory'); ?>/img/equipo.png" height="90px"
                style="margin-right: 10px;">
            En un dispositivo se pueden trabajar de 2 a 3 personas.
        </div>
    </div>


    <div id="secc3" class="font-lato">
        <div id="barra2">
            <div class="cuadrito2" id="docente-barra" onclick="docente()">Docente Facilitador</div>
            <div class="cuadrito2" id="voluntario-barra" onclick="voluntario()">Voluntario</div>
            <div class="cuadrito2" id="embajador-barra" onclick="embajador()">Embajador</div>
        </div>
        <div id="docente">
            <p>
                Cualquier profesor convocado por su UGEL puede realizar la Hora del Código, mismo que se desarrollará
                dentro de una salda computación o innvocación.
            </p>
            <br>
            <p>
                Los pasos serían los siguientes:

            </p>
            <p>
                <div class="redondo" id="c1">1</div> Inscribirse previamente con su UGEL. <br>
                <div class="redondo" id="c2">2</div> Cumplir con la asistencia a la capacitación presencial. <br>
                <div class="redondo" id="c3">3</div> Efectuar la Hora del Código en el horario y fecha acordada por su
                UGEL <br>

            </p>
            <br>
            <p>
                Si eres docente y no te ha llegado convocatoria alguna por tu UGEL, o no perteneces a una UGEL dale
                click en el botón "Embajadores".
            </p>
        </div>

        <div id="voluntario">
            Si quieres ser parte de La Hora del Código, organizada por Code.org y Code en mi Cole, puedes convertirte en voluntario y ayudarnos desde cualquier lugar del país. 
 Darle la oportunidad a niños y jóvenes de aprender a programar y comprender la importancia de la programación y el pensamiento computacional, es nuestro objetivo. ¡Súmate!


            <br>
            <br>
            Aprende más sobre la hora del código: <br>
            <a href="https://code.org/es"><button class="boton"
                    style="height: 40px; background-color: yellow; color: black;">Click Aquí</button></a>
        </div>

        <div id="embajador" style="text-align: center;">
            Los embajadores son personas e instituciones como: colegios, instituciones gubernamentales, universidades, empresas, organizaciones sin fines de lucro, que quieren sumarse a este movimiento mundial.
            <br>
            <br>
Los embajadores apoyan de esta manera: 
            <br>
            <br>
            <div style="text-align: left;">

                <div class="redondo" style="background-color: green;">1</div> Gestionar en las instalaciones, las
                computadoras, las fecha y hora en la que se desarrollará "La hora del código" <br>
                <div class="redondo" style="background-color: orangered;">2</div> Apoyar en la difusión de actividades.
 <br>
                <div class="redondo" style="background-color: magenta;">3</div>Se capacita y ejecuta La Hora del Código <br>
            </div>
        </div>
    </div>

    <div id="taller" class="taller center">
        <div>
            <a href="https://code.org/minecraft"><img
                    src="<?php echo get_bloginfo('template_directory'); ?>/img/hour/acua.jpg" alt="" height="250px"></a>
        </div>
        <div class="center">
            <a href="https://hourofcode.com/dance2019">
                <img src="<?php echo get_bloginfo('template_directory'); ?>/img/hour/dance-2019.jpg" alt=""
                    height="250px">

            </a>


            <a href="https://hourofcode.com/es/learn">

                <button class="boton" style="height: 40px; cursor: pointer;"> Más juegos </button>
            </a>


        </div>
        <div>
            <a href="https://hourofcode.com/flap">
                <img src="<?php echo get_bloginfo('template_directory'); ?>/img/hour/flappy.jpg" alt="" height="250px">

            </a>

        </div>


    </div>

    <?php include('footer.php'); ?>
</body>

</html>

<style>
    p {
        margin: 0;
    }

    #video {
        width: 65%;
    }

    #p-la-hora {
        padding: 7% 15%;
    }

    #secc1 {
        background-color: #33cccc;
        color: white;
        font-size: 1.4em;
    }

    #secc2 {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        justify-items: center;
        align-items: center;
        /* grid-row-gap: 50px;           */
    }

    #barra {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        margin: 0 20%;
        margin-top: 50px;

    }

    .cuadrito {
        cursor: pointer;
        text-align: center;
        padding: 15px 15px;
        border: 1px solid #33cccc;
        color: blue;
    }

    .cuadrito:hover {
        cursor: pointer;
        text-align: center;
        padding: 15px 15px;
        border: 1px solid #33cccc !important;
        color: white;
        background-color: #33cccc !important;
    }

    #secc3 {
        margin: 0 15%;
        padding-top: 30px;
        display: grid;
        grid-template-columns: 180px 1fr;
        column-gap: 30px;
        margin-bottom: 50px;

    }



    #barra2 {
        display: flex;
        flex-direction: column;
    }

    .cuadrito2 {
        cursor: pointer;
        text-align: center;
        padding: 10px 5px;
        border: 2px solid #d66d72;
        color: black;

        transform: perspective(35px) rotateX(-2deg);

    }

    #img2 {
        height: 412px;
    }

    .cuadrito2:hover {
        cursor: pointer;
        text-align: center;
        padding: 10px 5px;
        border: 2px solid #d66d72 !important;
        color: white;
        background-color: #d66d72 !important;
        transform: perspective(35px) rotateX(-2deg);
    }

    .redondo {
        border-radius: 50%;
        width: 30px;
        height: 30px;
        margin: 5px 0;


        color: white;
        display: inline-grid;
        justify-items: center;
        align-content: center;
    }

    #c1 {
        background-color: red;
    }


    #c2 {
        background-color: blue;
    }

    #c3 {
        background-color: green;
    }



    #consiste {
        display: block;
        margin-top: 20px;
        margin-left: 15%;
        margin-right: 15%;
        margin-bottom: 20px;
    }

    #requisitos {
        margin-top: 60px;
        margin-left: 15%;
        margin-right: 15%;
        display: none;
        grid-template-areas: "r1 r1 r2 r2"". r3 r3 .";
        grid-template-columns: 1fr 1fr 1fr 1fr;
        column-gap: 50px;
        row-gap: 60px;

    }

    #taller {
        display: none;
    }

    #secc3 {
        display: none;
    }

    #voluntario {
        text-align: center;
    }

    #taller {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        column-gap: 30px;
        margin-left: 15%;
        margin-right: 15%;
        margin-top: 25px;
        margin-bottom: 25px;

    }

    @media screen and (max-width: 600px) {

        #p-la-hora {
            padding: 5% 10%;
        }

        #video {
            width: 100%;
        }

        #video2 {
            width: 100%;
            height: auto;
        }

        #img1 {
            width: 80%;
        }

        #secc2 {
            grid-template-columns: 1fr;
        }

        #barra {
            grid-template-columns: 1fr 1fr;
            margin: 0 8%;
        }

        .cuadrito {
            font-size: 9pt;
        }

        #img2 {
            width: 80%;
            height: auto;
        }

        #secc1 {
            font-size: 1.2em;
        }

        #secc3 {
            grid-template-columns: 1fr;
            row-gap: 15px;
        }


        #requisitos {
            /* margin-top: 60px;
            margin-left: 15%;
            margin-right: 15%;
            display: none;
            grid-template-areas: "r1 r1 r2 r2" ". r3 r3 .";
            grid-template-columns: 1fr 1fr 1fr 1fr;
            column-gap: 50px;
            row-gap: 60px; */
            grid-template-areas: "r1""r2""r3";
            grid-template-columns: 1fr;
        }

        #taller {
            grid-template-columns: 1fr;
            row-gap: 15px;
        }

        .taller img {
            height: 160px;
        }

    }
</style>


<script>
    function consiste() {
        document.getElementById("consiste").style.display = "block";
        document.getElementById("requisitos").style.display = "none";
        document.getElementById("secc3").style.display = "none";
        document.getElementById("taller").style.display = "none";


        //
        document.getElementById("consiste-barra").style.backgroundColor = "#33cccc";
        document.getElementById("requisitos-barra").style.backgroundColor = "white";
        document.getElementById("participar-barra").style.backgroundColor = "white";
        document.getElementById("taller-barra").style.backgroundColor = "white";

    }

    function requisitos() {

        document.getElementById("consiste").style.display = "none";
        document.getElementById("requisitos").style.display = "grid";
        document.getElementById("secc3").style.display = "none";
        document.getElementById("taller").style.display = "none";

        //
        document.getElementById("consiste-barra").style.backgroundColor = "white";
        document.getElementById("requisitos-barra").style.backgroundColor = "#33cccc";
        document.getElementById("participar-barra").style.backgroundColor = "white";
        document.getElementById("taller-barra").style.backgroundColor = "white";


    }

    function participar() {

        document.getElementById("consiste").style.display = "none";
        document.getElementById("requisitos").style.display = "none";
        document.getElementById("secc3").style.display = "grid";
        document.getElementById("taller").style.display = "none";

        //
        document.getElementById("consiste-barra").style.backgroundColor = "white";
        document.getElementById("requisitos-barra").style.backgroundColor = "white";
        document.getElementById("participar-barra").style.backgroundColor = "#33cccc";
        document.getElementById("taller-barra").style.backgroundColor = "white";

    }

    function taller() {
        document.getElementById("consiste").style.display = "none";
        document.getElementById("requisitos").style.display = "none";
        document.getElementById("secc3").style.display = "none";
        document.getElementById("taller").style.display = "grid";

        document.getElementById("consiste-barra").style.backgroundColor = "white";
        document.getElementById("requisitos-barra").style.backgroundColor = "white";
        document.getElementById("participar-barra").style.backgroundColor = "white";
        document.getElementById("taller-barra").style.backgroundColor = "#33cccc";

    }

    function docente() {
        document.getElementById("docente").style.display = "block";
        document.getElementById("voluntario").style.display = "none";
        document.getElementById("embajador").style.display = "none";

        document.getElementById("docente-barra").style.backgroundColor = "#d66d72";
        document.getElementById("voluntario-barra").style.backgroundColor = "white";
        document.getElementById("embajador-barra").style.backgroundColor = "white";
    }

    function voluntario() {
        document.getElementById("docente").style.display = "none";
        document.getElementById("voluntario").style.display = "block";
        document.getElementById("embajador").style.display = "none";

        document.getElementById("docente-barra").style.backgroundColor = "white";
        document.getElementById("voluntario-barra").style.backgroundColor = "#d66d72";
        document.getElementById("embajador-barra").style.backgroundColor = "white";
    }

    function embajador() {
        document.getElementById("docente").style.display = "none";
        document.getElementById("voluntario").style.display = "none";
        document.getElementById("embajador").style.display = "block";

        document.getElementById("docente-barra").style.backgroundColor = "white";
        document.getElementById("voluntario-barra").style.backgroundColor = "white";
        document.getElementById("embajador-barra").style.backgroundColor = "#d66d72";
    }


    docente();
    consiste();

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

    btnAbrirPopup2.addEventListener('click', function () {
        overlay2.classList.add('active');
        popup2.classList.add('active');
    });


    btnAbrirPopup3.addEventListener('click', function () {
        overlay3.classList.add('active');
        popup3.classList.add('active');
    });

    btnAbrirPopup4.addEventListener('click', function () {
        overlay4.classList.add('active');
        popup4.classList.add('active');
    });

    btnCerrarPopup2.addEventListener('click', function (e) {
        e.preventDefault();
        overlay2.classList.remove('active');
        popup2.classList.remove('active');
    });

    btnCerrarPopup3.addEventListener('click', function (e) {
        e.preventDefault();
        overlay3.classList.remove('active');
        popup3.classList.remove('active');
    });
    btnCerrarPopup4.addEventListener('click', function (e) {
        e.preventDefault();
        overlay4.classList.remove('active');
        popup4.classList.remove('active');
    });


</script>
