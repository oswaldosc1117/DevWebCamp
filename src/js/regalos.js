(function(){
    const grafica = document.querySelector('#regalos-grafica');

    if(grafica){

        obtenerRegalo();

        async function obtenerRegalo(){
            const url = '/api/regalos';
            const respuesta = await fetch(url);
            const resultado = await respuesta.json();

            const ctx = document.getElementById('regalos-grafica');

            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: resultado.map(regalo => regalo.nombre),
                    datasets: [{
                        label: '',
                        data: resultado.map(regalo => regalo.total),
                        backgroundColor: [
                            'rgba(204, 7, 0, 0.5)',
                            'rgba(131, 204, 22, 0.5)',
                            'rgba(34, 211, 238, 0.5)',
                            'rgba(169, 85, 247, 0.5)',
                            'rgba(239, 68, 68, 0.5)',
                            'rgba(20, 184, 165, 0.5)',
                            'rgba(219, 39, 120, 0.5)',
                            'rgba(225, 29, 71, 0.5)',
                            'rgba(126, 34, 206, 0.5)'
                        ],
                        borderColor: [
                            'rgba(204, 7, 0, 1)',
                            'rgba(131, 204, 22, 1)',
                            'rgba(34, 211, 238, 1)',
                            'rgba(169, 85, 247, 1)',
                            'rgba(239, 68, 68, 1)',
                            'rgba(20, 184, 165, 1)',
                            'rgba(219, 39, 120, 1)',
                            'rgba(225, 29, 71, 1)',
                            'rgba(126, 34, 206, 1)'
                        ],
                        borderWidth: 2
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    },
                    plugins: {
                        legend: {
                            display: false
                        }
                    }
                }
            });
        }
    }
})()