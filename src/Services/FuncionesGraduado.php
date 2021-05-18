<?php
    namespace App\Services;
    use App\Entity\TitulacionesAlcanzadas;

class FuncionesGraduado {
    public function cargarImagenGraduado($formulario){
        $graduado = $formulario->getData();
        if($graduado -> getImagenTED() != null){
            $imagenTED = $formulario->get('imagenTED')->getData();
            $extensionArchivo=$imagenTED->guessExtension();
            
            if ($extensionArchivo == 'jpg' || $extensionArchivo == 'png' || $extensionArchivo == 'pdf' || $extensionArchivo == 'jpeg' || $extensionArchivo == 'docx' || $extensionArchivo == 'doc'){

                $nombreArchivo= time().".".$extensionArchivo;
                    
                $imagenTED->move("uploads/imagenTED/",$nombreArchivo);

                $graduado->setImagenTED($nombreArchivo);  
                
               
                return true;

            }else{
                // $this -> addFlash('error', 'Extension inválida en las imágenes, sólo se permiten .jpg, .png, .pdf, .docx, .doc, .jpeg');
                return false;
            }

        }

    }

    public function modificarImagenGraduado($formulario, $urlImagen){
        $graduado = $formulario->getData();
           
      
        if($graduado -> getImagenTED() != null){
            $imagenTED = $formulario->get('imagenTED')->getData();
            $extensionArchivo=$imagenTED->guessExtension();
            
            if ($extensionArchivo == 'jpg' || $extensionArchivo == 'png' || $extensionArchivo == 'pdf' || $extensionArchivo == 'jpeg' || $extensionArchivo == 'docx' || $extensionArchivo == 'doc'){

                $nombreArchivo= time().".".$extensionArchivo;
                    
                $imagenTED->move("uploads/imagenTED/",$nombreArchivo);

                $graduado->setImagenTED($nombreArchivo);  
                
               
                return true;

            }else{
                // $this -> addFlash('error', 'Extension inválida en las imágenes, sólo se permiten .jpg, .png, .pdf, .docx, .doc, .jpeg');
                $graduado->setImagenTED($urlImagen);
                return false;
            }

        }
        else{
            // $this -> addFlash('error', 'Este archivo es obligatorio, por favor cargue uno');
            $graduado->setImagenTED($urlImagen);
            return true;
        }
    }

    public function copiarGraduado($graduadoOriginal, $graduado){
        //Datos personales
        $graduadoOriginal->setApellido($graduado->getApellido());
        $graduadoOriginal->setNombre($graduado->getNombre());
        $graduadoOriginal->setDocumentoIdentidad($graduado->getDocumentoIdentidad());
        $graduadoOriginal->setTipoDocumentoIdentidad($graduado->getTipoDocumentoIdentidad());
        $graduadoOriginal->setFechaNacimiento($graduado->getFechaNacimiento());
        $graduadoOriginal->setTelefono($graduado->getTelefono());
        $graduadoOriginal->setEmail($graduado->getEmail());
        $graduadoOriginal->setNacionalidad($graduado->getNacionalidad());
        $graduadoOriginal->setCiudad($graduado->getCiudad());
        $graduadoOriginal->setProvincia($graduado->getProvincia());
        $graduadoOriginal->setCalle($graduado->getCalle());
        $graduadoOriginal->setNumeroCalle($graduado->getNumeroCalle());
        if($graduado -> getPiso() != null){
            $graduadoOriginal->setPiso($graduado->getPiso());
        }
        if($graduado -> getDepto()!= null){
            $graduadoOriginal->setDepto($graduado->getDepto());
        }        
        
        //Imagen
        $graduadoOriginal->setImagenTED($graduado->getImagenTED());

        return $graduadoOriginal;
    }
}