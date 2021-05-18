<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Titulos;
use App\Form\TitulosType;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\UserBusqueda;
use App\Form\UserBusquedaType;
use App\Services\ConsultaBD;
use App\Repository\TitulosRepository;

class TituloController extends AbstractController
{
    /**
     * @Route("admin/altaTitulos", name="altaTitulos")
     */
    public function altaTitulos(Request $request, TitulosRepository $titRepo)
    {
        $titulo = new Titulos();
        

        $formulario = $this -> createForm(TitulosType::class, $titulo);
        $formulario -> handleRequest($request);

        if($formulario -> isSubmitted() && $formulario -> isValid() && $titRepo -> validarTitulo($titulo)){
            $em = $this -> getDoctrine() -> getManager();
            $em -> persist($titulo);
            $em -> flush();

            $this -> addFlash('correcto', '¡El título se cargó correctamente!');
            return $this -> redirectToRoute('verTitulos');
        }
        else if($titRepo -> validarTitulo($titulo) == false){
            $this -> addFlash('error', 'Ingrese un nombre de título válido');
        }

        return $this -> render('titulos/altaTitulos.html.twig', [
            'formulario' => $formulario -> createView()
        ]);
    }

     /**
     * @Route("admin/verTitulos", name="verTitulos")
     */
    public function verTitulos(Request $request){
        $em = $this -> getDoctrine() -> getManager();
        $consultaBD = new ConsultaBD();

        $form = $this -> createForm(UserBusquedaType::class, new UserBusqueda());
        $form -> handleRequest($request);
        $busqueda = $form ->getData();

        $titulos = $em -> getRepository(Titulos::class)->findBy(array(), array('nombreTitulo' => 'ASC'));


        if($form -> isSubmitted()){
            return $this -> render('titulos/verTitulos.html.twig', [
                'titulos' => $consultaBD -> buscarTitulos($busqueda, $em), 'formulario' => $form -> createView()
            ]);
        }
        else{
            return $this -> render('titulos/verTitulos.html.twig',[
                'titulos' => $titulos,
                'formulario' => $form -> createView()
            ]);
        }
     
    }

    /**
     * @Route("admin/modificarTitulos/{id}", name="modificarTitulos")
     */
    public function modificarTitulos(Request $request, $id, TitulosRepository $titRepo){
        $em =  $this -> getDoctrine() -> getManager();
        
        $titulo = $em -> getRepository(Titulos::class) -> find($id);

        $formulario = $this -> createForm(TitulosType::class, $titulo);
        $formulario -> handleRequest($request);

        if($formulario -> isSubmitted() && $formulario -> isValid() && $titRepo -> validarTitulo($titulo)){
            $em -> flush();
            $this -> addFlash('correcto', '¡El título ' . $titulo->getNombreTitulo() . ' se modificó correctamente!');
            return $this -> redirectToRoute('verTitulos');
        }
        else if($titRepo -> validarTitulo($titulo) == false){
            $this -> addFlash('error', 'Ingrese un nombre de título válido');
        }

        return $this -> render('titulos/modificarTitulos.html.twig',[
            'formulario' => $formulario -> createView()
        ]);
    }

    
    /**
     * @Route("admin/eliminarTitulos/{id}", name="eliminarTitulos")
     */
    public function eliminarTitulos($id){
        $em = $this -> getDoctrine() -> getManager();
        $titulos = $em -> getRepository(Titulos::class) -> find($id);

        $em->remove($titulos);
        $em -> flush();

        $this -> addFlash('correcto', '¡El título se eliminó correctamente!');
        return $this -> redirectToRoute('verTitulos');
        
    }




}
