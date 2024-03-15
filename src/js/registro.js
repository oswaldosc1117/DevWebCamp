import Swal from 'sweetalert2';


(function(){

    let eventos = [];

    const resumen = document.querySelector('#registro-resumen');

    if(resumen){
        const eventosBoton = document.querySelectorAll('.evento__agregar');
        eventosBoton.forEach(boton => boton.addEventListener('click', seleccionarEvento));

        const formularioRegistro = document.querySelector('#registro');
        formularioRegistro.addEventListener('submit', submitFormulario);

        mostrarEventos();
    
    
        function seleccionarEvento(e){
    
            if(eventos.length < 12){
                const {target} = e; // Aplicando destructuring para evitar repetir las "e".
    
                // Deshabilitar el evento
                target.disabled = true;
                eventos = [...eventos, {
                    id: target.dataset.id,
                    titulo: target.parentElement.querySelector('.evento__nombre').textContent.trim()
                }]
        
                mostrarEventos();
            } else{
                Swal.fire({
                    icon: "error",
                    title: "Lo sentimos...",
                    text: "Máximo de 12 eventos por registro",
                });
            }
        }
    
    
        function mostrarEventos(){
            // Limpiar el HTML
            limpiarEventos();
    
            if(eventos.length > 0){
                eventos.forEach(evento => {
                    const eventoDOM = document.createElement('DIV');
                    eventoDOM.classList.add('registro__evento');
    
                    const titulo = document.createElement('H3');
                    titulo.classList.add('registro__nombre');
                    titulo.textContent = evento.titulo;
    
                    const botonEliminar = document.createElement('BUTTON');
                    botonEliminar.classList.add('registro__eliminar');
                    botonEliminar.innerHTML = `<i class="fa-solid fa-trash"></i>`;
                    botonEliminar.onclick = function(){
                        eliminarEvento(evento.id);
                    }
    
                    // Renderizar el HTML
                    eventoDOM.appendChild(titulo);
                    eventoDOM.appendChild(botonEliminar);
                    resumen.appendChild(eventoDOM);
                })
            } else{
                const noRegistro = document.createElement('P');
                noRegistro.textContent = 'Debes añadir entre uno a doce eventos del lazo izquierdo';
                noRegistro.classList.add('registro__texto');
                resumen.appendChild(noRegistro);
            }
        }
    
    
        function eliminarEvento(id){
            eventos = eventos.filter(evento => evento.id !== id);
            const botonAgregar = document.querySelector(`[data-id="${id}"]`);
            botonAgregar.disabled = false;
    
            mostrarEventos();
        }
    
    
        function limpiarEventos(){
            while(resumen.firstChild){
                resumen.removeChild(resumen.firstChild);
            }
        }


        async function submitFormulario(e){
            e.preventDefault();

            // Obtener el regalo
            const regaloId = document.querySelector('#regalo').value;
            const eventosId = eventos.map(evento => evento.id);

            if(eventosId.length === 0 || regaloId === ''){
                Swal.fire({
                    icon: "error",
                    title: "Lo sentimos...",
                    text: "Elige al menos un Evento y un Obsequio",
                });
                return;
            }

            // Objeto de formdata
            const datos = new FormData();
            datos.append('eventos', eventosId);
            datos.append('regalo_id', regaloId);

            const url = '/finalizar-registro/conferencias';
            const respuesta = await fetch(url, {
                method: 'POST',
                body: datos
            })

            const resultado = await respuesta.json();

            if(resultado.resultado){
                Swal.fire({
                    icon: "success",
                    title: "Registro Exitoso",
                    text: "Tus Eventos han sido almacenados correctamente. Bienvenido a DevWebCamp",
                  }).then(() => location.href = `/boleto?id=${resultado.token}`)
            } else{
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "Ha ocurrido un error inesperado y no pudimos agendar tus selecciones. Por favor, intentalo de nuevo",
                }).then(() => location.reload())
            }
        }
    }
})();