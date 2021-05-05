function DeletePDF(id) {
   
    if (confirm("¡Atencion! ¡Se eliminará el pdf analítico !¿Está seguro/a que desea eliminar?")) {
        window.location.href="https://intranet.unraf.edu.ar/RegistroDigital/admin/eliminarPDF/"+id+"";
    } 
  
}

function DeleteImagen(idImagen, id) {
   
    if (confirm("¡Atencion! ¡Se eliminará la imagen seleccionada !¿Está seguro/a que desea eliminar?")) {
        window.location.href="https://intranet.unraf.edu.ar/RegistroDigital/admin/eliminarImagen/"+idImagen+"/"+id+"";
    } 
  
}

function DeleteImagenTED(id) {
   
    if (confirm("¡Atencion! ¡Se eliminará la imagen que está cargada !¿Está seguro/a que desea eliminar?")) {
        window.location.href="https://intranet.unraf.edu.ar/RegistroDigital/admin/eliminarImagenTED/"+id+"";
    } 
  
}