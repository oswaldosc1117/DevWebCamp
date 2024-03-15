if(document.querySelector('#mapa')){

    const latitud = 34.04050737102332;
    const longitud = -118.2695731331058;
    const zoom = 16;

    var map = L.map('mapa').setView([latitud, longitud], zoom);

    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    L.marker([latitud, longitud]).addTo(map)
        .bindPopup(`
            <h2 class="mapa__heading">DevWebCamp</h2>
            <p class="mapa__texto">Centro de Convenciones de los Angeles</p>`
        )
        .openPopup();
}