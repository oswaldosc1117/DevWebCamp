(function(){
    const ponentesInputs = document.querySelector('#ponentes');
    if(ponentesInputs){
        let ponentes = [];
        let ponentesFiltrados = [];

        const listadoPonentes = document.querySelector('#listado-ponentes');
        const ponenteHidden = document.querySelector('[name="ponente_id"]');

        obtenerPonentes();

        ponentesInputs.addEventListener('input', buscarPonentes);

        if(ponenteHidden.value){
            (async () => {
                const ponente = await obtenerPonente(ponenteHidden.value);
                const {nombre, apellido} = ponente;

                // Insertar en el HTML
                const ponenteDOM = document.createElement('LI');
                ponenteDOM.classList.add('listado-ponentes__ponente', 'listado-ponentes__ponente--seleccionado');
                ponenteDOM.textContent = `${nombre} ${apellido}`;

                listadoPonentes.appendChild(ponenteDOM);
            })()
        }
        
        async function obtenerPonentes(){
            const url = `/api/ponentes`;
            const respuesta = await fetch(url);
            const resultado = await respuesta.json();

            formatearPonentes(resultado);
        }


        async function obtenerPonente(id){
            const url = `/api/ponente?id=${id}`;
            const respuesta = await fetch(url);
            const resultado = await respuesta.json();
            return resultado;
        }


        function formatearPonentes(e = []){
            ponentes = e.map(ponente => {
                return {
                    nombre: `${ponente.nombre.trim()} ${ponente.apellido.trim()}`,
                    id: ponente.id
                }
            })
        }


        function buscarPonentes(e){
            const busqueda = e.target.value;
            
            if(busqueda.length > 3){
                const expresion = new RegExp(busqueda, "i"); // NG - 1.

                ponentesFiltrados = ponentes.filter(ponente => {
                    if(ponente.nombre.toLowerCase().search(expresion) != -1){
                        return ponente
                    }
                })
            } else{
                ponentesFiltrados = [];
            }

            mostrarPonentes();
        }


        function mostrarPonentes(){

            while(listadoPonentes.firstChild){
                listadoPonentes.removeChild(listadoPonentes.firstChild);
            }

            if(ponentesFiltrados.length > 0){
                ponentesFiltrados.forEach(ponente => {
                    const ponenteHTML = document.createElement('LI');
                    ponenteHTML.classList.add('listado-ponentes__ponente');
                    ponenteHTML.textContent = ponente.nombre;
                    ponenteHTML.dataset.ponenteId = ponente.id;
                    ponenteHTML.onclick = seleccionarPonente;
    
                    // Añadir al DOM.
                    listadoPonentes.appendChild(ponenteHTML);
                })
            } else{
                const noResultados = document.createElement('P');
                noResultados.classList.add('listado-ponentes__no-resultados');
                noResultados.textContent = 'No se encontró ningún Ponente';

                listadoPonentes.appendChild(noResultados);
            }
        }


        function seleccionarPonente(e){
            const ponenteSeleccionado = e.target;

            const ponentePrevio = document.querySelector('.listado-ponentes__ponente--seleccionado');

            // Remover la clase previa.
            if(ponentePrevio){
                ponentePrevio.classList.remove('listado-ponentes__ponente--seleccionado');
            }

            ponenteSeleccionado.classList.add('listado-ponentes__ponente--seleccionado');

            ponenteHidden.value = ponenteSeleccionado.dataset.ponenteId;

            console.log(ponenteHidden);
        }
    }
})();

/** NOTAS GENERALES
 * 
 * 1.- Las expresiones regulares son patrones que se utilizan para hacer coincidir combinaciones de caracteres en cadenas. En JavaScript, las expresiones
 * regulares también son objetos. Se expresesan mediante el operador new seguido por el objeto RegExp (regular Expression).
*/