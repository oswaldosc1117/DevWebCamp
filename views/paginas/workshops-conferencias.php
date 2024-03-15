<main class="agenda">
    <h2 class="agenda__heading"><?php echo $titulo; ?></h2>
    <p class="agenda__descripcion">Dictados por los mayores expertos en desarrollo web</p>

    <div class="eventos">
        <h2 class="eventos__heading">&lt;Conferencias/></h2>
        <p class="eventos__fecha">Viernes 22 de Marzo</p>

        <div class="eventos__listados slider swiper">
            <div class="swiper-wrapper">
                <?php foreach($eventos['conferencias_viernes'] as $evento): ?>
                    <?php include __DIR__ . '../../templates/evento.php'; ?>
                <?php endforeach; ?>
            </div> <!--Cierre de swiper-wrapper-->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div> <!--Cierre de eventos__listado-->

        <p class="eventos__fecha">Sábado 23 de Marzo</p>

        <div class="eventos__listados slider swiper">
            <div class="swiper-wrapper">
                <?php foreach($eventos['conferencias_sabado'] as $evento): ?>
                    <?php include __DIR__ . '../../templates/evento.php'; ?>
                <?php endforeach; ?>
            </div> <!--Cierre de swiper-wrapper-->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div> <!--Cierre de eventos__listado-->
    </div> <!--Cierre de eventos-->


    <div class="eventos eventos--workshops">
        <h2 class="eventos__heading">&lt;Workshops/></h2>
        <p class="eventos__fecha">Viernes 22 de Marzo</p>

        <div class="eventos__listados slider swiper">
            <div class="swiper-wrapper">
                <?php foreach($eventos['workshops_viernes'] as $evento): ?>
                    <?php include __DIR__ . '../../templates/evento.php'; ?>
                <?php endforeach; ?>
            </div> <!--Cierre de swiper-wrapper-->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div> <!--Cierre de eventos__listado-->

        <p class="eventos__fecha">Sábado 23 de Marzo</p>

        <div class="eventos__listados slider swiper">
            <div class="swiper-wrapper">
                <?php foreach($eventos['workshops_sabado'] as $evento): ?>
                    <?php include __DIR__ . '../../templates/evento.php'; ?>
                <?php endforeach; ?>
            </div> <!--Cierre de swiper-wrapper-->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div> <!--Cierre de eventos__listado-->
    </div> <!--Cierre de eventos-->
</main>