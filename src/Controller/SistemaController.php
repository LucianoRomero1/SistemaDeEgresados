<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SistemaController extends AbstractController
{
    /**
     * @Route("/sistema", name="sistema")
     */
    public function Home()
    {
        return $this->render('sistema/inicio.html.twig');
    }

    /**
     * @Route("/menuPrincipal", name="menuPrincipal")
     */
    public function menuPrincipal()
    {
        return $this->render('sistema/menuPrincipal.html.twig');
    }

     /**
     * @Route("/datosAcademicos", name="datosAcademicos")
     */
    public function datosAcademicos(){
        return $this->render('sistema/datosAcademicos.html.twig');
    }
}
