(function(){
    const horas = document.querySelector('#horas');

    if(horas){

        const categoria = document.querySelector('[name="categoria_id"]');
        const dias = document.querySelectorAll('[name="dia"]');
        const diaHidden = document.querySelector('[name="dia_id"]');
        const horaHidden = document.querySelector('[name="hora_id"]');

        categoria.addEventListener('change', terminoBusqueda);
        dias.forEach(dia => dia.addEventListener('change', terminoBusqueda));

        let busqueda = {
            categoria_id: +categoria.value || '', // NG - 1.
            dia: +diaHidden.value || ''
        }

        if(!Object.values(busqueda).includes('')){
            (async () => {
                await buscarEventos();

                // Resaltar la hora actual.
                const id = horaHidden.value;
                const horaSeleccionada = document.querySelector(`[data-hora-id="${id}"]`);
    
                horaSeleccionada.classList.remove('horas__li--deshabilitado');
                horaSeleccionada.classList.add('horas__li--seleccionada');

                horaSeleccionada.onclick = seleccionarHora;
            })()
        }

        
        function terminoBusqueda(e){
            busqueda[e.target.name] = e.target.value;

            // Reiniciar los campos ocultos y el selector de horas.
            horaHidden.value = '';
            diaHidden.value = '';
            const horaPrevia = document.querySelector('.horas__li--seleccionada');
            if(horaPrevia){
                horaPrevia.classList.remove('horas__li--seleccionada');
            }

            if(Object.values(busqueda).includes('')){
                return;
            }

            buscarEventos();
        }


        async function buscarEventos(){
            const {dia, categoria_id} = busqueda; 
            const url = `/api/eventos-horarios?dia_id=${dia}&categoria_id=${categoria_id}`;
            
            const resultado = await fetch(url);
            const eventos = await resultado.json();

            obtenerHorasDisponibles(eventos);
        }


        function obtenerHorasDisponibles(eventos){
            // Reiniciar las horas.
            const listadoHoras = document.querySelectorAll('#horas li');
            listadoHoras.forEach(li => li.classList.add('horas__li--deshabilitado'));

            // Comprobar si existen eventos para ciertas horas y remover la clase de deshabilitado.
            const horasTomadas = eventos.map(evento => evento.hora_id);

            const listadoHorasArray = Array.from(listadoHoras);

            const resultado = listadoHorasArray.filter(li => !horasTomadas.includes(li.dataset.horaId));
            resultado.forEach(li => li.classList.remove('horas__li--deshabilitado'));
            
            const horasDisponibles = document.querySelectorAll('#horas li:not(.horas__li--deshabilitado)');
            horasDisponibles.forEach(horas => horas.addEventListener('click', seleccionarHora));
        }


        function seleccionarHora(e){

            // Deshabilitar la hora previa si hay un nuevo click.
            const horaPrevia = document.querySelector('.horas__li--seleccionada');
            if(horaPrevia){
                horaPrevia.classList.remove('horas__li--seleccionada');
            }

            // Agregar la clase al li seleccionado
            e.target.classList.add('horas__li--seleccionada');
            horaHidden.value = e.target.dataset.horaId;

            // LLenar el campo oculto de día.
            diaHidden.value = document.querySelector('[name="dia"]:checked').value;
        }
    }
})();

/** NOTAS GENERALES
 * 
 * 1.- El + convierte en valor en un número.
*/