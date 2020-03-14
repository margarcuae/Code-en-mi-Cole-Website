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
</style>