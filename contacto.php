<?php /* Template Name: Contacto */ ?>
<html>

<head>
  <?php include("head.php"); ?>
  
  <link rel="stylesheet" href="css/flick.css" media="screen">
  <script src="<?php echo get_bloginfo('template_directory'); ?>/js/flick.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  
</head>

<body>
  <?php include("nav.php"); ?>

 
        <div id="seccion1">

            <h1 id="csc-title" class="font-lato">Contacto</h1>
        </div>



<div class="parent seccion2">
	<div class="map">
		<h2 class="font-lato" >Ubícanos</h2>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3827.3807450383015!2d-71.54213805715123!3d-16.40547826472019!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91424af631b383af%3A0x42aff66448d2a5cf!2sSalaverry%20301%2C%20Arequipa%2004001!5e0!3m2!1ses-419!2spe!4v1589584104282!5m2!1ses-419!2spe" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
	</div>
	<div class="form" >
		<h2 class="font-lato" >Dudas y consultas</h2>
		<div class="container">
			<form action="<?php echo get_bloginfo('template_directory');?>/send_email.php">
				
				<input type="text" id="fname" name="nombres" required placeholder="Nombre y Apellidos">

				<input type="text" id="lname" name="email" placeholder="email" required>
				<input type="text" id="lname" name="Teléfono" placeholder="Teléfono o celular">

				<label class="font-montserrat" for="subject">Mensaje</label>
				<textarea id="subject" name="subject" placeholder="Mensaje/Consulta" style="height:200px" required></textarea>

				<input class="font-lato	"type="submit" value="Consultar">
			</form>
		</div>

	</div>
</div>



  <?php include('footer.php'); ?>
</body>
<style>
.parent {
display: grid;
grid-template-columns: repeat(2, 1fr);
grid-template-rows: 1fr;
grid-column-gap: 0px;
grid-row-gap: 0px;
}

/**  seccion 1 **/
#seccion1{
    text-align: center;
    
}

#seccion1 p{
    margin-top: 10px;
    padding-left: 15% ;
    padding-right: 15% ;
    font-size: 15pt;  
    
}

#seccion1 h1{
    font-size:40pt;
    font-weight:bold;
    margin-top: 0;
}

.seccion2 h2{
    font-size:25pt;
    font-weight:bold;
    margin-top: 0;
}



/** SECCIÓN 2 */

.seccion2{

  text-align: center;
  margin-bottom: 10em;
  

}
.form{
	text-align: center;
}

.container{
	text-align: left;
}



input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #58bbc9;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #58bbc9;
}

.container {
  border-radius: 15px;
  background-color: #f2f2f2;
  padding: 20px;
  margin-right: 50px;
  margin-left: 50px;
}


</style>
</html>
