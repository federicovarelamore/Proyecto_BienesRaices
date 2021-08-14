<?php

require 'includes/funciones.php';


incluirTemplate('header');
?>

<main class="contenedor seccion">
    <h1 class="titulo-bold">Contacto</h1>

    <picture>
        <img loading="lazy" src="/src/img/destacada3.jpg" alt="Imagen de Contacto">
    </picture>

    <h2>Llene el formulario de contacto</h2>

    <form class="formulario">

        <fieldset>
            <legend>Información Personal</legend>

            <label for="nombre">Nombre:</label>
            <input id="nombre" type="text" placeholder="Ingresá tu nombre">

            <label for="email">E-mail:</label>
            <input type="email" id="email" placeholder="Ingresá tu email">

            <label for="telefono">Teléfono:</label>
            <input type="tel" id="telefono" placeholder="Ingresá tu telefono">

            <label for="mensaje">Mensaje</label>
            <textarea id="mensaje"></textarea>
        </fieldset>

        <fieldset>
            <legend>Información sobre la propiedad</legend>

            <label for="opciones">Compra o Vende:</label>
            <select id="opciones">
                <option value="" disabled selected>-- Seleccione --</option>
                <option value="Compra">Compra</option>
                <option value="Vende">Vende</option>
            </select>

            <label for="presupuesto">Precio o Presupuesto</label>
            <input type="text" placeholder="Tu Precio o Presupuesto" id="presupuesto">
        </fieldset>

        <fieldset>
            <legend>Contacto</legend>

            <p>¿Como desea ser contactado?</p>

            <div class="forma-contacto">
                <label for="contactar-telefono">Teléfono</label>
                <input type="radio" name="contacto" value="telefono" id="contactar-telefono">

                <label for="contactar-email">E-mail</label>
                <input type="radio" name="contacto" value="email" id="contactar-email">
            </div>

            <p>Si eligió teléfono, elija la fecha y la hora</p>

            <label for="fecha">Fecha:</label>
            <input type="date" id="fecha">

            <label for="hora">Hora:</label>
            <input type="time" id="hora" min="09:00" max="19:00">

        </fieldset>

        <input type="submit" value="enviar" class="boton-verde">
    </form>

</main>

<?php incluirTemplate('footer'); ?>

<script src="/src/js/modernizr.js"></script>
<script src="/src/js/app.js"></script>
</body>

</html>