<?php

    namespace App\Services;
    
    

class ValidacionesAcademicas {

    public function validarCarrera($carrera){
        if(is_numeric($carrera -> getNombreCarrera())){
            return false;
        }
        return true;
    }

    
    public function validarDocumento($documento){
        if(is_numeric($documento -> getTipoDocumento())){
            
            return false;
        }
        return true;
    }

    public function validarTitulo($titulo){
        if(is_numeric($titulo -> getNombreTitulo())){
            
            return false;
        }
        return true;
    }
}