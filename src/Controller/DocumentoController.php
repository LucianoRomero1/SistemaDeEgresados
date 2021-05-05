<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Documentos;
use App\Form\DocumentosType;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\UserBusqueda;
use App\Form\UserBusquedaType;
use App\Services\ConsultaBD;
use App\Services\ValidacionesAcademicas;

class DocumentoController extends AbstractController
{
    /**
     * @Route("admin/altaDocumentos", name="altaDocumentos")
     */
    public function altaDocumentos(Request $request)
    {
        $documento = new Documentos();
        $validacionesAcademicas = new ValidacionesAcademicas();

        $formulario = $this -> createForm(DocumentosType::class, $documento);
        $formulario -> handleRequest($request);

        if($formulario -> isSubmitted() && $formulario -> isValid() && $validacionesAcademicas -> validarDocumento($documento)){
            $em = $this -> getDoctrine() -> getManager();
            $em -> persist($documento);
            $em -> flush();

            $this -> addFlash('correcto', '¡El documento se cargó correctamente!');
            return $this -> redirectToRoute('verDocumentos');
        }
        else if($validacionesAcademicas -> validarDocumento($documento) == false){
            $this -> addFlash('error', 'Ingrese un tipo de documento válido');
        }

        return $this -> render('documentos/altaDocumentos.html.twig', [
            'formulario' => $formulario -> createView()
        ]);
    }

     /**
     * @Route("admin/verDocumentos", name="verDocumentos")
     */
    public function verDocumentos(Request $request){
        $em = $this -> getDoctrine() -> getManager();
        $consultaBD = new ConsultaBD();

        $form = $this -> createForm(UserBusquedaType::class, new UserBusqueda());
        $form -> handleRequest($request);
        $busqueda = $form ->getData();

        $documentos = $em -> getRepository(Documentos::class)->findBy(array(), array('tipoDocumento' => 'ASC'));

        if($form -> isSubmitted()){
            return $this -> render('documentos/verDocumentos.html.twig', [
                'documentos' => $consultaBD -> buscarDocumentos($busqueda, $em), 'formulario' => $form -> createView()
            ]);
        }
        else{
            return $this -> render('documentos/verDocumentos.html.twig',[
                'documentos' => $documentos,
                'formulario' => $form ->createView()
            ]);
        }
     
    }

    /**
     * @Route("admin/modificarDocumentos/{id}", name="modificarDocumentos")
     */
    public function modificarDocumentos(Request $request, $id){
        $em =  $this -> getDoctrine() -> getManager();
        $validacionesAcademicas = new ValidacionesAcademicas();
        
        $documento = $em -> getRepository(Documentos::class) -> find($id);

        $formulario = $this -> createForm(DocumentosType::class, $documento);
        $formulario -> handleRequest($request);

        if($formulario -> isSubmitted() && $formulario -> isValid() && $validacionesAcademicas -> validarDocumento($documento)){
            $em -> flush();
            $this -> addFlash('correcto', '¡El documento se modificó correctamente!');
            return $this -> redirectToRoute('verDocumentos');
        }
        else if($validacionesAcademicas -> validarDocumento($documento) == false){
            $this -> addFlash('error', 'Ingrese un tipo de documento válido');
        }

        return $this -> render('documentos/modificarDocumentos.html.twig',[
            'formulario' => $formulario -> createView()
        ]);
    }

    
    /**
     * @Route("admin/eliminarDocumentos/{id}", name="eliminarDocumentos")
     */
    public function eliminarDocumentos($id){
        $em = $this -> getDoctrine() -> getManager();
        $documentos = $em -> getRepository(Documentos::class) -> find($id);

        $em->remove($documentos);
        $em -> flush();

        $this -> addFlash('correcto', '¡El documento se eliminó correctamente!');
        return $this -> redirectToRoute('verDocumentos');
        
    }



    
}
