function DeleteFunction(id) {
   
    if (confirm("¡Atencion! ¡Se eliminará el título seleccionado!¿Está seguro/a que desea eliminar?")) {
        window.location.href="https://intranet.unraf.edu.ar/RegistroDigital/admin/eliminarTitulos/"+id+"";
    } else {
        window.location.href="https://intranet.unraf.edu.ar/RegistroDigital/admin/verTitulos";
    }
  
}