<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo; ?></h2>
    <p class="auth__texto">Inicia Sesión en DevWebcamp</p>

    <?php require_once __DIR__ . '/../templates/alertas.php'; ?>

    <form method="POST" action="/login" class="formulario">
        <div class="formulario__campo">
            <label for="email">E-Mail</label>
            <input type="email" name="email" id="email" class="formulario__input" placeholder="Ingresa Correo">
        </div> <!--Cierre de formulario__campo-->

        <div class="formulario__campo">
            <label for="password">Contraseña</label>
            <input type="password" name="password" id="password" class="formulario__input" placeholder="Ingresa tu contraseña">
        </div> <!--Cierre de formulario__campo-->

        <input type="submit" class="formulario__submit" value="Iniciar Sesión">
    </form> <!--Cierre de formulario-->

    <div class="acciones">
        <a href="/registro" class="acciones__enlace">¿Aún no tienes una Cuenta? Crea una</a>
        <a href="/olvide" class="acciones__enlace">¿Olvidaste tu Clave?</a>
    </div>
</main> <!--Cierre de auth-->

