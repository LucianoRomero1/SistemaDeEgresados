function DeleteFunction(id) {
   
    if (confirm("¡Atencion! ¡Se eliminará por completo esta titulación !¿Está seguro/a que desea eliminar?")) {
        window.location.href="https://intranet.unraf.edu.ar/RegistroDigital/admin/eliminarEgresados/"+id+"";
    } else {
        window.location.href="https://intranet.unraf.edu.ar/RegistroDigital/user/verEgresados";
    }
  
}