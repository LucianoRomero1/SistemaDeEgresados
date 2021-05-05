<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\EgresadoSoporte;
use App\Entity\GraduadoSoporte;
use App\Services\ConsultaBD;
use App\Services\FuncionesGenerales;


class SistemaController extends AbstractController
{
    /**
     * @Route("/user/menuPrincipal", name="menuPrincipal")
     */
    public function menuPrincipal()
    {
        $em = $this->getDoctrine()->getManager();
        $consultaBD = new ConsultaBD();
        $funcionesGenerales = new FuncionesGenerales();
        $usuario = $this->getUser();
        $usuario->setUltimoAcceso($funcionesGenerales->getFechActual());

        //Esto lo hago porque cuando esta cargando una titulacion de un egresado o graduado y toca el boton de HOME, que borre el soporte que se 
        //estuvo creando para evitar sobrecargas
        $egresadosSoporte = $em->getRepository(EgresadoSoporte::class)->findAll();
        if($egresadosSoporte != null){
            foreach($egresadosSoporte as $egresadoSoporte){
                $em -> remove($egresadoSoporte);
            }
        }
        $graduadoSoporte = $em->getRepository(GraduadoSoporte::class)->findAll();
        if($graduadoSoporte != null){
            foreach($graduadoSoporte as $egresadoSoporte){
                $em -> remove($egresadoSoporte);
            }
        }
        
        $em -> flush();
        return $this->render('sistema/menuPrincipal.html.twig',
            [
                'egresados' => $consultaBD->getUltimosEgresados($em)
            ]
        );

    }

     /**
     * @Route("/admin/datosAcademicos", name="datosAcademicos")
     */
    public function datosAcademicos(){
        return $this->render('sistema/datosAcademicos.html.twig');
    }

 

   

   
}
