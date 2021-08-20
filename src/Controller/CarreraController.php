<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Carreras;
use App\Form\CarrerasType;
use App\Entity\UserBusqueda;
use App\Form\UserBusquedaType;
use App\Services\ConsultaBD;

use App\Repository\CarrerasRepository;

class CarreraController extends AbstractController
{
    /**
     * @Route("/admin/altaCarreras", name="altaCarreras")
     */
    public function altaCarreras(Request $request, CarrerasRepository $carreraRepo)
    {
        $carrera = new Carreras();

        $formulario = $this -> createForm(CarrerasType::class, $carrera);
        $formulario -> handleRequest($request);

        if($formulario -> isSubmitted() && $formulario -> isValid() && $carreraRepo -> validarCarrera($carrera)){
            $em = $this -> getDoctrine() -> getManager();
            $em -> persist($carrera);
            $em -> flush();

            $this -> addFlash('correcto', '¡La carrera se ha creado correctamente!');
            return $this -> redirectToRoute('verCarreras');
        }
        else if($carreraRepo -> validarCarrera($carrera) == false){
            $this -> addFlash('error', 'Ingrese un nombre de carrera válido');
        }

        return $this -> render('carreras/altaCarreras.html.twig', [
            'formulario' => $formulario -> createView(),
          
        ]);
    }


    /**
     * @Route("/admin/verCarreras", name="verCarreras")
     */
    public function verCarreras(Request $request){
        $em = $this -> getDoctrine() -> getManager();
        $consultaBD = new ConsultaBD();

        $form = $this -> createForm(UserBusquedaType::class, new UserBusqueda());
        $form -> handleRequest($request);
        $busqueda = $form ->getData();

        $carreras = $em -> getRepository(Carreras::class)->findBy(array(), array('nombreCarrera' => 'ASC'));

        if($form -> isSubmitted()){
            return $this -> render('carreras/verCarreras.html.twig', [
                'carreras' => $consultaBD -> buscarCarreras($busqueda, $em), 'formulario' => $form -> createView()
            ]);
        }
        else{   
            return $this -> render('carreras/verCarreras.html.twig', [
                'carreras' => $carreras,
                'formulario' => $form -> createView()
            ]);
        }

    }

        /**
     * @Route("/admin/modificarCarreras/{id}", name="modificarCarreras")
     */
    public function modificarCarreras(Request $request, $id, CarrerasRepository $carreraRepo){
        $em = $this -> getDoctrine() -> getManager();
        
        
        $carrera = $em -> getRepository(Carreras::class) -> find($id);
        

        $formulario = $this -> createForm(CarrerasType::class, $carrera);
        $formulario -> handleRequest($request);
        
        if($formulario -> isSubmitted() && $formulario -> isValid() && $carreraRepo -> validarCarrera($carrera)){
            $em -> flush();
            $this -> addFlash('correcto', '¡La carrera se ha modificado correctamente!');
            return $this -> redirectToRoute('verCarreras');
        }
        else if($carreraRepo -> validarCarrera($carrera) == false){
            $this -> addFlash('error', 'Ingrese un nombre de carrera válido');
        }

        return $this -> render('carreras/modificarCarreras.html.twig', [
            'formulario' => $formulario -> createView()
        ]);
    }

    /**
     * @Route("/admin/eliminarCarreras/{id}", name="eliminarCarreras")
     */
    public function eliminarCarreras($id)
    {
        $manager=$this->getDoctrine()->getManager();
                
        $carreras= $manager->getRepository(Carreras::class)->find($id);
       
        $manager->remove($carreras);
        $manager->flush();
        $this -> addFlash('correcto', '¡La carrera se ha eliminado correctamente!');
        return $this->redirectToRoute("verCarreras");
        
    }

  


}
