function DeleteFunction(id) {
   
    if (confirm("¡Atencion! ¡Se eliminará la carrera seleccionada !¿Está seguro que desea eliminar?")) {
        window.location.href="http://localhost/SistemaRegistroDigital/public/index.php/eliminarCarreras/"+id+"";
    } else {
        window.location.href="http://localhost/SistemaRegistroDigital/public/index.php/verCarreras";
    }
  
}