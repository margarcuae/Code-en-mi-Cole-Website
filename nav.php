 
    <header class="header">
        <figure class="logotipo">
            <a href="index.php">
                <img src="img/codecole.png" alt="" width="130">
            </a>

            </figure>
    <!-- MENU - NAVEGADOR  -->
        <input type="checkbox" id="btn-menu">
        <label for="btn-menu"> <img src="img/menu.png" alt=""> </label>
        
        <nav class="menu font-montserrat">
        <ul class="menu2">
            <li>
                <a href="index.php">HOME</a>
            </li>
            <li class="no-responsive">
                <p>|</p>
            </li>
            <li class="submenu"> 
                <a href="quehacemos.php">QUÉ HACEMOS</a>
            </li>
            <li class="no-responsive">
                <p>|</p>
            </li>   
            <li>
                <a href="nosotros.php">NOSOTROS</a>
            </li>
            <li class="no-responsive">
                <p>|</p>
            </li>
            <li >
                <a href="eventos.php">EVENTOS</a>
            </li>
            <li class="no-responsive">
                <p>|</p>
            </li>
            <li>
                <a href="blog.php">BLOG</a>
            </li>
            <li class="no-responsive">
                <p>|</p>
            </li>
            <li>
                <a href="blog.php">CONTACTO</a>
            </li>
            <li class ="si-responsive">
                <input type="checkbox" id="btn-close" onclick="cambiar()" >
                <label for="btn-close"> <img src="img/cancel3.png" alt=""> </label>
            </li>
        </ul>
    </nav>
</header>


<script>
    function cambiar() {
        if(document.getElementById("btn-close").checked == true){
            document.getElementById("btn-menu").checked = false;
            document.getElementById("btn-close").checked = false;

        }
    }
</script>

<?php include("barrasocial.php"); ?>


<div style="
    height: 69px;
">

</div>