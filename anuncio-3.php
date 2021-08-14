<?php

require 'includes/funciones.php';


incluirTemplate('header');
?>

<main class="contenedor seccion contenido-centrado">
    <h1 class="titulo-bold">Estancia con Piscina</h1>

    <picture>
        <img loading="lazy" src="/src/img/destacada.jpg" alt="Imagen de la Propiedad">
    </picture>

    <div class="resumen-propiedad">
        <p class="precio">U$S 950,000</p>


        <ul class="iconos-caracteristicas">
            <li>
                <img class="icono" loading="Lazy" src="/src/img/icono_wc.svg" alt="icono wc">
                <p>9</p>
            </li>
            <li>
                <img class="icono" loading="Lazy" src="/src/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                <p>8</p>
            </li>
            <li>
                <img class="icono" loading="Lazy" src="/src/img/icono_dormitorio.svg" alt="icono dormitorio">
                <p>11</p>
            </li>
        </ul>


        <p>Curabitur in posuere magna. Morbi imperdiet quis libero in scelerisque. Nam ut dolor gravida ipsum
            maximus ornare ut in orci. Duis sed arcu lorem. Duis laoreet rhoncus elit, sit amet fermentum turpis
            lacinia non. Etiam et ornare diam, vel elementum augue. Donec et pharetra magna. Morbi velit dolor,
            consectetur eget est in, interdum condimentum libero. Vivamus sollicitudin a risus ac dapibus. Proin
            maximus urna quam. Nulla venenatis sem vel quam pulvinar scelerisque.

            Sed ut nisl eros. Aliquam malesuada mi quam, ac laoreet lorem pharetra sit amet. Pellentesque sodales
            nibh mi, id eleifend sem rutrum a. Praesent at felis iaculis, eleifend tellus eu, faucibus massa. Duis
            suscipit diam at tellus suscipit, at placerat neque vulputate. Sed id augue non ipsum lacinia lacinia at
            fermentum nulla. Nulla magna diam, suscipit quis aliquam nec, maximus eu orci. Nunc porttitor massa et
            elit gravida, non sodales nibh consectetur. Cras viverra facilisis urna, eu convallis libero.
            Suspendisse venenatis condimentum turpis at auctor. Mauris diam diam, feugiat dignissim finibus ut,
            porttitor sit amet est.

            Nam non mollis eros. Nulla dictum dignissim laoreet. Maecenas quis dolor ut nisi iaculis feugiat. Fusce
            odio mi, mollis sed venenatis ut, scelerisque vel nunc. Fusce diam nisi, placerat quis varius vel,
            ornare id risus.</p>
        <div class="alinear-derecha">

            <a href="contacto.php" class="boton-amarillo">
                Reservar una visita
            </a>
        </div>
    </div>
</main>

<?php incluirTemplate('footer'); ?>

<script src="/src/js/modernizr.js"></script>
<script src="/src/js/app.js"></script>
</body>

</html>