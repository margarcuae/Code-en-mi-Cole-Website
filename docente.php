<html>
    <head>
    <?php include("head.php"); ?>
    </head>

    <body>
        <?php include("nav.php"); ?>
        <div class="center" width="100%">
            <img id="imagen-n1" src="img/docente.png" alt="Conferencia" width="30%" >
            <h1 id="csc-title" class="font-lato">Programa de Formación Docente<br> <span style="color:blue"> en Ciencia de la Computación </span> </h1>
            <p id="p-text" class="font-lato">
               Buscamos docentes de educación básica regular de nivel inicial, primario y secundario para dictar capacitaciones presenciales sobre Ciencia de la Computación y su pedagogía. La capacitación posee una duración de 120 horas totales, distribuidas en tres meses.
          
               <br><br>

               Luego de las capacitaciones se espera la aplicación de los conocimientos adquiridos para medir el impacto en los estudiantes.
            </p>
        </div>

        <div id="barra"></div>  
        <div class="center" id="seccion2">
            <h2 id="title2" class="font-montserrat">LA CIENCIA DE LA COMPUTACIÓN IMPLICA: <br><br> <hr id="raya"> </h2>
            

            <div id="subsec">
                
                <div >
                    <img class="img-small" src="img/docente-r1.png" >
                    <div style="display: inline-block; vertical-align: middle;">
                        <h3 class="font-lato small-title">Pensamiento Computacional</h3>
                        <p class="font-lato small-paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>

                <div>
                    <img class="img-small" src="img/docente-r2.png" >
                    <div style="display: inline-block; vertical-align: middle;">
                        <h3 class="font-lato small-title">Programación</h3>
                        <p class="font-lato small-paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>

                <div>
                    <img class="img-small" src="img/docente-r3.png" >
                    <div style="display: inline-block; vertical-align: middle;">
                        <h3 class="font-lato small-title">Algoritmos</h3>
                        <p class="font-lato small-paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>

                <div>
                    <img class="img-small" src="img/docente-r4.png" >
                    <div style="display: inline-block; vertical-align: middle;">
                        <h3 class="font-lato small-title">Redes de Computadoras</h3>
                        <p class="font-lato small-paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>

                
            </div>

            
        </div>

        <div class="center" id="seccion3">
            <h2 id="title3" class="font-montserrat">¿POR QUÉ CIENCIA DE LA COMPUTACIÓN? <br><br> <hr id="raya"> </h2>
            <p class="font-lato" id="p-sec3">
                Ciencia de la Computación es una de las áreas más increíbles que hay en el mundo. No solo son increíblementes expresivas, posibilitando un número infinito de combinaciones e ideas, si no que cuando son bien utilizadas, dan como resultado un producto útil y funcional que puede entretener e informar a las masas.
                <br>
                <br>
                El arte de la Ciencia de la Computación comienza con un problema que necesita ser resuelto . Problemas de la Vida diaria, en el trabajo, en las intercomunicaciones, en todo. 
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
        width: 80px;
        vertical-align: middle;
    }

    .small-title{
        display: inline;
    }

    .small-paragraph{
        padding:20px;
    }

    #seccion3{

        width: 100%;
        background-color: #ecd6d8;
        background-image:url('img/docentes-seccion2.png');
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
            margin-top: 35pt;
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