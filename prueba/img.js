var fileInput = document.getElementById('imagen');

fileInput.addEventListener('change', function() {
    var selectedFile = fileInput.files[0];
    if (selectedFile) {
        console.log('Archivo seleccionado:', selectedFile.name);
        img.src = selectedFile.name
        console.log(fileInput.files)
    } 
})

if(document.querySelector("#imagen")){
    const imagen = document.querySelector("#imagen");
    imagen.onchange = function(e) {
        const uploadimagen = document.querySelector("#imagen").value;
        const fileimg = document.querySelector("#imagen").files;
        const nav = window.URL || window.webkitURL;
        const contactAlert = document.querySelector('#form_alert');
        if(uploadimagen !=''){
            const type = fileimg[0].type;

            if(type != 'image/jpeg' && type != 'image/jpg' && type != 'image/png'){
                contactAlert.innerHTML = '<p class="errorArchivo">El archivo no es válido.</p>';
                if(document.querySelector('#img')){
                    document.querySelector('#img').remove();
                }

                imagen.value="";
            }else{  
                    contactAlert.innerHTML='';
                    if(document.querySelector('#img')){
                        document.querySelector('#img').remove();
                    }
                    const objeto_url = nav.createObjectURL(this.files[0]);
                    console.log(objeto_url)
                    document.querySelector('#photo').innerHTML = "<img id='img' src="+objeto_url+">";
                    console.log(img.height)
                }
        }
    }
}