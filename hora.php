<html>
    <head>
    <?php include("head.php"); ?>
    </head>

    <body>
        <?php include("nav.php"); ?>
        
        <div style="background-color: black; height: 10%;">

        </div>
        <div class="center " style="padding-top:45px; margin:0">
            <img src="img/horacod-logo.png" alt="" width="500px"> 
        </div>
        <div id="secc1" class="center font-lato">
            <p style="padding:7% 15%">
                La Hora del Código es un movimiento global impulsado por Code.org, que llega a millones de estudiantes en más de 180 países, en el que alumnos y personas de todas las edades aprenden los principios básicos de la programación.
            </p>
        </div>
        <div id="secc2">
            <div>
                <iframe width="720" height="412" src="https://www.youtube.com/embed/nKIu9yen5nc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div style="display: flex; justify-content: center; align-content: center;">
                <img src="img/hourofcode.png" alt="" height="412">
            </div>
        </div>

        <div id="barra" class="font-lato">
            <div class="cuadrito">¿EN QUÉ CONSISTE?</div>
            <div class="cuadrito">REQUISITOS</div>
            <div class="cuadrito">¿CÓMO PARTICIPAR?</div>
            <div class="cuadrito">TALLER</div>
        </div>

        <div id="secc3" class="font-lato">
            <div id="barra2">
                <div class="cuadrito2">Docente Facilitador</div>
                <div class="cuadrito2" >Voluntario</div>
                <div class="cuadrito2" >Embajador</div>
            </div>
            <div>
                <p>
                    Cualquier profesor convocado por su UGEL puede realizar la Hora del Código, mismo que se desarrollará dentro de una salda computación o innvocación.
                </p>
                    <br>
                <p>
                    Los pasos serían los siguientes:

                </p>
                <p>
                    <div class="redondo" id="c1">1</div> Llenar el Formulario de inscripción en este link, hasta el 29 de abril.  <br>
                    <div class="redondo" id="c2">2</div> Cumplir con la asistencia a la capacitación presencial. <br>
                    <div class="redondo" id="c3">3</div> Efectuar la Hora del Código en el horario y fecha acordada por su UGEL <br>

                </p>
                <br>
                <p>
                    Si eres docente y no te ha llegado convocatoria alguna por tu UGEL, o no perteneces a una UGEL dale click en el botón "Embajadores".
                </p>
            </div>  
        </div>

        <?php include('footer.php'); ?>
    </body>
</html>

<style>
    p{  
       margin: 0;
    }
    #secc1{
        background-color: #33cccc;
        color: white;
        font-size: 1.4em;
    }

    #secc2{
        display: grid;
        grid-template-columns: repeat(2,1fr);
        justify-items: center;
        align-items: center;
        /* grid-row-gap: 50px;           */
    }
    #barra{
        display: grid;
        grid-template-columns: repeat(4,1fr);
        margin: 0 20%;
        margin-top: 50px;
        
    }

    .cuadrito{
        text-align: center;
        padding: 15px 15px;
        border: 1px solid #33cccc;
        color: blue;
    }

    .cuadrito:hover{
        text-align: center;
        padding: 15px 15px;
        border: 1px solid #33cccc;
        color: white;
        background-color: #33cccc;
    }

    #secc3{
        margin: 0 15%;
        padding-top: 30px;
        display: grid;
        grid-template-columns: 180px 1fr;
        column-gap: 30px;
        margin-bottom: 50px;
    }

    #barra2{
        display: flex;
        flex-direction: column ;
    }

    .cuadrito2{
        text-align: center;
        padding: 10px 5px;
        border: 2px solid #d66d72;
        color: black;

        transform: perspective(35px) rotateX(-2deg);
        
    }

    .cuadrito2:hover{
        text-align: center;
        padding: 10px 5px;
        border: 2px solid #d66d72;
        color: white;
        background-color: #d66d72;
        transform: perspective(35px) rotateX(-2deg);
    }

    .redondo{
        border-radius: 50%;
        width: 30px;
        height: 30px;
        margin: 5px 0;

        
        color: white;
        display: inline-grid;
        justify-items: center;
        align-content: center;
    }

    #c1{
        background-color: red;
    }
    

    #c2{
        background-color: blue;
    }

    #c3{
        background-color: green;
    }


</style>