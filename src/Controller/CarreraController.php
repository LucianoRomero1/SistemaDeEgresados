<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Carreras;
use App\Form\CarrerasType;

class CarreraController extends AbstractController
{
    /**
     * @Route("/altaCarreras", name="altaCarreras")
     */
    public function altaCarreras(Request $request)
    {
        $carreras = new Carreras();

        $formulario = $this -> createForm(CarrerasType::class, $carreras);
        $formulario -> handleRequest($request);

        if($formulario -> isSubmitted() && $formulario -> isValid()){
            $em = $this -> getDoctrine() -> getManager();
            $em -> persist($carreras);
            $em -> flush();

            $this -> addFlash('info', '¡La carrera se ha creado correctamente!');
            return $this -> redirectToRoute('verCarreras');
        }

        return $this -> render('carreras/altaCarreras.html.twig', [
            'formulario' => $formulario -> createView(),
          
        ]);
    }


    /**
     * @Route("/verCarreras", name="verCarreras")
     */
    public function verCarreras(){
        $em = $this -> getDoctrine() -> getManager();

        $carreras = $em -> getRepository(Carreras::class)->findAll();

        return $this -> render('carreras/verCarreras.html.twig', [
            'carreras' => $carreras
        ]);
    }

        /**
     * @Route("/modificarCarreras/{id}", name="modificarCarreras")
     */
    public function modificarCarreras(Request $request, $id){
        $em = $this -> getDoctrine() -> getManager();
        $carreras = $em -> getRepository(Carreras::class) -> find($id);

        $formulario = $this -> createForm(CarrerasType::class, $carreras);
        $formulario -> handleRequest($request);

        if($formulario -> isSubmitted() && $formulario -> isValid()){
            $em -> flush();
            $this -> addFlash('info', '¡La carrera se ha modificado correctamente!');
            return $this -> redirectToRoute('verCarreras');
        }

        return $this -> render('carreras/modificarCarreras.html.twig', [
            'formulario' => $formulario -> createView()
        ]);
    }

    /**
     * @Route("/eliminarCarreras/{id}", name="eliminarCarreras")
     */
    public function eliminarCarreras($id)
    {
        $manager=$this->getDoctrine()->getManager();
                
        $carreras= $manager->getRepository(Carreras::class)->find($id);
       
        $manager->remove($carreras);
        $manager->flush();
        $this -> addFlash('info', '¡La carrera se ha eliminado correctamente!');
        return $this->redirectToRoute("verCarreras");
        
    }
}
