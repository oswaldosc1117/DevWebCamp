<fieldset class="formulario__fieldset">
    <legend class="formulario__legend">Información Personal</legend>

    <div class="formulario__campo">
        <label for="nombre" class="formulario__label">Nombre</label>
        <input
            type="text"
            class="formulario__input"
            name="nombre"
            id="nombre"
            placeholder="Nombre del Ponente"
            value="<?php echo $ponente->nombre ?? ''; ?>">
    </div> <!--Cierre de formulario__campo-->

    <div class="formulario__campo">
        <label for="apellido" class="formulario__label">Apellido</label>
        <input
            type="text"
            class="formulario__input"
            name="apellido"
            id="apellido"
            placeholder="Apellido del Ponente"
            value="<?php echo $ponente->apellido ?? ''; ?>">
    </div> <!--Cierre de formulario__campo-->

    <div class="formulario__campo">
        <label for="ciudad" class="formulario__label">Ciudad</label>
        <input
            type="text"
            class="formulario__input"
            name="ciudad"
            id="ciudad"
            placeholder="Ciudad del Ponente"
            value="<?php echo $ponente->ciudad ?? ''; ?>">
    </div> <!--Cierre de formulario__campo-->

    <div class="formulario__campo">
        <label for="pais" class="formulario__label">Pais</label>
        <input
            type="text"
            class="formulario__input"
            name="pais"
            id="pais"
            placeholder="Pais del Ponente"
            value="<?php echo $ponente->pais ?? ''; ?>">
    </div> <!--Cierre de formulario__campo-->

    <div class="formulario__campo">
        <label for="imagen" class="formulario__label">Imagen</label>
        <input
            type="file"
            class="formulario__input formulario__input--file"
            name="imagen"
            id="imagen">
    </div> <!--Cierre de formulario__campo-->

    <?php if(isset($ponente->imagen_actual)): ?>
        <p class="formulario__texto">Imagen Actual:</p>
        <div class="formulario__imagen">

            <picture>
                <source srcset="<?php echo $_ENV['HOST'] . '/img/speakers/' . $ponente->imagen; ?>.webp" type="image/webp">
                <source srcset="<?php echo $_ENV['HOST'] . '/img/speakers/' . $ponente->imagen; ?>.png" type="image/png">
                <img src="<?php echo $_ENV['HOST'] . '/img/speakers/' . $ponente->imagen; ?>.png" alt="Ponente Imagen" loading="lazy">
            </picture>
        </div> <!--Cierre de formulario__imagen-->
    <?php endif; ?>
</fieldset>

<fieldset class="formulario__fieldset">
    <legend class="formulario__legend">Información Extra</legend>

    <div class="formulario__campo">
        <label for="tags_input" class="formulario__label">Áreas de Experiencia (separadas por coma)</label>
        <input
            type="text"
            class="formulario__input"
            id="tags_input"
            placeholder="Ejemplo: Node.js, React, PHP, Laravel, Python, UX / UI">

        <div id="tags" class="formulario__listado"></div> <!--Rellenado con JavaScript-->
        <input type="hidden" name="tags" value="<?php echo $ponente->tags ?? ''; ?>">
    </div> <!--Cierre de formulario__campo-->
</fieldset>

<fieldset class="formulario__fieldset">
    <legend class="formulario__legend">Redes Sociales</legend>

    <div class="formulario__campo">
        <div class="formulario__contenedor-icono">
            <div class="formulario__icono">
                <i class="fa-brands fa-facebook"></i>
            </div>

            <input
                type="text"
                class="formulario__input--sociales"
                name="redes[facebook]"
                placeholder="Facebook"
                value="<?php echo $redes->facebook ?? ''; ?>">
        </div> <!--Cierre de formulario__contenedor-icono-->
    </div> <!--Cierre de formulario__campo-->

    <div class="formulario__campo">
        <div class="formulario__contenedor-icono">
            <div class="formulario__icono">
                <i class="fa-brands fa-twitter"></i>
            </div>

            <input
                type="text"
                class="formulario__input--sociales"
                name="redes[xtwitter]"
                placeholder="X (antiguo Twitter)"
                value="<?php echo $redes->xtwitter ?? ''; ?>">
        </div> <!--Cierre de formulario__contenedor-icono-->
    </div> <!--Cierre de formulario__campo-->

    <div class="formulario__campo">
        <div class="formulario__contenedor-icono">
            <div class="formulario__icono">
                <i class="fa-brands fa-instagram"></i>
            </div>

            <input
                type="text"
                class="formulario__input--sociales"
                name="redes[instagram]"
                placeholder="Instagram"
                value="<?php echo $redes->instagram ?? ''; ?>">
        </div> <!--Cierre de formulario__contenedor-icono-->
    </div> <!--Cierre de formulario__campo-->

    <div class="formulario__campo">
        <div class="formulario__contenedor-icono">
            <div class="formulario__icono">
                <i class="fa-brands fa-youtube"></i>
            </div>

            <input
                type="text"
                class="formulario__input--sociales"
                name="redes[youtube]"
                placeholder="Youtube"
                value="<?php echo $redes->youtube ?? ''; ?>">
        </div> <!--Cierre de formulario__contenedor-icono-->
    </div> <!--Cierre de formulario__campo-->

    <div class="formulario__campo">
        <div class="formulario__contenedor-icono">
            <div class="formulario__icono">
                <i class="fa-brands fa-tiktok"></i>
            </div>

            <input
                type="text"
                class="formulario__input--sociales"
                name="redes[tiktok]"
                placeholder="Tiktok"
                value="<?php echo $redes->tiktok ?? ''; ?>">
        </div> <!--Cierre de formulario__contenedor-icono-->
    </div> <!--Cierre de formulario__campo-->

    <div class="formulario__campo">
        <div class="formulario__contenedor-icono">
            <div class="formulario__icono">
                <i class="fa-brands fa-github"></i>
            </div>

            <input
                type="text"
                class="formulario__input--sociales"
                name="redes[github]"
                placeholder="Github"
                value="<?php echo $redes->github ?? ''; ?>">
        </div> <!--Cierre de formulario__contenedor-icono-->
    </div> <!--Cierre de formulario__campo-->
</fieldset>