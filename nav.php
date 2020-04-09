<header class="header">
    <figure class="logotipo">
        <a href="/">
            <img src="<?php echo get_bloginfo('template_directory'); ?>/img/codecole.png" alt="" width="130">
        </a>

    </figure>
    <!-- MENU - NAVEGADOR  -->
    <input type="checkbox" id="btn-menu">
    <label for="btn-menu"> <img src="<?php echo get_bloginfo('template_directory'); ?>/img/menu.png" alt=""> </label>

    <nav class="menu font-montserrat" style="
    margin-right: 2%;
">
        <ul class="menu2">

            <li>
                <a href="/">HOME</a>
            </li>
            <li class="no-responsive">
                <p>|</p>
            </li>
            <div class="dropdown">
                <li class="submenu">
                    <a >QUÉ<b style="color: white;">_</b>HACEMOS</a>
                </li>
                <div class="dropdown-content">
                    <a href="/colegios">Colegios</a>
                    <a href="academia">Academia</a>
                    <a href="/workshop">Workshop</a>
                    <a href="/programas-sociales">Programas Sociales</a>
                    <a href="/formacion-docentes">Formación Docente</a>
                </div>
            </div>
            <li class="no-responsive">
                <p>|</p>
            </li>
            <div class="dropdown">
                <li class="submenu">
                    <a>EVENTOS</a>
                </li>
                <div class="dropdown-content">
                    <a href="/hora">La hora del código</a>
                    <a href="/conferencia">Conferencia</a>
                    <a href="/eventos">Encuentro de Organizaciones</a>
                    
                </div>
            </div>
            <li class="no-responsive">
                <p>|</p>
            </li>
            <li>
                <a href="/#nosotros">NOSOTROS</a>
            </li>
            <li class="no-responsive">
                <p>|</p>
            </li>
            <li>
                <a href="/contacto">CONTACTO</a>
            </li>
            <li class="no-responsive">
                <p>|</p>
            </li>
            <li>
                <a href="/blog">BLOG</a>
            </li>
            <li class="si-responsive">
                <input type="checkbox" id="btn-close" onclick="cambiar()">
                <label for="btn-close"> <img src="<?php echo get_bloginfo('template_directory'); ?>/img/cancel3.png" alt=""> </label>
            </li>
        </ul>
    </nav>
</header>


<script>
    function cambiar() {
        if (document.getElementById("btn-close").checked == true) {
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


<style>
    .dropdown-content {
        display: none;
        position: absolute;
        background-color: white;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    .dropdown-content a {
        color: #808080;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

    @media screen and (max-width: 600px) {
        .dropdown-content {
            position: static;
            box-shadow: none;
        }
    }


</style>
