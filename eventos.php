<html>
    <head>
    <?php include("head.php"); ?>
    </head>

    <body>
        <?php include("nav.php"); ?>
        <div class="center" width="100%">
            <img src="img/events.png" alt="Eventos" width="70%" >
            <h1 id="csc-title" class="font-lato">Encuentro de Organizaciones<br> Educativas Innovadoras</h1>
            <p id="p-text" class="font-lato">
            En Latinoamérica y el Perú se vienen desarrollando diferentes iniciativas que impulsan cambios que la <br>
            educación y la formación necesitan para transformarse en la era digital. El reto que asumimos es convocar<br> estas iniciativas. Conocerlas, integrarlas y fortalecerlas, para construir juntos: una nueva era.            
            </p>


            <h3 id="galery-title" class="font-montserrat">GALERIA</h3>     
            <hr id="line-hr" width="60">
            
            <div class="header" id="myHeader">


            <div class="grid-container">
                <div class="grid-item parent">
                    <img src="img/galery1.jpeg">
                </div>
                <div class="grid-item">
                    <img src="img/galery2.jpeg">
                </div>
                <div class="grid-item">
                    <img src="img/galery3.jpeg">
                </div>  
                <div class="grid-item">
                    <img src="img/galery4.jpeg">
                </div>
                <div class="grid-item">
                    <img src="img/galery5.jpeg">
                </div>
                <div class="grid-item">
                    <img src="img/galery6.jpeg">
                </div>   
            </div>


        </div>

        <?php include("footer.php"); ?>
    </body>
</html>


<style>


.grid-container {
  display: grid;
  grid-row-gap: 50px;
  grid-column-gap: 70px;
  grid-template-columns: auto auto auto;
  padding: 150px;
}

.grid-item {
  
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
        margin-top: 100px;
        padding-left: 15% ;
        padding-right: 15% ;
        font-size: 16pt;    
    }


</style>





