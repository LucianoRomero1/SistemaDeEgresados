<?php
    namespace App\Services;
    
    use App\Entity\UserBusqueda;
    
    

class ConsultaBD{
    public function consultaTodos(UserBusqueda $busqueda, $manager){
        
        $query = $manager->createQuery(
        "SELECT u
        FROM App\Entity\Graduado u
        WHERE u.apellido LIKE :apellido
        ORDER BY u.id DESC
        "
        )
        ->setParameter('apellido',$busqueda->getBuscar().'%');
        
        
        //Límite de resultados..
        $query->setMaxResults(100);
        
        //Retorna busqueda de la compra..
        return $query->getResult();
    }

    #################### Para la entidad CARRERAS
    public function buscarCarreras(UserBusqueda $busqueda, $em){
        

        $query = $em->createQuery(
            "SELECT c
            FROM App\Entity\Carreras c
            WHERE c.nombreCarrera LIKE :nombreCarrera
            ORDER BY c.id ASC
            "
            )->setParameter('nombreCarrera','%'. $busqueda->getBuscar().'%');
            
            
            //Límite de resultados..
            $query->setMaxResults(100);
            
            //Retorna busqueda de la compra..
            return $query->getResult();
    }

    #################### Para la entidad DOCUMENTOS
    public function buscarDocumentos(UserBusqueda $busqueda, $em){
        

        $query = $em->createQuery(
            "SELECT d
            FROM App\Entity\Documentos d
            WHERE d.tipoDocumento LIKE :tipoDocumento
            ORDER BY d.id ASC
            "
            )->setParameter('tipoDocumento','%'. $busqueda->getBuscar().'%');
            
            
            //Límite de resultados..
            $query->setMaxResults(100);
            
            //Retorna busqueda de la compra..
            return $query->getResult();
    }

    #################### Para la entidad TITULOS
    public function buscarTitulos(UserBusqueda $busqueda, $em){
        

        $query = $em->createQuery(
            "SELECT t
            FROM App\Entity\Titulos t
            WHERE t.nombreTitulo LIKE :nombreTitulo
            ORDER BY t.id ASC
            "
            )->setParameter('nombreTitulo','%'. $busqueda->getBuscar().'%');
            
            
            //Límite de resultados..
            $query->setMaxResults(100);
            
            //Retorna busqueda de la compra..
            return $query->getResult();
    }

    #################### Para el menu principal 
    public function getUltimosEgresados($em){

        $query = $em->createQuery(
            "SELECT e FROM App\Entity\Egresado e ORDER BY e.id DESC"
        )->setMaxResults(6);


        return $query->getResult();
    }

    #################### Para el menu principal 
    public function getUltimosGraduados($em){

        $query = $em->createQuery(
            "SELECT e FROM App\Entity\Graduado e ORDER BY e.id DESC"
        )->setMaxResults(6);


        return $query->getResult();
    }


}