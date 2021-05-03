//Con esta funcion valido que ingrese un domicilio válido falta agregar los demas 
//Y tambien validar con PHP para que no se pueda enviar
var texto = document.querySelector("#textAlert")
var nroDomicilio = document.querySelector("#datos_personales_nroDomicilio");
texto.style.display = "none";
nroDomicilio.addEventListener('keyup', function(){
    if(nroDomicilio.value <= 0 || nroDomicilio.value >= 9999){
        texto.style.display = "block";
    }
    else{
        texto.style.display = "none";
    }
});
//Corregir