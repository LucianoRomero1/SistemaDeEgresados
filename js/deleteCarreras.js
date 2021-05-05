function DeleteFunction(id) {
   
    if (confirm("¡Atencion! ¡Se eliminará la carrera seleccionada !¿Está seguro que desea eliminar?")) {
        window.location.href="https://intranet.unraf.edu.ar/RegistroDigital/admin/eliminarCarreras/"+id+"";
    } else {
        window.location.href="https://intranet.unraf.edu.ar/RegistroDigital/admin/verCarreras";
    }
  
}