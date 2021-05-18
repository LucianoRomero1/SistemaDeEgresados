<?php
namespace App\Services;
use App\Entity\Archivo;

class FuncionesEgresado{

    public function cargarPdf($formulario){
        $egresado = $formulario->getData();
            
        if($egresado -> getPdfAnalitico() != null){
            $pdfAnalitico = $formulario->get('pdfAnalitico')->getData();
            $extensionArchivo=$pdfAnalitico->guessExtension();
            
            if ($extensionArchivo == 'pdf'){

                $nombreArchivo= time().".".$extensionArchivo;
                    
                $pdfAnalitico->move("uploads/pdfsAnalitico/",$nombreArchivo);

                $egresado->setPdfAnalitico($nombreArchivo);    

                return true;

            }else{
                return false;
            }

        }
        else{
            return true;
        }
    }

    public function cargarArchivos($egresado,$em){
        $archivos = $egresado -> getArchivosArray();
        $contador = 0;
        foreach($archivos as $archivo){
            if($archivo != null){
                $documento = new Archivo();
                $extensionArchivo = $archivo -> guessExtension();

                if($extensionArchivo == 'jpg' || $extensionArchivo == 'png' || $extensionArchivo == 'pdf' || $extensionArchivo == 'jpeg' ){

                    $nombreArchivo= time() . $contador .".".$extensionArchivo;
                    $contador++;
                    //$archivo -> move("uploads/imagenesDigitales/", $nombreArchivo);

                    $documento -> setNombreArchivo($nombreArchivo);
                    $egresado -> addArchivo($documento);
                    $em -> persist($documento);
                    return true;
                }
                else{
                   return false;
                }
            }
            else{
                return true;
            }
        }
        return true;
    }
}
