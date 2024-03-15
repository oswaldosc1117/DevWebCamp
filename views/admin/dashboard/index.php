<h2 class="dashboard__heading"><?php echo $titulo; ?></h2>


<main class="bloques">
    <div class="bloques__grid">
        <div class="bloque">
            <h3 class="bloque__heading">Últimos Registros</h3>
            <?php foreach($registros as $registro): ?>
                <ul class="bloque__contenido">
                    <li class="bloque__texto"><?php echo $registro->usuario->nombre . " " . $registro->usuario->apellido; ?></li>
            </ul>
            <?php endforeach; ?>
        </div> <!--Cierre de bloque-->

        <div class="bloque">
            <h3 class="bloque__heading">Ingresos</h3>
            <p class="bloque__texto bloque__texto--ingresos">$ <?php echo $ingresos; ?></p>
        </div> <!--Cierre de bloque-->

        <div class="bloque">
            <h3 class="bloque__heading bloque__heading--disponibles">Eventos con menos lugares Disponibles</h3>
            <?php foreach($menos_disponibles as $evento): ?>
                <ul class="bloque__contenido">
                    <li class="bloque__texto bloque__texto--disponibles"><?php echo $evento->nombre . " - "; ?><span class="bloque__texto--span"><?php echo $evento->disponibles . ' Disponibles'; ?></span></li>
                </ul>
            <?php endforeach; ?>
        </div> <!--Cierre de bloque-->

        <div class="bloque">
            <h3 class="bloque__heading bloque__heading--disponibles">Eventos con más lugares Disponibles</h3>
            <?php foreach($mas_disponibles as $evento): ?>
                <ul class="bloque__contenido">
                    <li class="bloque__texto bloque__texto--disponibles"><?php echo $evento->nombre . " - "; ?><span class="bloque__texto--span"><?php echo $evento->disponibles . ' Disponibles'; ?></span></li>
                </ul>
            <?php endforeach; ?>
        </div> <!--Cierre de bloque-->
    </div> <!--Cierre de bloques__grid-->
</main>