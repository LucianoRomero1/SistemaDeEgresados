<?php
    
    namespace App\Services;
    

class FuncionesGenerales {
    
    public function getFechActual(){
        $fechaActual=  new \DateTime();
                
        return $fechaActual;
    }
}