<?php

require 'includes/funciones.php';


incluirTemplate('header', $inicio = true);
?>

<main class="contenedor seccion">
    <h1 class="titulo-bold">Más Sobre Nosotros</h1>

    <div class="iconos-nosotros">
        <div class="icono">
            <img src="/src/img/icono1.svg" alt="Icono Seguridad" loading="lazy">
            <h3>Seguridad</h3>
            <p>Ducimus odit quae, laborum fugit exercitationem commodi laudantium aut? Ratione expedita cumque vero
                aut possimus amet?</p>
        </div>
        <div class="icono">
            <img src="/src/img/icono2.svg" alt="Icono Precio" loading="lazy">
            <h3>Precio</h3>
            <p>Quis et fugit eveniet voluptate vel, alias mollitia, quam cupiditate nam illum, eaque quibusdam
                dignissimos obcaecati?</p>
        </div>
        <div class="icono">
            <img src="/src/img/icono3.svg" alt="Icono Tiempo" loading="lazy">
            <h3>Tiempo</h3>
            <p>Fuga consequatur dolorem quidem corrupti odit perferendis laudantium doloribus tenetur, mollitia, at
                inventore? Vero expedita ab esse, iusto non voluptate enim quasi!</p>
        </div>
    </div>
</main>

<section class="section contenedor">
    <h2 class="titulo-bold">Casas y Departamentos en Venta</h2>

    <div class="contenedor-anuncios">

        <div class="anuncio">
            <picture>
                <a href="anuncio-1.php">
                    <img loading="lazy" src="/src/img/anuncio1.jpg" alt="Anuncio">
                </a>
            </picture>


            <div class="contenido-anuncio">
                <h3>Casa de Lujo en el Lago</h3>
                <p>Casa en el lago con excelente vista, terminaciones de lujo a un excelente precio</p>
                <p class="precio">U$S600,000</p>

                <ul class="iconos-caracteristicas">
                    <li>
                        <img class="icono" loading="Lazy" src="/src/img/icono_wc.svg" alt="icono wc">
                        <p>3</p>
                    </li>
                    <li>
                        <img class="icono" loading="Lazy" src="/src/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                        <p>3</p>
                    </li>
                    <li>
                        <img class="icono" loading="Lazy" src="/src/img/icono_dormitorio.svg" alt="icono dormitorio">
                        <p>4</p>
                    </li>
                </ul>

                <a href="anuncio-1.php" class="boton-amarillo-block ">
                    Ver Propiedad
                </a>


            </div>
            <!--.contenido-anuncio-->
        </div>
        <!--.anuncio-->

        <div class="anuncio">
            <picture>
                <a href="anuncio-2.php">
                    <img loading="lazy" src="/src/img/anuncio2.jpg" alt="Anuncio">
                </a>
            </picture>


            <div class="contenido-anuncio">
                <h3>Casa terminados de Lujo</h3>
                <p>Casa con diseño moderno, así como tecnología inteligente y amueblada. Única en su tipo.</p>
                <p class="precio">U$S750,000</p>

                <ul class="iconos-caracteristicas">
                    <li>
                        <img class="icono" loading="Lazy" src="/src/img/icono_wc.svg" alt="icono wc">
                        <p>4</p>
                    </li>
                    <li>
                        <img class="icono" loading="Lazy" src="/src/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                        <p>4</p>
                    </li>
                    <li>
                        <img class="icono" loading="Lazy" src="/src/img/icono_dormitorio.svg" alt="icono dormitorio">
                        <p>6</p>
                    </li>
                </ul>

                <a href="anuncio-2.php" class="boton-amarillo-block">
                    Ver Propiedad
                </a>
            </div>
            <!--.contenido-anuncio-->
        </div>
        <!--.anuncio-->

        <div class="anuncio">
            <picture>
                <a href="anuncio-3.php">
                    <img loading="lazy" src="/src/img/anuncio3.jpg" alt="Anuncio">
                </a>
            </picture>


            <div class="contenido-anuncio">
                <h3>Estancia con Piscina</h3>
                <p>Posee piscina, cancha de tennis, sala de cine, campo de golf y acabados de lujo en las afueras de
                    la ciudad.</p>
                <p class="precio">U$S 950,000</p>

                <ul class="iconos-caracteristicas">
                    <li>
                        <img class="icono" loading="Lazy" src="/src/img/icono_wc.svg" alt="icono wc">
                        <p>7</p>
                    </li>
                    <li>
                        <img class="icono" loading="Lazy" src="/src/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                        <p>6</p>
                    </li>
                    <li>
                        <img class="icono" loading="Lazy" src="/src/img/icono_dormitorio.svg" alt="icono dormitorio">
                        <p>8</p>
                    </li>
                </ul>

                <a href="anuncio-3.php" class="boton-amarillo-block">
                    Ver Propiedad
                </a>
            </div>
            <!--.contenido-anuncio-->
        </div>
        <!--.anuncio-->

    </div>
    <!--.contenedor-anuncios-->

    <div class="alinear-derecha">
        <a href="anuncios.php" class="boton-verde">Ver Todas</a>
    </div>

</section>

<section class="imagen-contacto">
    <h2>Encuentra la casa de tus sueños</h2>
    <p>Llena el formulario de contacto y un asesor de ventas se pondrá en contacto contigo a la brevedad</p>
    <a href="contacto.php" class="boton-amarillo btn">Contactános</a>
</section>

<div class="contenedor seccion seccion-inferior">
    <section class="blog">
        <a href="/blog.php">
            <h3 class="titulo-bold">Nuestro Blog</h3>
        </a>

        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <img loading="lazy" src="/src/img/blog1.jpg" alt="Texto de Entrada al Blog">
                </picture>
            </div>

            <div class="texto-entrada">
                <a href="entrada-1.php">
                    <h4>Terraza en el techo de tu casa</h4>
                    <p>Escrito el día: <span>13/08/2021</span> por: <span>Admin</span></p>

                    <p>
                        Consejos para construir una terraza en el techo de tu casa con los mejores materiales y
                        ahorrando dinero
                    </p>
                </a>
            </div>
        </article>

        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <img loading="lazy" src="/src/img/blog5.jpg" alt="Decoración de tu cocina">
                </picture>
            </div>

            <div class="texto-entrada">
                <a href="entrada-3.php">
                    <h4>Decoración definitiva para tu cocina</h4>
                    <p>Escrito el día: <span>27/08/2021</span> por: <span>Admin</span></p>

                    <p>
                        Si siempre soñó con tener una cocina de lujo... ¡esta nota es para usted!
                    </p>
                </a>
            </div>
        </article>

        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <img loading="lazy" src="/src/img/blog6.jpg" alt="Cancha de tennis en tu casa">
                </picture>
            </div>

            <div class="texto-entrada">
                <a href="entrada-4.php">
                    <h4>Una cancha de tenis... ¡En tu casa!</h4>
                    <p>Escrito el día: <span>03/09/2021</span> por: <span>Admin</span></p>

                    <p>
                        Ideal para amantes del deporte, sueño de muchos, realidad de pocos...
                    </p>
                </a>
            </div>
        </article>

        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <img loading="lazy" src="/src/img/blog7.jpg" alt="diseño moderno de interiores">
                </picture>
            </div>

            <div class="texto-entrada">
                <a href="entrada-5.php">
                    <h4>Estilo y diseño moderno de interiores</h4>
                    <p>Escrito el día: <span>10/09/2021</span> por: <span>Admin</span></p>

                    <p>
                        ¿Siempre te han fascinado los diseños modernos? ¡Entre a leer esta nota!
                    </p>
                </a>
            </div>
        </article>

        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <img loading="lazy" src="/src/img/blog8.jfif" alt="Espacios pequeños ya no son un problema">
                </picture>
            </div>

            <div class="texto-entrada">
                <a href="entrada-6.php">
                    <h4>¡Espacios pequeños ya no son un problema!</h4>
                    <p>Escrito el día: <span>17/09/2021</span> por: <span>Admin</span></p>

                    <p>
                        ¿Su departamento tiene pocos mt2? En esta nota aprendera como aprovecharlos al máximo
                    </p>
                </a>
            </div>
        </article>
    </section>

    <section class="testimoniales">
        <h3 class="titulo-bold">Testimoniales</h3>
        <div class="testimonial">
            <blockquote>
                El personal se comportó de una excelente forma, muy buena atención y la casa que me ofrecieron
                cumple con todas mis expectativas!
            </blockquote>
            <p>- Azul Dos Santos Soares</p>
        </div>

        <div class="testimonial">
            <blockquote>
                BIENES RAICES ha ayudado en forma eficiente a vender mi casa y comprar una nueva. Un agente siempre
                estuvo en cada detalle con persistencia permenente.
            </blockquote>
            <p>- Brian Lagranda</p>
        </div>

    </section>
</div>

<?php incluirTemplate('footer'); ?>


</body>

</html>