function DeleteFunction(id) {
   
    if (confirm("¡Atencion! ¡Se eliminará la carrera seleccionada !¿Está seguro/a que desea eliminar?")) {
        window.location.href="https://intranet.unraf.edu.ar/RegistroDigital/admin/eliminarDocumentos/"+id+"";
    } else {
        window.location.href="https://intranet.unraf.edu.ar/RegistroDigital/admin/verDocumentos";
    }
  
}