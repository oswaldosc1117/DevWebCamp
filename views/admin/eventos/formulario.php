<fieldset class="formulario__fieldset">
    <legend class="formulario__legend">Información del Evento</legend>

    <div class="formulario__campo">
        <label for="nombre" class="formulario__label">Nombre del Evento</label>
        <input
            type="text"
            class="formulario__input"
            id="nombre"
            name="nombre"
            value="<?php echo $eventos->nombre; ?>"
            placeholder="Nombre Evento"
        >
    </div> <!--Cierre de formulario__campo-->

    <div class="formulario__campo">
        <label for="descripcion" class="formulario__label">Descripción del Evento</label>
        <textarea
            class="formulario__input"
            id="descripcion"
            name="descripcion"
            placeholder="Descripción del Evento"
            rows="6"
        ><?php echo $eventos->descripcion; ?></textarea>
    </div> <!--Cierre de formulario__campo-->


    <div class="formulario__campo">
        <label for="categorias" class="formulario__label">Tipo de Evento</label>
        <select
            class="formulario__select"
            id="categorias"
            name="categoria_id">
            
            <option value="" disabled selected>-- Seleccionar --</option>
            <?php foreach($categorias as $categoria): ?>
                <option <?php echo ($eventos->categoria_id === $categoria->id) ? 'selected' : ''; ?> value="<?php echo $categoria->id; ?>"><?php echo $categoria->nombre; ?></option>
            <?php endforeach; ?>
        </select>
    </div> <!--Cierre de formulario__campo-->

    <div class="formulario__campo">
        <label for="dias" class="formulario__label">Selecciona el día</label>

        <div class="formulario__radio">
            <?php foreach($dias as $dia): ?>
                <div class="formulario__radio--alinear">
                    <label for="<?php echo strtolower($dia->nombre);?>"><?php echo $dia->nombre; ?></label>
                    <input
                        type="radio"
                        id="<?php echo strtolower($dia->nombre);?>"
                        name="dia"
                        value="<?php echo $dia->id; ?>"
                        <?php echo ($eventos->dia_id === $dia->id) ? 'checked' : ''; ?>
                    >
                </div>
            <?php endforeach; ?>
        </div> <!--Cierre de formulario__radio-->

        <input type="hidden" name="dia_id" value="<?php echo $eventos->dia_id; ?>">
    </div> <!--Cierre de formulario__campo-->

    <div class="formulario__campo">
        <label class="formulario__label">Selecciona la hora</label>
        <ul id="horas" class="horas">
            <?php foreach($horas as $hora): ?>
                <li data-hora-id="<?php echo $hora->id; ?>" class="horas__li horas__li--deshabilitado"><?php echo $hora->hora; ?></li> <!--NG - 1.-->
            <?php endforeach; ?>
        </ul>
        <input type="hidden" name="hora_id" value="<?php echo $eventos->hora_id; ?>">

    </div> <!--Cierre de formulario__campo-->
</fieldset>

<fieldset class="formulario__fieldset">
    <legend class="formulario__legend">Información Extra</legend>

    <div class="formulario__campo">
        <label for="ponentes" class="formulario__label">Ponente</label>
        <input
            type="text"
            class="formulario__input"
            id="ponentes"
            placeholder="Buscar Ponente"
        >

        <ul id="listado-ponentes" class="listado-ponentes"></ul>
        <input type="hidden" name="ponente_id" value="<?php echo $eventos->ponente_id; ?>">
    </div> <!--Cierre de formulario__campo-->

    <div class="formulario__campo">
        <label for="disponibles" class="formulario__label">Lugares Disponibles</label>
        <input
            type="number"
            min="1"
            class="formulario__input"
            id="disponibles"
            name="disponibles"
            value="<?php echo $eventos->disponibles; ?>"
            placeholder="Ejemplo: 20"
        >
    </div> <!--Cierre de formulario__campo-->
</fieldset>


<!--NOTAS GENERALES

1.- Un atributo personalizado es un atributo hecho por el usuario. Por norma, este debe empezar siempre con el prefijo data- seguido del nombre que se le desee
otorgar.
-->