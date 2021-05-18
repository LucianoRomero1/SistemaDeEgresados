function DeleteGraduado(id) {
   
    if (confirm("¡Atencion! ¡Se eliminará este graduado/a !¿Está seguro/a que desea eliminar?")) {
        window.location.href="https://intranet.unraf.edu.ar/RegistroDigital/admin/eliminarGraduado/"+id+"";
    } 
  
}

function DeleteTitulacion(id, idGrad){
    if (confirm("¡Atencion! ¡Se eliminará este graduado/a !¿Está seguro/a que desea eliminar?")) {
        window.location.href="https://intranet.unraf.edu.ar/RegistroDigital/admin/eliminarTitulacion/"+id+"/"+idGrad+"";
    } 
}