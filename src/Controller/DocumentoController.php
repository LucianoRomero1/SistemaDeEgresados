<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Documentos;
use App\Form\DocumentosType;
use Symfony\Component\HttpFoundation\Request;

class DocumentoController extends AbstractController
{
    /**
     * @Route("/altaDocumentos", name="altaDocumentos")
     */
    public function altaDocumentos(Request $request)
    {
        $documentos = new Documentos();

        $formulario = $this -> createForm(DocumentosType::class, $documentos);
        $formulario -> handleRequest($request);

        if($formulario -> isSubmitted() && $formulario -> isValid()){
            $em = $this -> getDoctrine() -> getManager();
            $em -> persist($documentos);
            $em -> flush();

            $this -> addFlash('info', '¡El documento se cargó correctamente!');
            return $this -> redirectToRoute('verDocumentos');
        }

        return $this -> render('documentos/altaDocumentos.html.twig', [
            'formulario' => $formulario -> createView()
        ]);
    }

     /**
     * @Route("/verDocumentos", name="verDocumentos")
     */
    public function verDocumentos(){
        $em = $this -> getDoctrine() -> getManager();
        $documentos = $em -> getRepository(Documentos::class) -> findAll();

        return $this -> render('documentos/verDocumentos.html.twig',[
            'documentos' => $documentos
        ]);
    }

    /**
     * @Route("/modificarDocumentos/{id}", name="modificarDocumentos")
     */
    public function modificarDocumentos(Request $request, $id){
        $em =  $this -> getDoctrine() -> getManager();
        $documentos = $em -> getRepository(Documentos::class) -> find($id);

        $formulario = $this -> createForm(DocumentosType::class, $documentos);
        $formulario -> handleRequest($request);

        if($formulario -> isSubmitted() && $formulario -> isValid()){
            $em -> flush();
            $this -> addFlash('info', '¡El documento se modificó correctamente!');
            return $this -> redirectToRoute('verdocumentos');
        }

        return $this -> render('documentos/modificarDocumentos.html.twig',[
            'formulario' => $formulario -> createView()
        ]);
    }

    
    /**
     * @Route("/eliminarDocumentos/{id}", name="eliminarDocumentos")
     */
    public function eliminarDocumentos($id){
        $em = $this -> getDoctrine() -> getManager();
        $documentos = $em -> getRepository(Documentos::class) -> find($id);

        $em->remove($documentos);
        $em -> flush();

        $this -> addFlash('info', '¡El documento se eliminó correctamente!');
        return $this -> redirectToRoute('verdocumentos');
        
    }
}
