<div class="overlay font-lato" id="overlay-modal">
    <div class="popup" id="popup-modal">
        <a href="#" id="btn-cerrar-popup-modal" class="btn-cerrar-popup"><i class="fas fa-times"></i></a>

        <h2>
            <?php the_title() ?>
        </h2>

        Fecha: <?php the_date() ?>
        <br>
        Autor: <?php the_author(); ?>
        <br>
        <?php  the_content(); ?>

    </div>
</div>


    <script>

        var overlayModal = document.getElementById('overlay-modal'),
            popupModal = document.getElementById('popup-modal'),
            btnCerrarPopupModal = document.getElementById('btn-cerrar-popup-modal');


        overlayModal.classList.add('active');
        popupModal.classList.add('active');

        btnCerrarPopupModal.addEventListener('click', function (e) {
            e.preventDefault();
            overlayModal.classList.remove('active');
            popupModal.classList.remove('active');
        });

    </script>