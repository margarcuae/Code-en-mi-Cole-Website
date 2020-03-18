<html>

<head>
  <?php include("head.php"); ?>
  <link rel="stylesheet" href="css/flick.css" media="screen">
  <script src="js/flick.js"></script>
</head>

<body>
  <?php include("nav.php"); ?>

  <div class="font-lato" id="seccion1">
    <h1>Workshops</h1>
    <p id="navega">Qué hacemos ? <span style="margin: 0 30px;">></span> Workshops</p>
  </div>


  <div class="center" id="seccion2">
    <h2 id="title1" class="font-montserrat">POR QUÉ REALIZAMOS WORKSHOPS? <br><br>
      <hr id="raya">
    </h2>
    <div id="seccion1-2">
      <div><img class="img-secc1-2" src="img/workshop/w1.png" alt=""></div>
      <div><img class="img-secc1-2" src="img/workshop/w2.png" alt=""></div>
      <div><img class="img-secc1-2" src="img/workshop/w3.png" alt=""></div>
    </div>
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

  <div id="galeria-seccion">
  <div>
    <h2 class="font-lato galeria-titulo">GALERÍA</h2>
    <hr id="line-hr" width="60">

  </div>

  <div class="slideshow-container">
    <div class="mySlides fade">
      <div class="grid-container-gallery">
        <div class="grid-item parent">
          <img src="img/galery1.jpeg">
        </div>
        <div class="grid-item">
          <img src="img/galery2.jpeg">
        </div>
        <div class="grid-item">
          <img src="img/galery3.jpeg">
        </div>
      </div>
    </div>

    <div class="mySlides fade">
      <div class="grid-container-gallery">
        <div class="grid-item parent">
          <img src="img/galery4.jpeg">
        </div>
        <div class="grid-item">
          <img src="img/galery5.jpeg">
        </div>
        <div class="grid-item">
          <img src="img/galery3.jpeg">
        </div>

      </div>
    </div>

    <div id="dots-group">
      <span class="dot2" onclick="currentSlide(1)"></span>
      <span class="dot2" onclick="currentSlide(2)"></span>
      <span class="dot2 " onclick="currentSlide(3)"></span>
    </div>

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

  .img-secc1-2 {
    height: 280px;
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

  #seccion2 {
    background-color: #ececec;
  }

  #title1 {
    margin: 0px;
    padding-top: 60px;
    color: #1078ff;
  }

  #title2 {
    margin: 0;
    padding-top: 10px;
    color: #1078ff;
  }


  #raya {
    background-color: #1d4e9b;
    height: 1px;
    width: 90px;
    border: 0px;
  }


  #barra {
    width: 100%;
    height: 100px;
    clip-path: polygon(0 0, 0 100%, 100% 100%, 100% 0, 62% 0, 50% 30px, 38% 0);
    background-color: white;
    margin-bottom: -2px;
  }


  #seccion1-2 {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    margin: 0 8.5% 50px;
    column-gap: 30px;

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

  #galeria-seccion{
    background-color: #e7f3ff;
    margin: 0;
  }

  .galeria-titulo{
    text-align: center;
    color: #1078ff;
    padding-top: 60px;
    font-size: 2.3rem ;
  }

  @media screen and (min-width: 600px) {
    .carousel-cell img {
      height: 400px;
    }

  }

  @media screen and (max-width: 600px) {

    h1 {
      font-size: 40px;
    }

    #seccion1 {
      height: 200px;
    }

    #seccion1-2 {
      grid-template-columns: 1fr;
      row-gap: 30px;
    }

    #barra {
      height: 50px;
    }
  }
</style>


<script>

  var carousel = document.querySelector('.carousel');
  var flkty = new Flickity(carousel, {
    imagesLoaded: true,
    percentPosition: false,
    wrapAround: true,
  });

  var imgs = carousel.querySelectorAll('.carousel-cell img');
  // get transform property
  var docStyle = document.documentElement.style;
  var transformProp = typeof docStyle.transform == 'string' ?
    'transform' : 'WebkitTransform';

  flkty.on('scroll', function () {
    flkty.slides.forEach(function (slide, i) {
      var img = imgs[i];
      var x = (slide.target + flkty.x) * -1 / 3;
      img.style[transformProp] = 'translateX(' + x + 'px)';
    });
  });
</script>



<style>
  .grid-container-gallery {
    display: grid;
    grid-row-gap: 50px;
    grid-column-gap: 70px;
    grid-template-columns: auto auto auto;
    padding: 0;
  }

  .grid-item {
    cursor: pointer;
    padding: 20px;
    text-align: center;

    width: 100%;
    height: 20rem;
    overflow: hidden;

    /* Magic */
    display: flex;
    align-items: center;
    /* vertical */
    justify-content: center;
    /* horizontal */
  }

  .grid-item:hover {
    background-color: #3e8e41
  }


  .grid-item:active {
    background-color: #3e8e41;
    box-shadow: 0 5px #666;
    transform: translateY(4px);
  }

  #line-hr {
    border: 0.4pt solid #1D4E9B;
  }

  #galery-title {
    margin-top: 100px;
    font-size: 33;
    font-weight: bold;
    color: #1D4E9B;
  }

  #csc-title {
    font-size: 50pt;
    font-weight: bold;
    margin-top: 0;
  }

  #p-text {
    margin-top: 10px;
    padding-left: 15%;
    padding-right: 15%;
    font-size: 16pt;
  }
</style>

<style>
  /* Slideshow container */
  .slideshow-container {
    /* margin-top: -100px; */
    max-width: 100%;
    position: relative;

  }

  /* The dots/bullets/indicators */
  .dot2 {

    cursor: pointer;
    height: 15px;
    width: 15px;

    background-color: #bbb;
    border-radius: 50%;
    display: inline-block;
    transition: background-color 0.6s ease;
  }

  #dots-group {
    margin-top: 20px;
    margin-bottom: 20px;
    position: relative;
    text-align: center;
    padding-bottom: 20px;
  }

  .active,
  .dot2:hover {

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
    from {
      opacity: .4
    }

    to {
      opacity: 1
    }
  }

  @keyframes fade {
    from {
      opacity: .4
    }

    to {
      opacity: 1
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
    var dots = document.getElementsByClassName("dot2");
    if (n > slides.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = slides.length }
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
  }
</script>