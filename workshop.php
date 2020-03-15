<html>
<head>
    <?php include("head.php"); ?>
    <link rel="stylesheet" href="css/flick.css" media="screen">
    <script src="js/flick.js"></script>
</head>

<body>
    <?php include("nav.php"); ?>

    <div class="font-lato" id="seccion1">
        <h1>Academia</h1>
        <p id="navega">Qué hacemos ? <span style="margin: 0 30px;">></span> Academia</p>
    </div>


    <div class="center" id="seccion2">
        <h2 id="title2" class="font-montserrat">POR QUÉ REALIZAMOS WORKSHOPS? <br><br> <hr id="raya"> </h2>
        <div id="barra"></div>  
    </div>

    <div class="center" id="seccion3">
        <h2 id="title2" class="font-montserrat">CURSOS</h2>

        <div class="carousel">
            
            <div class="carousel-cell">
                <img src="img/workshop/baner1.png" alt="">
            </div>


            <div class="carousel-cell"><img src="img/workshop/baner2.png" alt=""></div>
        </div>
       
    </div>


    
    <?php include('footer.php'); ?>
</body>

<style>
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
        background-image: url('img/academia/background.png');
        background-repeat: no-repeat;
        color: white;
    }

    #seccion2{
        background-color:#ececec;
    }

    #title2{
        margin:0;
        padding-top: 10px;
        color:#1078ff;
    }


    #raya{
        background-color: #1d4e9b;
        height:1px;
        width:90px;
        border:0px;
    }


    #barra{
        width:100%;
        height:100px;
        clip-path: polygon(0 0,0 100%,100% 100%,100% 0,62% 0, 50% 30px,38% 0);
        background-color: white;
        margin-bottom: -2px;
    }  

   
    
.carousel {
  margin: 40px 7% 50px 7%;
  background: #021921;
}

.carousel-cell {
  margin-right: 20px;
  overflow: hidden;
}

.carousel-cell img {
  display: block;
  height: 200px;
}

@media screen and ( min-width: 768px ) {
  .carousel-cell img {
    height: 400px;
  }
}

</style>


<script>
  
var carousel = document.querySelector('.carousel');
var flkty = new Flickity( carousel, {
  imagesLoaded: true,
  percentPosition: false,
  wrapAround: true,
});

var imgs = carousel.querySelectorAll('.carousel-cell img');
// get transform property
var docStyle = document.documentElement.style;
var transformProp = typeof docStyle.transform == 'string' ?
  'transform' : 'WebkitTransform';

flkty.on( 'scroll', function() {
  flkty.slides.forEach( function( slide, i ) {
    var img = imgs[i];
    var x = ( slide.target + flkty.x ) * -1/3;
    img.style[ transformProp ] = 'translateX(' + x  + 'px)';
  });
});
</script>