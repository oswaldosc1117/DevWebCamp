<main class="paquetes">
    <h2 class="paquetes__heading"><?php echo $titulo; ?></h2>
    <p class="paquetes__descripcion">Compara los paquetes de DevWebCamp</p>

    <div class="paquetes__grid">
        <div class="paquete" <?php aos_animacion(); ?>>
            <div class="paquete-ordenar">
                <h3 class="paquete__nombre">Pase Gratis</h3>
                <ul class="paquete__lista">
                    <li class="paquete__elemento">Acceso Virtual a DevWebCamp</li>
                </ul>
            </div>
                <p class="paquete__precio">$0</p>
        </div>

        <div class="paquete" <?php aos_animacion(); ?>>
            <div class="paquete-ordenar">
                <h3 class="paquete__nombre">Pase Presencial</h3>
                <ul class="paquete__lista">
                    <li class="paquete__elemento">Acceso Presencial a DevWebCamp</li>
                    <li class="paquete__elemento">Pase por dos días</li>
                    <li class="paquete__elemento">Acceso Workshops y Conferencias</li>
                    <li class="paquete__elemento">Acceso a las grabaciones</li>
                    <li class="paquete__elemento">Merchandising del Evento</li>
                    <li class="paquete__elemento">Comida y bebida</li>
                </ul>
            </div>

            <p class="paquete__precio">$199</p>
        </div>

        <div class="paquete" <?php aos_animacion(); ?>>
            <div class="paquete-ordenar">
                <h3 class="paquete__nombre">Pase Virtual</h3>
                <ul class="paquete__lista">
                    <li class="paquete__elemento">Acceso Virtual a DevWebCamp</li>
                    <li class="paquete__elemento">Pase por dos días</li>
                    <li class="paquete__elemento">Enlaces a Workshops y Conferencias</li>
                    <li class="paquete__elemento">Acceso a las grabaciones</li>
                </ul>
            </div>

            <p class="paquete__precio">$49</p>
        </div>
    </div> <!--Cierre de paquetes__grid-->
</main>