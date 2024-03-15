<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo; ?></h2>
    <p class="auth__texto">Llena el siguiente formulario</p>

    <?php require_once __DIR__ . '/../templates/alertas.php'; ?>

    <form method="POST" action="/registro" class="formulario">
        <div class="formulario__campo">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="formulario__input" placeholder="Ingresa tu nombre" value="<?php echo $usuario->nombre; ?>">
        </div> <!--Cierre de formulario__campo-->

        <div class="formulario__campo">
            <label for="nombre">Apellido</label>
            <input type="text" name="apellido" id="apellido" class="formulario__input" placeholder="Ingresa tu apellido" value="<?php echo $usuario->apellido; ?>">
        </div> <!--Cierre de formulario__campo-->

        <div class="formulario__campo">
            <label for="email">E-Mail</label>
            <input type="email" name="email" id="email" class="formulario__input" placeholder="Ingresa tu Correo" value="<?php echo $usuario->email; ?>">
        </div> <!--Cierre de formulario__campo-->

        <div class="formulario__campo">
            <label for="password">Contraseña</label>
            <input type="password" name="password" id="password" class="formulario__input" placeholder="Ingresa tu contraseña">
        </div> <!--Cierre de formulario__campo-->

        <div class="formulario__campo">
            <label for="password2">Confirmar contraseña</label>
            <input type="password" name="password2" id="password2" class="formulario__input" placeholder="Confirma tu contraseña">
        </div> <!--Cierre de formulario__campo-->

        <input type="submit" class="formulario__submit" value="Crear Cuenta">
    </form> <!--Cierre de formulario-->

    <div class="acciones">
        <a href="/login" class="acciones__enlace">¿Ya tienes una Cuenta? Ingresa ahora</a>
        <a href="/olvide" class="acciones__enlace">¿Olvidaste tu Clave?</a>
    </div>
</main> <!--Cierre de auth->

