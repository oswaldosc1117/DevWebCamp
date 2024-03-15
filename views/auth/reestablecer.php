<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo; ?></h2>
    <p class="auth__texto">Ingresa tu Nueva Contraseña</p>

    <?php require_once __DIR__ . '/../templates/alertas.php'; ?>

    <?php if($token_valido): ?>

        <form method="POST" class="formulario">
            <div class="formulario__campo">
                <label for="password">Contraseña</label>
                <input type="password" name="password" id="password" class="formulario__input" placeholder="Ingresa tu nueva contraseña">
            </div> <!--Cierre de formulario__campo-->

            <input type="submit" class="formulario__submit" value="Guardar Contraseña">
        </form> <!--Cierre de formulario-->

    <?php endif; ?>

    <div class="acciones">
        <a href="/login" class="acciones__enlace">¿Ya tienes una Cuenta? Ingresa ahora</a>
        <a href="/registro" class="acciones__enlace">¿Aún no tienes una Cuenta? Crea una</a>
    </div>
</main> <!--Cierre de auth-->

