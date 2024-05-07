let myClassicEditor;

ClassicEditor
.create( document.querySelector('#descripcion'))
.then(editor => {myClassicEditor = editor})
.catch( error => {console.log(error)});
