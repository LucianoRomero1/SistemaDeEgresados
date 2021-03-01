<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Titulos;
use App\Form\TitulosType;
use Symfony\Component\HttpFoundation\Request;

class TituloController extends AbstractController
{
    /**
     * @Route("/altaTitulos", name="altaTitulos")
     */
    public function altaTitulos(Request $request)
    {
        $titulos = new Titulos();

        $formulario = $this -> createForm(TitulosType::class, $titulos);
        $formulario -> handleRequest($request);

        if($formulario -> isSubmitted() && $formulario -> isValid()){
            $em = $this -> getDoctrine() -> getManager();
            $em -> persist($titulos);
            $em -> flush();

            $this -> addFlash('info', '¡El título se cargó correctamente!');
            return $this -> redirectToRoute('verTitulos');
        }

        return $this -> render('titulos/altaTitulos.html.twig', [
            'formulario' => $formulario -> createView()
        ]);
    }

     /**
     * @Route("/verTitulos", name="verTitulos")
     */
    public function verTitulos(){
        $em = $this -> getDoctrine() -> getManager();
        $titulos = $em -> getRepository(Titulos::class) -> findAll();

        return $this -> render('titulos/verTitulos.html.twig',[
            'titulos' => $titulos
        ]);
    }

    /**
     * @Route("/modificarTitulos/{id}", name="modificarTitulos")
     */
    public function modificarTitulos(Request $request, $id){
        $em =  $this -> getDoctrine() -> getManager();
        $titulos = $em -> getRepository(Titulos::class) -> find($id);

        $formulario = $this -> createForm(TitulosType::class, $titulos);
        $formulario -> handleRequest($request);

        if($formulario -> isSubmitted() && $formulario -> isValid()){
            $em -> flush();
            $this -> addFlash('info', '¡El título se modificó correctamente!');
            return $this -> redirectToRoute('verTitulos');
        }

        return $this -> render('titulos/modificarTitulos.html.twig',[
            'formulario' => $formulario -> createView()
        ]);
    }

    
    /**
     * @Route("/eliminarTitulos/{id}", name="eliminarTitulos")
     */
    public function eliminarTitulos($id){
        $em = $this -> getDoctrine() -> getManager();
        $titulos = $em -> getRepository(Titulos::class) -> find($id);

        $em->remove($titulos);
        $em -> flush();

        $this -> addFlash('info', '¡El título se eliminó correctamente!');
        return $this -> redirectToRoute('verTitulos');
        
    }
}
