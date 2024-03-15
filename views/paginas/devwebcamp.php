<main class="devwebcamp">
    <h2 class="devwebcamp__heading"><?php echo $titulo; ?></h2>
    <p class="devwebcamp__descripcion">Conoce la Conferencia más importante de Latinoamérica</p>

    <div class="devwebcamp__grid">
        <div class="devwebcamp__imagen" <?php aos_animacion(); ?>>
            <picture>
                <source srcset="build/img/sobre_devwebcamp.avif" type="image/avif">
                <source srcset="build/img/sobre_devwebcamp.webp" type="image/webp">
            
                <img loading="lazy" width="200" height="300" src="build/img/sobre_devwebcamp.jpg" alt="Imagen DevWebCamp">
            </picture>
        </div>

        <div class="devwebcamp__contenido" <?php aos_animacion(); ?>>
            <p class="devwebcamp__texto">Proin viverra eros in ipsum molestie, nec viverra quam ultricies. Donec sem nibh, viverra ut ornare sit amet, euismod eu quam.
                Aenean blandit, mauris aliquet fermentum dapibus, lacus nisi luctus orci, ac lacinia lorem eros vitae ligula. Fusce hendrerit consequat mauris, et
                condimentum dolor consequat quis.</p>

            <p class="devwebcamp__texto">Proin viverra eros in ipsum molestie, nec viverra quam ultricies. Donec sem nibh, viverra ut ornare sit amet, euismod eu quam.
                Aenean blandit, mauris aliquet fermentum dapibus, lacus nisi luctus orci, ac lacinia lorem eros vitae ligula. Fusce hendrerit consequat mauris, et
                condimentum dolor consequat quis.</p>
        </div>
    </div>
</main>