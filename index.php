<?php
    require 'includes/funciones.php';

    incluirTemplate('header', $inicio = true);
?>

    <main class="contenedor seccion">
        <h1>Más sobre nosotros</h1>

        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="Icono seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                   Aut reprehenderit, at autem minus quod ad, quibusdam illo,
                   magnam aspernatur sapiente qui blanditiis commodi aliquid
                   dicta ut perspiciatis odit vero recusandae.</p>
            </div>
            <div class="icono">
                <img src="build/img/icono2.svg" alt="Icono precio" loading="lazy">
                <h3>Precio</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                   Aut reprehenderit, at autem minus quod ad, quibusdam illo,
                   magnam aspernatur sapiente qui blanditiis commodi aliquid
                   dicta ut perspiciatis odit vero recusandae.</p>
            </div>
            <div class="icono">
                <img src="build/img/icono3.svg" alt="Icono tiempo" loading="lazy">
                <h3>A tiempo</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                   Aut reprehenderit, at autem minus quod ad, quibusdam illo,
                   magnam aspernatur sapiente qui blanditiis commodi aliquid
                   dicta ut perspiciatis odit vero recusandae.</p>
            </div>
        </div>
    </main>

    <section class="seccion contenedor">
        <h2>Casas y Apartamentos disponibles en venta</h2>
        <div class="contenedor-anuncios">
            <div class="anuncio">
                <picture>
                    <source srcset="build/img/anuncio1.webp" type="image/webp">
                    <source srcset="build/img/anuncio1.jpg" type="image/jpeg">
                    <img loa src="" alt="">
                </picture>

                <div class="contenido-anuncio">
                    <h3>Casa de lujo en el lago</h3>
                    <p>Casa en el lago con excelente vista, acabados de lujo a un excelente precio</p>
                    <p class="precio">$3.000,000</p>

                    <ul class="iconos-caracteristicas">
                        <li>
                            <img class="iconos" loading="lazy" src="build/img/icono_wc.svg" alt="Icono cantidad de baños de la propiedad">
                            <p>3</p>
                        </li>
                        <li>
                            <img class="iconos" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="Icono cantidad de espacios para autos">
                            <p>3</p>
                        </li>
                        <li>
                            <img class="iconos" loading="lazy" src="build/img/icono_dormitorio.svg" alt="Icono cantidad de dormitorios">
                            <p>5</p>
                        </li>
                    </ul>
                    <a href="anuncios.php" class="boton-amarillo-block">
                        Ver propiedad
                    </a>
                </div> <!--fin contenido-anuncio-->
            </div> <!--fin anuncio-->

            <div class="anuncio">
                <picture>
                    <source srcset="build/img/anuncio2.webp" type="image/webp">
                    <source srcset="build/img/anuncio2.jpg" type="image/jpeg">
                    <img loa src="" alt="">
                </picture>

                <div class="contenido-anuncio">
                    <h3>Casa terminados de lujo</h3>
                    <p>Casa en el lago con excelente vista, acabados de lujo a un excelente precio</p>
                    <p class="precio">$3.000,000</p>

                    <ul class="iconos-caracteristicas">
                        <li>
                            <img class="iconos" loading="lazy" src="build/img/icono_wc.svg" alt="Icono cantidad de baños de la propiedad">
                            <p>3</p>
                        </li>
                        <li>
                            <img class="iconos" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="Icono cantidad de espacios para autos">
                            <p>3</p>
                        </li>
                        <li>
                            <img class="iconos" loading="lazy" src="build/img/icono_dormitorio.svg" alt="Icono cantidad de dormitorios">
                            <p>5</p>
                        </li>
                    </ul>
                    <a href="anuncios.php" class="boton-amarillo-block">
                        Ver propiedad
                    </a>
                </div> <!--fin contenido-anuncio-->
            </div> <!--fin anuncio-->

            <div class="anuncio">
                <picture>
                    <source srcset="build/img/anuncio3.webp" type="image/webp">
                    <source srcset="build/img/anuncio3.jpg" type="image/jpeg">
                    <img loa src="" alt="">
                </picture>

                <div class="contenido-anuncio">
                    <h3>Casa con piscina</h3>
                    <p>Casa en el lago con excelente vista, acabados de lujo a un excelente precio</p>
                    <p class="precio">$3.000,000</p>

                    <ul class="iconos-caracteristicas">
                        <li>
                            <img class="iconos" loading="lazy" src="build/img/icono_wc.svg" alt="Icono cantidad de baños de la propiedad">
                            <p>3</p>
                        </li>
                        <li>
                            <img class="iconos" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="Icono cantidad de espacios para autos">
                            <p>3</p>
                        </li>
                        <li>
                            <img class="iconos" loading="lazy" src="build/img/icono_dormitorio.svg" alt="Icono cantidad de dormitorios">
                            <p>5</p>
                        </li>
                    </ul>
                    <a href="anuncios.php" class="boton-amarillo-block">
                        Ver propiedad
                    </a>
                </div> <!--fin contenido-anuncio-->
            </div> <!--fin anuncio-->

        </div> <!--Fin contenedor-anuncios-->

        <div class="alinear-derecha">
            <a href="anuncios.php" class="boton-verde">Ver todas</a>
        </div>
    </section>

    <section class="imagen-contacto">
        <h2>Encuentra la casa de tus sueños</h2>
        <p>Llena el formulario y un asesor se pondrá en contacto contigo a la brevedad</p>
        <a href="contacto.php" class="boton-amarillo">Contáctanos</a>
    </section>

    <div class="contenedor seccion seccion-inferior">
        <section class="blog">
            <h3>Nuestro blog</h3>

            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog1.webp" type="image/webp"> 
                        <source srcset="build/img/blog1.jpg" type="image/jpeg"> 
                        <img loading="lazy" src="build/img/blog1.jpg" alt="Texto entrada blog">
                    </picture>
                </div>
                <div class="texto-entrada">
                    <a href="entrada.php">
                        <h4>Terraza en el techo de tu casa</h4>
                        <p class="informacion-meta">Escrito el <span>20/12/2021</span> por <span>Admin</span></p>
                        <p>Consejos para escribir una terraza en el techo de tu casa con los mejores materiales
                            y ahorrando dinero</p>
                    </a>
                </div>
            </article> <!--Fin artículo-->

            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog2.webp" type="image/webp"> 
                        <source srcset="build/img/blog2.jpg" type="image/jpeg"> 
                        <img loading="lazy" src="build/img/blog2.jpg" alt="Texto entrada blog">
                    </picture>
                </div>
                <div class="texto-entrada">
                    <a href="entrada.php">
                        <h4>Guía para la decoración de tu hogar</h4>
                        <p class="informacion-meta">Escrito el <span>20/12/2021</span> por <span>Admin</span></p>
                        <p>Maximiza el espacio de tu hogar con esta guía, aprende a combinar muebles y colores
                            para darle vida a tu espacio</p>
                    </a>
                </div>
            </article>
        </section>

        <section class="testimoniales">
            <h3>Testimoniales</h3>
            <div class="testimonial">
                <blockquote>
                    El personal se comportó de un excelente forma, muy buena atención y la casa que me ofrecieron
                    cumple con todas mis expectativas.
                </blockquote>
                <p>- Sara Restrepo Vélez</p>
            </div>
        </section>

    </div>

<?php
    include 'includes/templates/footer.php';
?>

    