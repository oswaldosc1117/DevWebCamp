(function(){

    const tagsInput = document.querySelector('#tags_input');

    if(tagsInput){

        const tagsDiv = document.querySelector('#tags');
        const tagsInputHidden = document.querySelector('[name="tags"]');
        let tags = [];

        // Recuperar del input oculto.
        if(tagsInputHidden !== ''){
            tags = tagsInputHidden.value.split(','); // NG - 2.
            mostrarTags();
        }

        // Escuchar los cambios en el input.
        tagsInput.addEventListener('keypress', guardartag);

        function guardartag(e){

            if(e.keyCode === 44){

                if(e.target.value.trim() === '' || e.target.value < 1){
                    return;
                }

                e.preventDefault();
                tags = [...tags, e.target.value.trim()];
                tagsInput.value = '';

                mostrarTags();
            }
        }


        function mostrarTags(){
            tagsDiv.textContent = '';
            tags.forEach(tag => {
                const etiqueta = document.createElement('LI');
                etiqueta.classList.add('formulario__tag');
                etiqueta.textContent = tag;
                etiqueta.ondblclick = eliminarTag;
                tagsDiv.appendChild(etiqueta);
            })

            actualizarInputHidden();
        }


        function eliminarTag(e){
            e.target.remove();
            tags = tags.filter(tag => tag !== e.target.textContent);
            actualizarInputHidden();
        }


        function actualizarInputHidden(){
            tagsInputHidden.value = tags.toString();
        }
    }
})()

/** NOTAS GENERALES
 * 
 * 1.- keyCode devuelve el codigo de la tecla presionada, o el codigo del caracter (charCode) de la tecla alfanumerica presionada.
 * 2.- El método split() divide un objeto de tipo String en un array (vector) de cadenas mediante la separación de la cadena en subcadenas.
*/