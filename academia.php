<html>
    <head>
    <?php include("head.php"); ?>
    </head>

    <body>
        <?php include("nav.php"); ?>
        <div class="font-lato" id="seccion1">
            <h1>Academia</h1>
            <p id="navega">Qué hacemos ?    <span style="margin: 0 30px;">></span>     Academia</p>
        </div>

        <div id="seccion2" class="font-lato">
            <div class="titulos-peque"><img src="img/academia/conoce.png" alt=""><h2>CONOCE</h2></div>
            <div class="titulos-peque"><img src="img/academia/aprende.png" alt=""><h2>APRENDE</h2></div>
            <div class="titulos-peque"><img src="img/academia/crea.png" alt=""><h2>CREA</h2></div>
        </div>
        <p class="font-lato" style="color: #999999; margin: 40px 15%; text-align: center; font-size: 1.4rem;">
            Con nuestros programas especializados buscamos potenciar las habilidades creativas de nuestros estudiantes convirtiendo sus ideas en proyectos tecnológicos.
        </p>

        <div id="seccion3">
            <div style="grid-area: foto1;"><img src="img/academia/foto1.png" class="center-cropped" alt=""></div>
            <div style="grid-area: foto2;"><img src="img/academia/foto2.png" class="center-cropped" alt=""></div>
            <div style="grid-area: foto3;"><img src="img/academia/foto3.png" class="center-cropped" alt=""></div>
            <div style="grid-area: texto1;">
                <h2 class="font-lato titulo-sec3">PENSAMIENTO COMPUTACIONAL</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex quaerat facilis quasi cum, necessitatibus consequuntur neque hic, quas eum nemo aperiam ipsum fugit est ab. Itaque fuga quas consequatur ab!</p>
                <button class="boton">DESCARGAR PDF</button>
            </div>
            <div style="grid-area: texto2;">
                <h2 class="font-lato titulo-sec3">PENSAMIENTO COMPUTACIONAL</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex quaerat facilis quasi cum, necessitatibus consequuntur neque hic, quas eum nemo aperiam ipsum fugit est ab. Itaque fuga quas consequatur ab!</p>
                <button class="boton">DESCARGAR PDF</button>
            </div>
            <div style="grid-area: texto3;">
                <h2 class="font-lato titulo-sec3">PENSAMIENTO COMPUTACIONAL</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex quaerat facilis quasi cum, necessitatibus consequuntur neque hic, quas eum nemo aperiam ipsum fugit est ab. Itaque fuga quas consequatur ab!</p>
                <button class="boton">DESCARGAR PDF</button>
            </div>
        </div>

        <div id="seccion4" class="font-montserrat">
            <div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis quaerat iusto impedit at veniam reiciendis eum totam aperiam et repellendus ipsa accusantium nam minus, deserunt quod voluptates ea earum. Sint?</p>
                <img src="img/academia/programador.png" alt="" height="300px">
            </div>
            <div>
                Cuadrito
            </div>
        </div>
        <?php include('footer.php'); ?>
    </body>
</html>

<style>
    h1{
        font-size: 4.5rem;
    }
    #navega{
        position: absolute;
        margin: 0;
        bottom: 20px;
        font-size: 1.1rem;
        font-weight:normal;
    }
    #seccion1{
        position: relative;
        padding-top: 30px;
        padding-left: 55px;
        font-weight: bold;
        height: 250px;
        background-image: url('img/academia/background.png');
        background-repeat: no-repeat;
        color:white;
    }

    #seccion2{
        
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        margin:  100px 10% 0 10%;
        column-gap: 50px;
        justify-items: center;
        flex-direction: column;
        text-align: center;
    }

    .titulos-peque{
        font-size: 0.9rem;
        color: #0066FF;
    }

    #seccion3{
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
        column-gap: 30px;
    }

    .titulo-sec3{
        font-size: 1.4rem;
        font-weight: bold;
        color: #3bb8ad;
    }

    .center-cropped {
        object-fit: none; /* Do not scale the image */
  object-position: center; /* Center the image within the element */
  height: 300px;
  width: 400px;
    }

    #seccion4{
        
        display: grid;
        grid-template-columns: 1fr 1fr;
        margin: 30px 10%;
        column-gap: 30px;
        flex-direction: column;
        justify-items: center;
        text-align: center;
    }
    }
</style>