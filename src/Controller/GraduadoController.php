<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\TitulacionesAlcanzadas;
use App\Entity\GraduadoSoporte;
use App\Entity\Graduado;
use App\Entity\TitulacionesAlcanzadasOrig;
use App\Form\GraduadoPersonalesType;
use App\Form\GraduadoPersonalesOrigType;
use App\Form\TitulacionesGraduadoType;
use App\Form\TitulacionesModif;
use App\Form\GraduadoTitulacionesType;
use App\Services\ConsultaBD;
use App\Services\FuncionesGraduado;
use App\Entity\UserBusqueda;
use App\Form\ImagenGraduadoOrigType;
use App\Form\ImagenGraduadoType;
use App\Form\TitulacionesModifType;
use App\Form\UserBusquedaType;

class GraduadoController extends AbstractController
{
    ############### ABM ##################

    /**
     * @Route("admin/datosPersonalesGraduado", name="datosPersonalesGraduado")
     */
    public function datosPersonalesGraduado(Request $request)
    {
        $graduado = new GraduadoSoporte();


        $formulario = $this ->createForm(GraduadoPersonalesType::class, $graduado);
        $formulario -> handleRequest($request);

        if($formulario -> isSubmitted() && $formulario -> isValid()){
            $em = $this -> getDoctrine() -> getManager();
            $em -> persist($graduado);
            $em -> flush();

            return $this -> redirectToRoute('imagenGraduado', ['id' => $graduado->getId()]); //Lo redirijo a la solapa siguiente
        }


        return $this -> render('graduado/datosPersonalesGraduado.html.twig', [
            'formulario' => $formulario -> createView()
        ]);
    }

    /**
     * @Route("admin/imagenGraduado/{id}", name="imagenGraduado")
     */
    public function imagenGraduado(Request $request, $id){
        $em = $this -> getDoctrine() -> getManager();
        $funcionesGraduado = new FuncionesGraduado();
        $graduado = $em -> getRepository(GraduadoSoporte::class) -> find($id);
     
       

        $formulario = $this -> createForm(ImagenGraduadoType::class, $graduado);
        $formulario -> handleRequest($request);

        if($formulario -> isSubmitted() && $formulario -> isValid() && $funcionesGraduado -> cargarImagenGraduado($formulario)){
            
            $em -> persist($graduado);
            $em -> flush();

            return $this -> redirectToRoute('titulacionesGraduado', ['id' => $graduado->getId()]); //Lo redirijo a la solapa siguiente
        }
        return $this->render('graduado/imagenGraduado.html.twig', [
            'formulario' => $formulario->createView(),
        ]);
    }


     /**
     * @Route("admin/titulacionesGraduado/{id}", name="titulacionesGraduado")
     */
    public function titulacionesGraduado(Request $request, $id){
        $em = $this -> getDoctrine() -> getManager();

        $funcionesGraduado = new FuncionesGraduado();
        $titulaciones = new TitulacionesAlcanzadas();
        $graduadoOriginal = new Graduado();
        $graduado = $em -> getRepository(GraduadoSoporte::class) -> find($id);
        
        
        $formulario = $this->createForm(GraduadoTitulacionesType::class, $graduadoOriginal);
        $formulario -> handleRequest($request);

        $formularioTitulacion = $this ->createForm(TitulacionesGraduadoType::class, $titulaciones);
        $formularioTitulacion -> handleRequest($request);

        
        if($formulario -> isSubmitted() && $formulario -> isValid()){
            
            $graduadoOriginal = $funcionesGraduado->copiarGraduado($graduadoOriginal,$graduado);
            $graduadoOriginal -> addTitulacione($titulaciones);         
            $em -> persist($graduadoOriginal);
            $em -> remove($graduado);
            $em -> flush();
            
            $this -> addFlash('correcto', '!El graduado/a se cargó correctamente!');
            return $this -> redirectToRoute('verGraduados');
        }

        return $this -> render('graduado/titulacionesGraduado.html.twig', [
            'formulario' => $formulario -> createView(), 'formularioTitulacion' => $formularioTitulacion -> createView()
        ]);
    }


     /**
     * @Route("admin/agregarTitulacion/{id}", name="agregarTitulacion")
     */
    public function agregarTitulacion(Request $request, $id){
        $em = $this -> getDoctrine() -> getManager();

        
        $graduado = $em -> getRepository(Graduado::class) -> find($id);
        $titulaciones = new TitulacionesAlcanzadas();

        $formulario = $this->createForm(GraduadoTitulacionesType::class, $graduado);
        $formulario -> handleRequest($request);

        $formularioTitulacion = $this ->createForm(TitulacionesGraduadoType::class, $titulaciones);
        $formularioTitulacion -> handleRequest($request);

        if($formulario -> isSubmitted() && $formulario -> isValid()){
            $graduado -> addTitulacione($titulaciones);
            $em -> persist($graduado);
            $em -> flush();
            
            $this -> addFlash('correcto', '¡Se agregó un título nuevo a: '. $graduado->getNombre(). ' '. $graduado->getApellido().' DNI Nº: '. $graduado->getDocumentoIdentidad() .'correctamente!');
            return $this -> redirectToRoute('verTitulacionesGraduado', ['id' => $graduado->getId()]); //Lo redirijo a la solapa siguiente
        }

        return $this -> render('graduado/agregarTitulacion.html.twig', [
            'formulario' => $formulario -> createView(), 'formularioTitulacion' => $formularioTitulacion -> createView(), 'graduado' => $graduado
        ]);
    }


    /**
     * @Route("admin/verGraduados", name="verGraduados")
     */
    public function verGraduados(Request $request)
    {
        $em = $this -> getDoctrine() -> getManager();
        
        $form = $this->createForm(UserBusquedaType::class,new UserBusqueda());
        $form->handleRequest($request);
        $busqueda=$form->getData();

        $consultaBD = new ConsultaBD();

        $graduados = $em -> getRepository(Graduado::class)->findBy(array(), array('id' => 'DESC'));

        if ($form->isSubmitted()){
            return $this->render('graduado/verGraduados.html.twig', [
            'graduados' => $consultaBD->consultaTodos($busqueda, $em),'form' => $form->createView()
        ]);
        }
        else{
            return $this -> render('graduado/verGraduados.html.twig', [
                'graduados' => $graduados,'form' => $form->createView()
            ]);
        }
       
    }

    /**
     * @Route("admin/modificarDatosPersonalesGraduado/{id}", name="modificarDatosPersonalesGraduado")
     */
    public function modificarDatosPersonalesGraduado(Request $request, $id)
    {
        $em = $this -> getDoctrine() -> getManager();
        $graduado = $em -> getRepository(Graduado::class) -> find($id);
        

        $formulario = $this -> createForm(GraduadoPersonalesOrigType::class, $graduado);
        $formulario -> handleRequest($request);

        if($formulario -> isSubmitted() && $formulario -> isValid()){
            $em -> flush();
            $this -> addFlash('correcto', '¡Los datos personales de '. $graduado->getNombre(). ' '. $graduado->getApellido().' DNI Nº: '. $graduado->getDocumentoIdentidad() .' se han modificado correctamente!');
            return $this -> redirectToRoute('verGraduados');
        }
        
        return $this -> render('graduado/modificarDatosPersonalesGraduado.html.twig', [
            'formulario' => $formulario -> createView(), 'graduado' => $graduado
        ]);
        
    }

    /**
     * @Route("admin/verTitulacionesGraduado/{id}", name="verTitulacionesGraduado")
     */
    public function verTitulacionesGraduado($id)
    {
        $em = $this -> getDoctrine() -> getManager();
        $graduado = $em -> getRepository(Graduado::class) -> find($id);

        $titulaciones = $graduado -> getTitulaciones();

        return $this -> render('graduado/verTitulacionesGraduado.html.twig', [
            'titulaciones' => $titulaciones, 'graduado' => $graduado
        ]);
    }


     /**
     * @Route("admin/modificarImagenGraduado/{id}", name="modificarImagenGraduado")
     */
    public function modificarImagenGraduado(Request $request, $id){
        $em = $this -> getDoctrine() -> getManager();
        $graduado = $em -> getRepository(Graduado::class) -> find($id);
        $funcionesGraduado = new FuncionesGraduado();
        $urlImagen = $graduado->getImagenTED();
         
        
        $formulario = $this -> createForm(ImagenGraduadoOrigType::class, $graduado);
        $formulario -> handleRequest($request);

        //ACA NO PONGO EL IS VALID PORQUE AL NO CERRAR EL FORM EN EL TWIG, SI PONGO EL ISVALID NO FUNCA
        if($formulario -> isSubmitted() && $funcionesGraduado -> modificarImagenGraduado($formulario, $urlImagen)){
            $em -> persist($graduado);
            $em -> flush();

            $this -> addFlash('correcto', '¡La imagen TED de '. $graduado->getNombre(). ' '. $graduado->getApellido().' DNI Nº: '. $graduado->getDocumentoIdentidad() .' se modificó correctamente!');
            return $this -> redirectToRoute('verGraduados');
        }

        return $this -> render('graduado/modificarImagenGraduado.html.twig', [
            'formulario' => $formulario -> createView(),
            'imagen' => $urlImagen,
            'graduado' => $graduado
        ]);
    }

     /**
     * @Route("admin/modificarTitulacionesGraduado/{id}/{idGrad}", name="modificarTitulacionesGraduado")
     */
    public function modificarTitulacionesGraduado(Request $request, $id, $idGrad)
    {
        $em = $this -> getDoctrine() -> getManager();
        $titulacion = $em -> getRepository(TitulacionesAlcanzadas::class) -> find($id);
        $graduado = $em -> getRepository(Graduado::class) -> find($idGrad);

        $formulario = $this -> createForm(TitulacionesModifType::class, $titulacion);
        $formulario -> handleRequest($request);

        if($formulario -> isSubmitted() && $formulario -> isValid()){
            $em -> persist($titulacion);
            $em -> flush();

            $this -> addFlash('correcto', '¡Los titulación de: '. $graduado->getNombre(). ' '. $graduado->getApellido().' DNI Nº: '. $graduado->getDocumentoIdentidad() .' se modificó correctamente!');
            return $this -> redirectToRoute('verTitulacionesGraduado', ['id' => $graduado->getId()]);
        }

        return $this -> render('graduado/modificarTitulacionesGraduado.html.twig', [
            'formulario' => $formulario -> createView(), 'graduado' => $graduado
        ]);
    }

    
    /**
     * @Route("/admin/verImagenTED/{id}", name="verImagenTED")
     */
    public function verImagenTED($id)
    {
        $entityManager = $this->getDoctrine()->getManager();

        $graduado= $entityManager->getRepository(Graduado::class)->find($id);

        return $this->redirect("https://intranet.unraf.edu.ar/RegistroDigital/uploads/imagenTED/" . $graduado->getImagenTED());
    }

     /**
     * @Route("/admin/eliminarTitulacion/{id}/{idGrad}", name="eliminarTitulacion")
     */
    public function eliminarTitulacion($id, $idGrad){
        $em = $this -> getDoctrine() -> getManager();

        $titulacion = $em -> getRepository(TitulacionesAlcanzadas::class) -> find($id);
        $graduado = $em -> getRepository(Graduado::class) -> find($idGrad);

        $em -> remove($titulacion);
        $em -> flush();


        $this -> addFlash('correcto', '¡La titulación de '. $graduado->getNombre(). ' '. $graduado->getApellido().' DNI Nº: '. $graduado->getDocumentoIdentidad() .' se eliminó correctamente!');
        return $this -> redirectToRoute('verTitulacionesGraduado', ['id' => $graduado->getId()]);
    }

    /**
     * @Route("/admin/eliminarImagenTED/{id}", name="eliminarImagenTED")
     */
    public function eliminarImagenTED($id){
        $entityManager = $this->getDoctrine()->getManager();

        $graduado = $entityManager->getRepository(Graduado::class)->find($id);

        unlink('uploads/imagenTED/' . $graduado -> getImagenTED());
        $graduado ->setImagenTED(null);
        //Se setea a nulo porque el remove en este caso no sirve, se utiliza para casos como para borrar
        //la entidad o para borrar un objeto
        $entityManager->flush();

        $this -> addFlash('correcto', '¡Los imagen TED de '. $graduado->getNombre(). ' '. $graduado->getApellido().' DNI Nº: '. $graduado->getDocumentoIdentidad() .' se eliminó correctamente!');
        return $this -> redirectToRoute('modificarImagenGraduado', ['id' => $id]);

    }



    /**
     * @Route("admin/eliminarGraduado/{id}", name="eliminarGraduado")
     */
    public function eliminarGraduado($id)
    {
        $em = $this -> getDoctrine() -> getManager();
        $graduado = $em -> getRepository(Graduado::class) -> find($id);

        $em -> remove($graduado);
        $em -> flush();

        $this -> addFlash('correcto', '¡El graduado/a: '. $graduado->getNombre(). ' '. $graduado->getApellido().' DNI Nº: '. $graduado->getDocumentoIdentidad() .' se eliminó correctamente!');
        return $this -> redirectToRoute('verGraduados');

    }


    
   
}
