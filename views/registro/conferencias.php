<h2 class="pagina__heading"><?php

use Dotenv\Parser\Value;

 echo $titulo; ?></h2>
<p class="pagina__descripcion">Elige hasta 12 eventos para asistir de forma presencial</p>

<div class="eventos-registro">
    <main class="eventos-registro__listado">
        <h3 class="eventos-registro__heading--conferencias">&#60;Conferencias/></h3>
        <p class="eventos-registro__fecha">Viernes 22 de Marzo</p>

        <div class="eventos-registro__grid">
            <?php foreach($eventos['conferencias_viernes'] as $evento): ?>
                <?php include __DIR__ . '/evento.php'; ?>
            <?php endforeach; ?>
        </div>

        <p class="eventos-registro__fecha">Sabado 23 de Marzo</p>

        <div class="eventos-registro__grid">
            <?php foreach($eventos['conferencias_sabado'] as $evento): ?>
                <?php include __DIR__ . '/evento.php'; ?>
            <?php endforeach; ?>
        </div>

        <h3 class="eventos-registro__heading--workshops">&#60;Workshops/></h3>
        <p class="eventos-registro__fecha">Viernes 22 de Marzo</p>

        <div class="eventos-registro__grid eventos--workshops">
            <?php foreach($eventos['workshops_viernes'] as $evento): ?>
                <?php include __DIR__ . '/evento.php'; ?>
            <?php endforeach; ?>
        </div>

        <p class="eventos-registro__fecha">Sabado 23 de Marzo</p>

        <div class="eventos-registro__grid eventos--workshops">
            <?php foreach($eventos['workshops_sabado'] as $evento): ?>
                <?php include __DIR__ . '/evento.php'; ?>
            <?php endforeach; ?>
        </div>
    </main>

    <aside class="registro">
        <h2 class="registro__heading">Tu Registro</h2>

        <div id="registro-resumen" class="registro__resumen"></div>

        <div class="registro__regalo">
            <label for="regalo" class="registro__label">Selecciona un Obsequio</label>
            <select id="regalo" class="registro__select">
                <option value="" selected disabled>-- Selecciona tu Obsequio --</option>
                <?Php foreach($regalos as $regalo): ?>
                    <option value="<?Php echo $regalo->id ?>"><?Php echo $regalo->nombre ?></option>
                <?Php endforeach;?>
            </select>
        </div> <!--Cierre de registro__regalo-->

        <form id="registro" class="formulario">
            <div class="formulario__campo">
                <input type="submit" class="formulario__submit formulario__submit--full" value="Finalizar Registro">
            </div>
        </form>
    </aside>
</div>
