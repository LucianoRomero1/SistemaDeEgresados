$(document).ready(function() {
    var divModificacionesCarrera= $("#modificacionesCarrera").hide();
    var divModificacionesTitulos= $("#modificacionesTitulos").hide();
    var divModificacionesDocumentos= $("#modificacionesDocumentos").hide();
    var carreras= $("#idCarreras");
    var titulos= $("#idTitulos");
    var documentos= $("#idDocumentos");
   


    // Click Carreras
    carreras.on('click', function(e) {
        divModificacionesCarrera.slideToggle(200);
    });
   
    //Click Titulos
    titulos.on('click', function(e) {
        divModificacionesTitulos.slideToggle(200);
    });

    //Click Documentos
    documentos.on('click', function(e) {
        divModificacionesDocumentos.slideToggle(200);
    });
    

});