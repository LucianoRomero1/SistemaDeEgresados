function DeleteFunction(id) {
   
    if (confirm("¡Atencion! ¡Se eliminará todo lo cargado en egresado!¿Está seguro que desea eliminar?")) {
        window.location.href="https://intranet.unraf.edu.ar/RegistroDigital/admin/eliminarEgresados/"+id+"";
    } else {
        window.location.href="https://intranet.unraf.edu.ar/RegistroDigital/user/verEgresados";
    }
  
}