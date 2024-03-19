<section class="sponsors">
    <h2 class="sponsors__heading">Patrocinadores</h2>
    <p class="sponsors__descripcion">Conoce a las empresas que hacen posible este evento</p>
    <div class="sponsors__grid">
        <?php foreach($sponsors as $sponsor):?>
            <div class="sponsors__contenido">
                <a href="<?php echo $sponsor->url;?>" rel=noopener noreferrer target=_blank>
                    <img src="<?php echo $sponsor->imagen;?>" alt="Imagen Patrocinador" class="sponsors__imagen">
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</section>
