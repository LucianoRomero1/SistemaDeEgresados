function DeleteFunction(id) {
   
    if (confirm("¡Atencion! ¡Se eliminará el título seleccionado!¿Está seguro que desea eliminar?")) {
        window.location.href="http://localhost/SistemaRegistroDigital/public/index.php/eliminarTitulos/"+id+"";
    } else {
        window.location.href="http://localhost/SistemaRegistroDigital/public/index.php/verTitulos";
    }
  
}