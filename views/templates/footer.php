<footer class="footer">
    <div class="footer__grid">
        <div class="footer__contenido">
            <h3 class="footer__logo">&#60;DevWebCamp/&#62;</h3>

            <p class="footer__texto">DevWebCamp es una conferencia para desarrolladores de todos los niveles, se lleva a cabo de forma presencial y en línea.</p>
        </div>

        <nav class="menu-redes">
            <a class="menu-redes__enlace" rel="noopener noreferrer" target="_blank" href="https://facebook.com/C%C3%B3digo-Con-Juan-103341632130628">
                <span class="menu-redes__ocultar">Facebook</span>
            </a> 
            <a class="menu-redes__enlace" rel="noopener noreferrer" target="_blank" href="https://twitter.com/codigoconjuan">
                <span class="menu-redes__ocultar">Twitter</span>
            </a> 
            <a class="menu-redes__enlace" rel="noopener noreferrer" target="_blank" href="https://youtube.com/codigoconjuan">
                <span class="menu-redes__ocultar">YouTube</span>
            </a> 
            <a class="menu-redes__enlace" rel="noopener noreferrer" target="_blank" href="https://instagram.com/codigoconjuan">
                <span class="menu-redes__ocultar">Instagram</span>
            </a> 
            <a class="menu-redes__enlace" rel="noopener noreferrer" target="_blank" href="https://tiktok.com/@codigoconjuan">
                <span class="menu-redes__ocultar">Tiktok</span>
            </a> 
            <a class="menu-redes__enlace" rel="noopener noreferrer" target="_blank" href="https://github.com/codigoconjuan">
                <span class="menu-redes__ocultar">Github</span>
            </a>
        </nav>
    </div>

    <p class="footer__copyright">DevWebCamp <span class="footer__copyright--regular"> - Todos los Derechos Reservados <?php echo date('Y'); ?></span></p>
</footer>


<!--NOTAS GENERALES

1.- rel="": Este atributo indica la relación del documento enlazado con el actual. El atributo debe ser una lista de tipos de enlaces separados por espacio.
El uso más común para este atributo es especificar el enlace a una hoja de estilos externa: el atributo rel se establece con valor stylesheet, y el atributo
href se establece con la URL de la hoja de estilos externa para dar formato a la página.

2.- noopener: Indica al navegador que navegue hasta el recurso de destino sin otorgar al nuevo contexto de navegación acceso al documento que lo abrió, al no
configurar la ventana. Propiedad Window.opener en la ventana abierta (devuelve null). Esto es especialmente útil al abrir enlaces que no son de confianza,
para garantizar que no puedan alterar el documento de origen a través de la propiedad Window.opener.

3.- noreferrer: Evita que el navegador, al navegar a otra página, envíe el nombre de esta página, o cualquier otro valor, como referencia a través del
encabezado Referer: HTTP.

4.- target="": Especifica en donde desplegar la URL enlazada. 

5.- _blank: Carga la URL en un nuevo contexto de navegación. Usualmente es una pestaña, sin embargo, los usuarios pueden configurar los navegadores para
utilizar una ventana nueva en lugar de la pestaña.
-->