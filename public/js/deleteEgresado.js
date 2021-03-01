function DeleteFunction(id) {
   
    if (confirm("¡Atencion! ¡Se eliminará todo lo cargado en egresado!¿Está seguro que desea eliminar?")) {
        window.location.href="http://localhost/SistemaRegistroDigital/public/index.php/eliminarEgresados/"+id+"";
    } else {
        window.location.href="http://localhost/SistemaRegistroDigital/public/index.php/verEgresados";
    }
  
}