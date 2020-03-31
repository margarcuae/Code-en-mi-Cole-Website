<?php /* Template Name: CS Conferencia */ ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>CSEC</title>
  <link rel="icon" href="<?php echo get_bloginfo('template_directory'); ?>/csconference/img/codeicon.png" type="image/png">

  <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/csconference/vendors/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/csconference/css/style.css">
</head>

<body>

  <!--================ Header Menu Area start =================-->
  <header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light ">
        <div class="container box_1620">
          <a class="navbar-brand logo_h" href="/cs-conferencia"><img class="smallImage" src="<?php echo get_bloginfo('template_directory'); ?>/csconference/img/Recurso.png" alt=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="navigation nav navbar-nav menu_nav justify-content-end">
              <li class="nav-item active"><a class="nav-link" href="#home">Home</a></li>
              <li class="nav-item"><a class="nav-link" href="#infoEvent">Sobre el evento</a>
              <li class="nav-item"><a class="nav-link" href="#calendarSect">Programa</a>
              <li class="nav-item"><a class="nav-link" href="#guestsSect">Expositores</a></li>
              <li class="nav-item"><a class="nav-link" href="#info">Sedes</a></li>
            </ul>
            <ul class="nav-right text-center text-lg-right py-4 py-lg-0">
              <li><a
                  href="http://bit.ly/CSECONFERENCE"
                  target="_blank">Registrarse</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>
  <!--================Header Menu Area =================-->


  <!--================Hero Banner Area Start =================-->
  <section class="hero-banner" id="home">
    <div class="container text-center">
      <span class="hero-banner-icon"><i class="flaticon-sing"></i></span>
      <h1>COMPUTER SCIENCE EDUCATION CONFERENCE</h1>
      <h2 class="banner-title-info textWhite">Lima 28 NOV - Arequipa 10 DIC - Cusco 13 DIC</h2>
      <div class="mt-4">
        <a class="button button-header bt1"
          href="https://www.joinnus.com/seminarios-y-conferencias/lima-computer-science-education-conference-33276"
          target="_blank">Registrarse </a>
        <!--a class="button button-header bt2" href="#">Leer más</a-->
      </div>
    </div>
  </section>
  <!--================Hero Banner Area End =================-->


  <!--================ Innovation section Start =================-->
  <section class="section-margin" id="infoEvent">
    <div class="container">
      <div class="text-center ">
        <h2 class="intro-title">Sobre el evento</h2>
      </div>

      <div class="container-fluid mt-4 mb-4 ">
        <div class="row align-items-center">
          <div class="col-xs-7 col-sm-6 col-lg-7 text-center p-2">
            <div class="">
              <img class="img-fluid" src="<?php echo get_bloginfo('template_directory'); ?>/csconference/img/banner/sobre.jpg" alt="sobre el evento">
              <a class="popup cboxElement" href="https://www.youtube.com/embed/XhveHKJWnOQ?autoplay=1&amp;loop=1">
              </a>
            </div>
          </div>
          <div class="col-xs-5 col-sm-6 col-lg-5">
            ¿Qué ocurriría si le damos la oportunidad para que 50,000 niños peruanos tengan
            las herramientas para mejorar el mundo?
            <br>
            Computer Science Education Conference es una iniciativa desarrollada con el
            objetivo de fomentar la incorporación de Ciencia de la Computación en la Educación Escolar.
            En esta primera edición, Arequipa, Cusco y Lima serán las ciudades sede de este importante evento.
            <b>#CSEConference</b> reúne a expertos internacionales y nacionales que compartirán sus experiencias desde
            el análisis de casos reales hasta la puesta en práctica de la integración del pensamiento computacional en las sesiones de aprendizaje.
           ¡El futuro de la educación es ahora!

          </div>
        </div>
      </div>

    </div>
  </section>
  <!--================ Innovation section End =================-->
  <!--================ Facts Strip Start ================-->
  <section class="fun-facts facts-strips text-center" id="funfacts">
    <div class="container align-self-center">
      <div class="row">

        <div class="icon-facts col-md-4">
          <span class="count">500</span>
          <h3 class="textWhite">Asistentes</h3>
        </div>

        <div class="icon-facts col-md-4">
          <span class="count">20</span>
          <h3 class="textWhite">Expositores</h3>
        </div>

        <div class="icon-facts col-md-4">
          <span class="count">3</span>
          <h3 class="textWhite">Ciudades</h3>
        </div>

      </div>
    </div>
  </section>
  <!--================ Facts Strip End ================-->
  <!--================ Calendar section Start =================-->
  <section class="section-margin" id="calendarSect">
    <div class="container">
      <div class="section-intro text-center">
        <h2 class="primary-text">Programa</h2>
      </div>
      <div class="scheduleTab text-center ">
        <div class="mt-4 mb-4">
          <ul class="nav nav-tabs">
            <li class="active p-2"><a data-toggle="tab" class="button button-header bt1 active show" href="#day1">Lima</a> </li>
			<li class="p-2"><a data-toggle="tab" class="button button-header bt1" href="#day3">Arequipa</a></li>
            <li class="p-2"><a data-toggle="tab" class="button button-header bt1" href="#day2">Cusco</a></li>            
          </ul>
        </div>
      </div>

      <div class="tab-content">
        <div id="day1" class="tab-pane active">
          <h4 class="text-center pt-0 pb-3">Jueves, 28 de noviembre</h4>
          <div class="schedule-listing bg">
            <div class="row">
              <div class="col-2">
                <span class="schedule-slot-time">18:00 - 18:15</span>
              </div>
              <div class="col-10 p-l-2 schedule-slot-info">
                <div class="schedule-slot-info-content">
                  <h3 class="schedule-slot-title">Ingreso y registro de participantes</h3>
                </div>
                <!--Info content end -->
              </div><!-- Slot info end -->
            </div>
          </div>

          <div class="schedule-listing nbg">
            <div class="row">
              <div class="col-2">
                <span class="schedule-slot-time">18:15 - 18:20</span>
              </div>
              <div class="col-10 p-l-2 schedule-slot-info">
                <div class="schedule-slot-info-content">
                  <h4>Representante del Ministerio de Educación</h4>
                  <h3 class="schedule-slot-title">Inauguración del evento</h3>
                </div>
                <!--Info content end -->
              </div><!-- Slot info end -->
            </div>
          </div>
          <div class="schedule-listing nbg">
            <div class="row">
              <div class="col-2">
                <span class="schedule-slot-time">18:20 - 18:30</span>
              </div>
              <div class="col-10 p-l-2 schedule-slot-info">
                <div class="schedule-slot-info-content">
                  <h3 class="schedule-slot-title">Palabras de Bienvenida y operación de la Fundación Friedrich Naumann
                    en Perú y países andinos.</h3>
                  <p>Jose Muñoz - Fundación Friedrich Naumann para la Libertad</p>
                </div>
                <!--Info content end -->
              </div><!-- Slot info end -->
            </div>
          </div>

          <div class="schedule-listing nbg">
            <div class="row">
              <div class="col-2">
                <span class="schedule-slot-time">18:30 - 19:00</span>
              </div>
              <div class="col-10 p-l-2 schedule-slot-info">
                <div class="schedule-slot-info-content">
                  <h3 class="schedule-slot-title">"Educación en Ciencia de la Computación desde la escuela"</h3>
                  <p>Dr. Ernesto Cuadros - Director de Ciencia de la Computación en UTEC</p>
                </div>
                <!--Info content end -->
              </div><!-- Slot info end -->
            </div>
          </div>

          <div class="schedule-listing bg">
            <div class="row">
              <div class="col-2">
                <span class="schedule-slot-time">19:00 - 19:15</span>
              </div>
              <div class="col-10 p-l-2 schedule-slot-info">
                <div class="schedule-slot-info-content">
                  <h3 class="schedule-slot-title">Preguntas del público</h3>
                </div>
                <!--Info content end -->
              </div><!-- Slot info end -->
            </div>
          </div>
          <div class="schedule-listing nbg">
            <div class="row">
              <div class="col-2">
                <span class="schedule-slot-time">19:15 - 19:45</span>
              </div>
              <div class="col-10 p-l-2 schedule-slot-info">
                <div class="schedule-slot-info-content">
                  <h3 class="schedule-slot-title">Leonardo Ortiz Villacorta</h3>
                  <p class="no-gutters mb-1">Code.org (USA)</p>
                  <p class="no-gutters mb-1">"Computer Science for all"</p>
                </div>
                <!--Info content end -->
              </div><!-- Slot info end -->
            </div>
          </div>
          <div class="schedule-listing nbg">
            <div class="row">
              <div class="col-2">
                <span class="schedule-slot-time">19:45 - 20:30</span>
              </div>
              <div class="col-10 p-l-2 schedule-slot-info">
                <div class="schedule-slot-info-content">
                  <h3 class="schedule-slot-title">Presentación de proyectos de los estudiantes de Code en mi Cole</h3>
                  <p>Kenny Lazo y Renzo Sousa - Code en mi Cole Lima</p>
                </div>
                <!--Info content end -->
              </div><!-- Slot info end -->
            </div>
          </div>
          <div class="schedule-listing nbg">
            <div class="row">
              <div class="col-2">
                <span class="schedule-slot-time"> 20:30 - 21:15</span>
              </div>
              <div class="col-10 p-l-2 schedule-slot-info">
                <div class="schedule-slot-info-content">
                  <h4>Panel (por confirmar)</h4>
                  <h3 class="schedule-slot-title">"Experiencias y retos en educación tecnológica en Perú"</h3>
                  <p>Modera: Kenny Lazo - cofundador Code en mi Cole</p>
                  <ul class="pl-4 panel">                    
                    <li>Diego Velez - Laboratoria</li>
					<li>Alejandra González Cardozo - Fundación Telefónica del Perú</li>
                    <li>Carmen Zamora - PAENFTS del Ministerio de Educación</li>
                    <li>Hugo Rojas - Municipalidad de Lima</li>
                    <li>Antonio Culqui - Tannde</li>
                    <li>Christian Yaranga - UTK</li>
                    <li>Marina Muñoz - Generación Tec</li>
                  </ul>
                </div>
                <!--Info content end -->
              </div><!-- Slot info end -->
            </div>
          </div>

          <div class="schedule-listing nbg">
            <div class="row">
              <div class="col-2">
                <span class="schedule-slot-time">21:15 - 21:30</span>
              </div>
              <div class="col-10 p-l-2 schedule-slot-info">
                <div class="schedule-slot-info-content">
                  <h3 class="schedule-slot-title"> Fotografía y networking final</h3>                 
                </div>
                <!--Info content end -->
              </div><!-- Slot info end -->
            </div>
          </div>

          <div class="schedule-listing bg">
            <div class="row">
              <div class="col-2">
                <span class="schedule-slot-time">22:00</span>
              </div>
              <div class="col-10 p-l-2 schedule-slot-info">
                <div class="schedule-slot-info-content">
                  <h3 class="schedule-slot-title">After event</h3>
                </div>
                <!--Info content end -->
              </div><!-- Slot info end -->
            </div>
          </div>
        </div>

        <div id="day2" class="tab-pane ">
          <h4 class="text-center pt-0 pb-2">13 de Diciembre</h4>
          <div class="schedule-listing bg">
            <div class="row">
              <div class="col-2">
                <span class="schedule-slot-time">10:00 - 10:15</span>
              </div>
              <div class="col-10 p-l-2 schedule-slot-info">
                <div class="schedule-slot-info-content">
                  <h3 class="schedule-slot-title">Ingreso y registro de participantes</h3>
                </div>
                <!--Info content end -->
              </div><!-- Slot info end -->
            </div>
          </div>

          <div class="schedule-listing nbg">
            <div class="row">
              <div class="col-2">
                <span class="schedule-slot-time">10:15 - 10:20</span>
              </div>
              <div class="col-10 p-l-2 schedule-slot-info">
                <div class="schedule-slot-info-content">
                  <h3 class="schedule-slot-title">Inauguración del evento</h3>
                  <p>Ángel Paullo Nina - Gerente de Desarrollo Económico</p>
                </div>
                <!--Info content end -->
              </div><!-- Slot info end -->
            </div>
          </div>
          <div class="schedule-listing nbg">
            <div class="row">
              <div class="col-2">
                <span class="schedule-slot-time">10:20 - 10:25</span>
              </div>
              <div class="col-10 p-l-2 schedule-slot-info">
                <div class="schedule-slot-info-content">
                  <h3 class="schedule-slot-title">Palabras de Sponsor principal</h3>
                  <p>Jose Muñoz - Fundación Friedrich Naumann para la Libertadd</p>
                </div>
                <!--Info content end -->
              </div><!-- Slot info end -->
            </div>
          </div>

          <div class="schedule-listing nbg">
            <div class="row">
              <div class="col-2">
                <span class="schedule-slot-time">10:25 - 11:10</span>
              </div>
              <div class="col-10 p-l-2 schedule-slot-info">
                <div class="schedule-slot-info-content">
                  <h3 class="schedule-slot-title">"La educación en Ciencia de la Computación desde la escuela"</h3>
                  <p>Dr. Ernesto Cuadros - Ciencia de la Computación en UTEC</p>
                </div>
                <!--Info content end -->
              </div><!-- Slot info end -->
            </div>
          </div>

          <div class="schedule-listing nbg">
            <div class="row">
              <div class="col-2">
                <span class="schedule-slot-time">11:10 - 11:25</span>
              </div>
              <div class="col-10 p-l-2 schedule-slot-info">
                <div class="schedule-slot-info-content">
                  <h3 class="schedule-slot-title">Preguntas del público</h3>
                </div>
                <!--Info content end -->
              </div><!-- Slot info end -->
            </div>
          </div>
          <div class="schedule-listing bg">
            <div class="row">
              <div class="col-2">
                <span class="schedule-slot-time">11:25 - 11:40</span>
              </div>
              <div class="col-10 p-l-2 schedule-slot-info">
                <div class="schedule-slot-info-content">
                  <h3 class="schedule-slot-title">Coffee break</h3>
                </div>
                <!--Info content end -->
              </div><!-- Slot info end -->
            </div>
          </div>

          <div class="schedule-listing nbg">
            <div class="row">
              <div class="col-2">
                <span class="schedule-slot-time">11:40 - 12:25</span>
              </div>
              <div class="col-10 p-l-2 schedule-slot-info">
                <div class="schedule-slot-info-content">
                  <h3 class="schedule-slot-title">Presentación de proyectos de los estudiantes de Code en mi Cole</h3>
                  <p>Kenny Lazo y Ronald Bohorquez - Code en mi Cole Cusco</p>
                </div>
                <!--Info content end -->
              </div><!-- Slot info end -->
            </div>
          </div>

          <div class="schedule-listing nbg">
            <div class="row">
              <div class="col-2">
                <span class="schedule-slot-time"> 12:25 - 13:00</span>
              </div>
              <div class="col-10 p-l-2 schedule-slot-info">
                <div class="schedule-slot-info-content">
                  <h4>Panel (por confirmar)</h4>
                  <h3 class="schedule-slot-title">"Experiencias y retos en educación en Ciencia de la Computación en
                    Cusco, Perú"</h3>
                  <p>Modera: Kenny Lazo - cofundador Code en mi Cole</p>
                  <ul class="pl-4 panel">
                    <li>William Blacutt - Gobierno Regional de Cusco</li>
                    <li>Ana Rocío Cárdenas -  aiTEC-Cusco.org</li>
                    <li>Director del Colegio Galileo</li>
                  </ul>
                </div>
                <!--Info content end -->
              </div><!-- Slot info end -->
            </div>
          </div>

          <div class="schedule-listing bg">
            <div class="row">
              <div class="col-2">
                <span class="schedule-slot-time">13:00 - 13:30</span>
              </div>
              <div class="col-10 p-l-2 schedule-slot-info">
                <div class="schedule-slot-info-content">
                  <h3 class="schedule-slot-title"> Fotografía y networking final</h3>
                </div>
                <!--Info content end -->
              </div><!-- Slot info end -->
            </div>
          </div>


        </div>

        <div id="day3" class="tab-pane ">
          <h4 class="text-center pt-0 pb-2">10 de Diciembre</h4>
          <div class="schedule-listing bg">
            <div class="row">
              <div class="col-2">
                <span class="schedule-slot-time">15:30 - 15:45</span>
              </div>
              <div class="col-10 p-l-2 schedule-slot-info">
                <div class="schedule-slot-info-content">
                  <h3 class="schedule-slot-title">Ingreso de participantes</h3>
                </div>
                <!--Info content end -->
              </div><!-- Slot info end -->
            </div>
          </div>

          <div class="schedule-listing nbg">
            <div class="row">
              <div class="col-2">
                <span class="schedule-slot-time">15:45 - 16:15</span>
              </div>
              <div class="col-10 p-l-2 schedule-slot-info">
                <div class="schedule-slot-info-content">
                  <h4>Alex Cuadros - Director de Departamento de Ciencias de la Computación de la Universidad Católica
                    San Pablo</h4>
                  <h3 class="schedule-slot-title">“La educación en Ciencia de la Computación desde el colegio, pre y
                    post grado”</h3>
                </div>
                <!--Info content end -->
              </div><!-- Slot info end -->
            </div>
          </div>
          <div class="schedule-listing nbg">
            <div class="row">
              <div class="col-2">
                <span class="schedule-slot-time">16:15 - 16:30 </span>
              </div>
              <div class="col-10 p-l-2 schedule-slot-info">
                <div class="schedule-slot-info-content">
                  <h3 class="schedule-slot-title">Preguntas del público</h3>
                </div>
                <!--Info content end -->
              </div><!-- Slot info end -->
            </div>
          </div>

          <div class="schedule-listing nbg">
            <div class="row">
              <div class="col-2">
                <span class="schedule-slot-time">16:30 - 16:45</span>
              </div>
              <div class="col-10 p-l-2 schedule-slot-info">
                <div class="schedule-slot-info-content">
                  <h3 class="schedule-slot-title">Videoconferencia - Code.org (USA)</h3>
                  <p>“Computer Science for all”</p>
                </div>
                <!--Info content end -->
              </div><!-- Slot info end -->
            </div>
          </div>

          <div class="schedule-listing nbg">
            <div class="row">
              <div class="col-2">
                <span class="schedule-slot-time">16:45 - 17:30</span>
              </div>
              <div class="col-10 p-l-2 schedule-slot-info">
                <div class="schedule-slot-info-content">
                  <h3 class="schedule-slot-title">Presentación de proyectos de los estudiantes de Code en mi Cole</h3>
                  <p>Kenny Lazo y Lucero Condori - Code en mi Cole Arequipa</p>
                </div>
                <!--Info content end -->
              </div><!-- Slot info end -->
            </div>
          </div>

          <div class="schedule-listing nbg">
            <div class="row">
              <div class="col-2">
                <span class="schedule-slot-time">17:30 - 18:10</span>
              </div>
              <div class="col-10 p-l-2 schedule-slot-info">
                <div class="schedule-slot-info-content">
                  <h4>Panel</h4>
                  <!-- <h3 class="schedule-slot-title">“Experiencias y retos en educación en Ciencia de la Computación en Cusco, Perú”.</h3> -->
                  <p>Modera: Kenny Lazo - cofundador Code en mi Cole</p>
                  <ul>
                      <li>Marisol Galarza - Imagine Labs</li>               
                      <li>Liz Bernedo - LARVIC (Línea de Automatización Industrial, Robótica y Visión Computacional - UCSP)</li>
                      <li>Profesor de COAR (Colegio de Alto Rendimiento)</li>
					  <li>Kelly Vizconde (Kids & Code)</li>
                  </ul> 
                </div>
                <!--Info content end -->
              </div><!-- Slot info end -->
            </div>
          </div>

          <div class="schedule-listing bg">
            <div class="row">
              <div class="col-2">
                <span class="schedule-slot-time">15 m</span>
              </div>
              <div class="col-10 p-l-2 schedule-slot-info">
                <div class="schedule-slot-info-content">
                  <h3 class="schedule-slot-title"> Fotografía y coffee break</h3>
                </div>
                <!--Info content end -->
              </div><!-- Slot info end -->
            </div>
          </div>


        </div>
      </div>

      <!--div class="text-center p-4"><a data-toggle="tab" class="button button-header bt1 " href="#day1">Descargar PDF</a-->
    </div>
  </section>
  <!--================ Calendar section End =================-->

  <!--================ Speaker section Start =================-->
  <section class="speaker-bg section-padding" id="guestsSect">
    <div class="container">
      <div class="section-intro section-intro-white text-center pb-98px">
        <h2 class="primary-text">Expositores y Panelistas</h2>
      </div>

      <div class="row">

        <div class="col-lg-4 col-sm-6 mb-3 mb-lg-0">
          <div class="card-speaker">
            <img class="card-img rounded-0" src="<?php echo get_bloginfo('template_directory'); ?>/csconference/img/guests/DrErnestoCuadros.jpg" alt="">
            <div class="speaker-footer">
              <h4>Ernesto Cuadros</h4>
            </div>
            <div class="speaker-overlay">
              <div class="speaker-social">Director de Ciencia de la Computación en UTEC (Lima),
                Doctor en Ciencia de la Computación Universidad de Sao Paulo (Brasil) y miembro
                de equipo de ACM/IEEE-CS Computing Curricula for Computer Science.
              </div>
            </div>
          </div>
        </div>

        
		<div class="col-lg-4 col-sm-6 mb-3 mb-lg-0">
          <div class="card-speaker">
            <img class="card-img rounded-0" src="<?php echo get_bloginfo('template_directory'); ?>/csconference/img/guests/G2.png" alt="">
            <div class="speaker-footer">
              <h4>Leonardo Ortiz Villacorta</h4>
            </div>
            <div class="speaker-overlay">
              <div class="speaker-social">
                VP of International Partnerships Code.org 
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-sm-6 mb-3 mb-lg-0">
          <div class="card-speaker">
            <img class="card-img rounded-0" src="<?php echo get_bloginfo('template_directory'); ?>/csconference/img/guests/josemumos.png" alt="">
            <div class="speaker-footer">
              <h4>Jose Muñoz Meza</h4>
            </div>
            <div class="speaker-overlay">
              <div class="speaker-social">
                Coordinador de proyectos para la Región
                Andina de la Fundación Friedrich Naumann para la Libertad
              </div>
            </div>
          </div>
        </div>        

        <div class="w-100 mb-50px d-none d-lg-block"></div>

		<div class="col-lg-4 col-sm-6 mb-3 mb-lg-0">
          <div class="card-speaker">
            <img class="card-img rounded-0" src="<?php echo get_bloginfo('template_directory'); ?>/csconference/img/guests/DrAlex.png" alt="">
            <div class="speaker-footer">
              <h4>Alex Cuadros</h4>
            </div>
            <div class="speaker-overlay">
              <div class="speaker-social">
                Director del Centro de Investigación e Innovación en Ciencia de la Computación. UCSP
              </div>
            </div>
          </div>
        </div>
		
        <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
          <div class="card-speaker">
            <img class="card-img rounded-0" src="<?php echo get_bloginfo('template_directory'); ?>/csconference/img/guests/Blacutt.png" alt="">
            <div class="speaker-footer">
              <h4>William Blacutt Vigil</h4>
            </div>
            <div class="speaker-overlay">
              <div class="speaker-social p-2">
                Coordinador General de Programa de Desarrollo Regional Cusco,
                proyectos financiados por el Banco Mundial.
                Asesor en temas de Innovación del Gobierno Regional de Cusco.
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
          <div class="card-speaker">
            <img class="card-img rounded-0" src="<?php echo get_bloginfo('template_directory'); ?>/csconference/img/guests/angelepaullo.jpg" alt="">
            <div class="speaker-footer">
              <h4>Ángel Paullo Nina</h4>
            </div>
            <div class="speaker-overlay">
              <div class="speaker-social">
                Gerente de Desarrollo Económico del Gobierno Regional de Cusco
              </div>
            </div>
          </div>
        </div>
		
		<div class="w-100 mb-50px d-none d-lg-block"></div>

        <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
          <div class="card-speaker">
            <img class="card-img rounded-0" src="<?php echo get_bloginfo('template_directory'); ?>/csconference/img/guests/G7.jpg" alt="">
            <div class="speaker-footer">
              <h4>Alejandra González Cardozo</h4>
            </div>
            <div class="speaker-overlay">
              <div class="speaker-social">
                Jefa de Proyectos Sociales y Educativos
				Fundación Telefónica del Perú
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
          <div class="card-speaker">
            <img class="card-img rounded-0" src="<?php echo get_bloginfo('template_directory'); ?>/csconference/img/guests/carmem.jpg" alt="">
            <div class="speaker-footer">
              <h4>Carmen Zamora</h4>
            </div>
            <div class="speaker-overlay">
              <div class="speaker-social">
                Directora PAENFTS del Ministerio de Educación
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
          <div class="card-speaker">
            <img class="card-img rounded-0" src="<?php echo get_bloginfo('template_directory'); ?>/csconference/img/guests/G9.png" alt="">
            <div class="speaker-footer">
              <h4>Ana Rocío Cárdenas Maita </h4>
            </div>
            <div class="speaker-overlay">
              <div class="speaker-social">
                Vicepresidenta de aiTEC-Cusco.org
              </div>
            </div>
          </div>
        </div>        


        <div class="w-100 mb-50px d-none d-lg-block"></div>

        <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
          <div class="card-speaker">
            <img class="card-img rounded-0" src="<?php echo get_bloginfo('template_directory'); ?>/csconference/img/guests/diegovelez.png" alt="">
            <div class="speaker-footer">
              <h4>Diego Velez</h4>
            </div>
            <div class="speaker-overlay">
              <div class="speaker-social">
                Product Manager en Laboratoria
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
          <div class="card-speaker">
            <img class="card-img rounded-0" src="<?php echo get_bloginfo('template_directory'); ?>/csconference/img/guests/RenzoSousa.jpg" alt="">
            <div class="speaker-footer">
              <h4>Renzo Sousa de Madalengoitia</h4>
            </div>
            <div class="speaker-overlay">
              <div class="speaker-social">
                Cofundador Sumatec - Code en mi Cole.
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
          <div class="card-speaker">
            <img class="card-img rounded-0" src="<?php echo get_bloginfo('template_directory'); ?>/csconference/img/guests/Kennylazo.jpeg" alt="">
            <div class="speaker-footer">
              <h4>Kenny Lazo Jara</h4>
            </div>
            <div class="speaker-overlay">
              <div class="speaker-social">
                CoFundador de Sumatec - Code en mi Cole.
              </div>
            </div>
          </div>
        </div>        

        <div class="w-100 mb-50px d-none d-lg-block"></div>

        <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0 mx-auto">
            <div class="card-speaker">
              <img class="card-img rounded-0" src="<?php echo get_bloginfo('template_directory'); ?>/csconference/img/guests/CamilaCosta.jpeg" alt="">
              <div class="speaker-footer">
                <h4>Camila Costa</h4>
              </div>
              <div class="speaker-overlay">
                <div class="speaker-social">
                  Partnership Manager en Khan Academy.
                </div>
              </div>
            </div>
        </div>   

        <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0 mx-auto">
          <div class="card-speaker">
            <img class="card-img rounded-0" src="<?php echo get_bloginfo('template_directory'); ?>/csconference/img/guests/Elian1.jpg" alt="">
            <div class="speaker-footer">
              <h4>Elian Laura Riveros</h4>
            </div>
            <div class="speaker-overlay">
              <div class="speaker-social">
                Magister en Ciencias. Especialización en Inteligencia Artificial, representante de Pyladies Arequipa.
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0 mx-auto">
            <div class="card-speaker">
              <img class="card-img rounded-0" src="<?php echo get_bloginfo('template_directory'); ?>/csconference/img/guests/Marisol.png" alt="">
              <div class="speaker-footer">
                <h4>Marisol Galarza</h4>
              </div>
              <div class="speaker-overlay">
                <div class="speaker-social">                  
                  Coundadora de Laboratorio de Robótica Imagen Labs.
                </div>
              </div>
            </div>
          </div>                       

        <div class="w-100 mb-50px d-none d-lg-block center-block "></div>
        
        <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
          <div class="card-speaker">
            <img class="card-img rounded-0" src="<?php echo get_bloginfo('template_directory'); ?>/csconference/img/guests/AntonioCulqui.png" alt="">
            <div class="speaker-footer">
              <h4>Antonio Culqui Malca</h4>
            </div>
            <div class="speaker-overlay">
              <div class="speaker-social p-2">
                Gestor de Helico empresarial,
                Gerente general y Cofundador
                de Tannder.com, Presidente
                A.U.D.E.C.O, Fundador de Exporta School.
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
            <div class="card-speaker">
              <img class="card-img rounded-0" src="<?php echo get_bloginfo('template_directory'); ?>/csconference/img/guests/ChristianYaranga.jpg" alt="">
              <div class="speaker-footer">
                <h4>Christian Yaranga</h4>
              </div>
              <div class="speaker-overlay">
                <div class="speaker-social">
                  Program Manager de UTK.
                </div>
              </div>
            </div>
        </div>
        
        <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
            <div class="card-speaker">
              <img class="card-img rounded-0" src="<?php echo get_bloginfo('template_directory'); ?>/csconference/img/guests/hugorojas.jpg" alt="">
              <div class="speaker-footer">
                <h4>Hugo Rojas Flores</h4>
              </div>
              <div class="speaker-overlay">
                <div class="speaker-social">
                  Coordinador STEAM en la Municipalidad de Lima.
                </div>
              </div>
            </div>
          </div>

        <div class="w-100 mb-50px d-none d-lg-block center-block "></div>

        <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
          <div class="card-speaker">
            <img class="card-img rounded-0" src="<?php echo get_bloginfo('template_directory'); ?>/csconference/img/guests/ronald.png" alt="">
            <div class="speaker-footer">
              <h4>Ronald Bohorquez Aguirre</h4>
            </div>
            <div class="speaker-overlay">
              <div class="speaker-social">
                Coordinador de Code en mi Cole Cusco.
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
          <div class="card-speaker">
            <img class="card-img rounded-0" src="<?php echo get_bloginfo('template_directory'); ?>/csconference/img/guests/lucero.jpg" alt="">
            <div class="speaker-footer">
              <h4>Lucero Condori Rivera</h4>
            </div>
            <div class="speaker-overlay">
              <div class="speaker-social">
                Product Manager Code en mi Cole
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
          <div class="card-speaker">
            <img class="card-img rounded-0" src="<?php echo get_bloginfo('template_directory'); ?>/csconference/img/guests/Juan.jpg" alt="">
            <div class="speaker-footer">
              <h4>Juan Colonia</h4>
            </div>
            <div class="speaker-overlay">
              <div class="speaker-social">
                Coordinador Code en mi Cole Lima
              </div>
            </div>
          </div>
        </div>

        <!--div class="col-lg-4 col-sm-6 mb-4 mb-lg-0 ">
          <div class="card-speaker">
            <img class="card-img rounded-0" src="<?php echo get_bloginfo('template_directory'); ?>/csconference/img/guests/photo.png" alt="">
            <div class="speaker-footer">
              <h4>Carlos Luna</h4>
            </div>
            <div class="speaker-overlay">
              <div class="speaker-social">
                Gerente de proyectos en Generación Tec
              </div>
            </div>
          </div>
        </div-->

      </div>
    </div>
  </section>
  <!--================ Speaker section End =================-->

  <!--================ Sponsor section Start =================-->
  <section class="section-padding--small sponsor-bg" id="sponsors">
    <div class="container">
      <div class="section-intro text-center pb-70px">
        <h2 class="primary-text">Organiza</h2>
      </div>

      <div class="sponsor-wrapper mb-3 pb-4">
        <div class="row">
          <div class="col-sm-6 col-lg-4 mb-3 mb-lg-0">
            <div class="sponsor-single">
              <a href="https://www.facebook.com/sumatecperu/" target="_blank"><img class="img-fluid"
                  src="<?php echo get_bloginfo('template_directory'); ?>/csconference/img/sponsors/sumatecaaa.png" alt=""></a>
            </div>
          </div>

          <div class="col-sm-6 col-lg-4 mb-3 mb-lg-0">
            <div class="sponsor-single">
              <a href="http://www.facebook.com/pg/Code.en.mi.Cole" target="_blank"><img class="img-fluid"
                  src="<?php echo get_bloginfo('template_directory'); ?>/csconference/img/sponsors/codecole.png" alt=""></a>
            </div>
          </div>

          <div class="col-sm-6 col-lg-4 mb-3 mb-lg-0">
            <div class="sponsor-single">
              <a href="http://code.org" target="_blank"><img class="img-fluid" src="<?php echo get_bloginfo('template_directory'); ?>/csconference/img/sponsors/icode.png" alt=""></a>
            </div>
          </div>
        </div>
      </div>

      <div class="sponsor-wrapper sponsor-wrapper--small pb-4">
        <h3 class="sponsor-title mb-4">CO-ORGANIZA</h3>
        <div class="row">

          <div class="col-sm-6 col-lg-6 mb-4 mb-lg-0">
            <div class="sponsor-single">
              <a href="https://www.utec.edu.pe/"><img class="img-fluid" src="<?php echo get_bloginfo('template_directory'); ?>/csconference/img/sponsors/utec3.png" alt=""></a>
            </div>
          </div>

          <div class="col-sm-6 col-lg-6 mb-4 mb-lg-0">
            <div class="sponsor-single">
              <a href="https://cs.ucsp.edu.pe/" target="_blank"><img class="img-fluid" src="<?php echo get_bloginfo('template_directory'); ?>/csconference/img/sponsors/UCSP.png"
                  alt=""></a>
            </div>
          </div>

        </div>
      </div>

      <div class="sponsor-wrapper sponsor-wrapper--small pb-4">
        <h3 class="sponsor-title mb-4">PATROCINA</h3>
        <div class="row">
          <div class="col-sm-6 col-lg-6 mb-3 mb-lg-0 mx-auto">
            <div class="sponsor-single">
              <a href="https://la.fnst.org/" target="_blank"><img class="img-fluid" src="<?php echo get_bloginfo('template_directory'); ?>/csconference/img/sponsors/FNF_WB.png"
                  alt=""></a>
            </div>
          </div>


        </div>
      </div>

      <div class="sponsor-wrapper sponsor-wrapper--small pb-4">
        <h3 class="sponsor-title mb-4">COLABORA</h3>
        <div class="row">

          <div class="col-sm-6 col-lg-3 mb-3 mb-lg-0">
            <div class="sponsor-single">
              <img class="img-fluid" src="<?php echo get_bloginfo('template_directory'); ?>/csconference/img/sponsors/munilima.png" alt="">
            </div>
          </div>
          <div class="col-sm-6 col-lg-3 mb-3 mb-lg-0">
            <div class="sponsor-single">
              <img class="img-fluid" src="<?php echo get_bloginfo('template_directory'); ?>/csconference/img/sponsors/logoUGEL.png" alt="">
            </div>
          </div>
          <div class="col-sm-6 col-lg-3 mb-3 mb-lg-0">
            <div class="sponsor-single">
              <img class="img-fluid" src="<?php echo get_bloginfo('template_directory'); ?>/csconference/img/sponsors/gobcusco.png" alt="">
            </div>
          </div>
          <div class="col-sm-6 col-lg-3 mb-3 mb-lg-0">
            <div class="sponsor-single">
              <img class="img-fluid" src="<?php echo get_bloginfo('template_directory'); ?>/csconference/img/sponsors/cise.png" alt="">
            </div>
          </div>

        </div>
      </div>

      <div class="sponsor-wrapper sponsor-wrapper--small pb-4">
        <div class="row">

          <div class="col-sm-6 col-lg-3 mb-3 mb-lg-0">
            <div class="sponsor-single">
              <img class="img-fluid" target="_blank" src="<?php echo get_bloginfo('template_directory'); ?>/csconference/img/sponsors/khan.png" alt="">
            </div>
          </div>
          <div class="col-sm-6 col-lg-3 mb-3 mb-lg-0">
            <div class="sponsor-single">
              <img class="img-fluid" src="<?php echo get_bloginfo('template_directory'); ?>/csconference/img/sponsors/UTK.png" alt="">
            </div>
          </div>
          <div class="col-sm-6 col-lg-3 mb-3 mb-lg-0">
            <div class="sponsor-single">
              <img class="img-fluid" src="<?php echo get_bloginfo('template_directory'); ?>/csconference/img/sponsors/kamam.png" alt="">
            </div>
          </div>
          <div class="col-sm-6 col-lg-3 mb-3 mb-lg-0">
            <div class="sponsor-single">
              <img class="img-fluid" src="<?php echo get_bloginfo('template_directory'); ?>/csconference/img/sponsors/tannder.png" alt="">
            </div>
          </div>

        </div>
      </div>
      <div class="sponsor-wrapper sponsor-wrapper--small pb-4">
        <div class="row">

          <div class="col-sm-6 col-lg-3 mb-3 mb-lg-0">
            <div class="sponsor-single">
              <img class="img-fluid" src="<?php echo get_bloginfo('template_directory'); ?>/csconference/img/sponsors/Laboratoria.png" alt="">
            </div>
          </div>
          <div class="col-sm-6 col-lg-3 mb-3 mb-lg-0">
            <div class="sponsor-single">
              <img class="img-fluid" src="<?php echo get_bloginfo('template_directory'); ?>/csconference/img/sponsors/pyladies.png" alt="">
            </div>
          </div>
          <div class="col-sm-6 col-lg-3 mb-3 mb-lg-0">
            <div class="sponsor-single">
              <img class="img-fluid" src="<?php echo get_bloginfo('template_directory'); ?>/csconference/img/sponsors/startupperu.png" alt="">
            </div>
          </div>
          <div class="col-sm-6 col-lg-3 mb-3 mb-lg-0">
            <div class="sponsor-single">
              <img class="img-fluid" src="<?php echo get_bloginfo('template_directory'); ?>/csconference/img/sponsors/imgine.png" alt="">
            </div>
          </div>
        </div>        
      </div>
      
      <div class="sponsor-wrapper sponsor-wrapper--small pb-4 ">
        <div class="row">
          <div class="col-sm-6 col-lg-6 mb-3 mb-lg-0 mx-auto">
            <div class="sponsor-single">
              <img class="img-fluid" src="<?php echo get_bloginfo('template_directory'); ?>/csconference/img/sponsors/telefonica.png" alt="">
            </div>
          </div>
      </div>

    </div>
  </section>
  <!--================ Sponsor section End =================-->

  <!--================ Gallery places Start =================-->
  <section class="section-padding gallery-area gallery-bg" id="info">
    <div class="container">
      <div class="section-intro section-intro-white text-center pb-98px">
        <h2 class="primary-text">Sedes</h2>
      </div>

      <div class="row">
        <div class="col-sm-6 col-md-4 ">
          <div class="single-place-name shadow">
            <div class="single-imgs relative">
              <img class="card-img rounded-0" src="<?php echo get_bloginfo('template_directory'); ?>/csconference/img/lima2.jpg" alt="">
            </div>
            </a>
            <div class="place-text">
              <span style="font-size: 16px;">Lima</span>
              <h4>UNIVERSIDAD DE INGENIERÍA Y TECNOLOGÍA</h4>
              <span>Jr. Medrano Silva 165, Barranco <a href="https://maps.google.com/?q=-12.135311,-77.021790"
                  target="_blank">(Ver Mapa)</a> </span>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-md-4">
          <div class="single-place-name shadow">
            <div class="single-imgs relative">
              <img class="card-img rounded-0" src="<?php echo get_bloginfo('template_directory'); ?>/csconference/img/aqp.jpg" alt="">
            </div>
            </a>
            <div class="place-text">
              <span style="font-size: 16px;">Arequipa</span>
              <h4>UNIVERSIDAD CATÓLICA SAN PABLO</h4>
              <span>Urb. Campiña Paisajista, Quinta Vivanco
                <a href="https://maps.google.com/?q=-16.390081,-71.535843" target="blank">(Ver Mapa)</a> </span>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-md-4">
          <div class="single-place-name shadow">
            <div class="single-imgs relative">
              <img class="card-img rounded-0" src="<?php echo get_bloginfo('template_directory'); ?>/csconference/img/places/cusco.jpg" alt="">
            </div>
            </a>
            <div class="place-text">
              <span style="font-size: 16px;">CUSCO</span>
              <h4>DIRCETUR</h4>
              <span>Plaza Túpac Amaru, Wanchaq
                <a href="https://maps.google.com/?q=-13.522412,-71.967155" target="blank">(Ver Mapa)</a> </span>
            </div>
          </div>
        </div>

      </div>

    </div>
    </div>
  </section>
  <!--================ Gallery section End =================-->
  <!-- ================ start footer Area ================= -->
  <footer class="footer-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 p-4 mx-auto">
          <h3 class="text-center">Social</h3>
          <ul class="list-unstyled footer-link d-flex footer-social d-flex justify-content-center">
            <li><a 
                href="https://www.facebook.com/CSEC.PERU" class="p-2" target="_blank">
                <img src="<?php echo get_bloginfo('template_directory'); ?>/csconference/favicos/facebook-brands.svg" class="fab fa-facebook-f">
            </a></li>
            <li><a
                href="https://twitter.com/codenmicole?s=07&fbclid=IwAR39zpu6gEDdIJpCynQdJw_nFqJ4CQym5yVUKigajjaSFdFI_VAUKJxC5ok"
                class="p-2" target="_blank">
                <img src="<?php echo get_bloginfo('template_directory'); ?>/csconference/favicos/twitter-brands.svg" class="fa fa-twitter">
            </a></li>
            <li><a 
              href="https://www.instagram.com/cseconference" class="p-2" target="_blank">
              <img src="<?php echo get_bloginfo('template_directory'); ?>/csconference/favicos/instagram-brands.svg" class="fab fa-instagram-f">
            </a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6 p-4 mx-auto">
            <h3 class="text-center">Contacto</h3>
            <ul class="text-center">
              <li><a href="mailto:contacto@codenmicole.com">contacto@codenmicole.com</a></li>
              <li class="text-center" style="color: white;">+51 974 210 246</li>
              <li><a href="" >Av. Salaverry 301 - Arequipa</a></li>
            </ul>
          </div>
      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">
        <div class="row align-items-center">
          <p class="col-lg-8 col-sm-12 footer-text m-0 text-center text-lg-left">
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;
            <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with
            <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com"
              target="_blank">Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </p>
          <div class="col-lg-4 col-sm-12 footer-social text-center text-lg-right">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-dribbble"></i></a>
            <a href="#"><i class="fab fa-behance"></i></a>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- ================ End footer Area ================= -->




  <script src="<?php echo get_bloginfo('template_directory'); ?>/csconference/vendors/jquery/jquery-3.2.1.min.js"></script>
  <script src="<?php echo get_bloginfo('template_directory'); ?>/csconference//vendors/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="<?php echo get_bloginfo('template_directory'); ?>/csconference//js/jquery.ajaxchimp.min.js"></script>
  <script src="<?php echo get_bloginfo('template_directory'); ?>/csconference//js/main.js"></script>



</body>

</html>
