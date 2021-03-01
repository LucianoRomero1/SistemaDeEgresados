<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Egresado;
use App\Entity\EgresadoSoporte;
use App\Entity\Archivo;
use App\Form\DatosPersonalesType;
use App\Form\DatosPersonalesOrigType;
use App\Form\DatosAcademicosType;
use App\Form\DatosAcademicosOrigType;
use App\Form\DatosAdministrativosType;
use App\Form\DatosAdministrativosOrigType;
use App\Form\ArchivosType;
use App\Form\ArchivosOrigType;
use Symfony\Component\HttpFoundation\Request;

class EgresadoController extends AbstractController
{
    /**
     * @Route("/altaDatosPersonales", name="altaDatosPersonales")
     */
    public function altaDatosPersonales(Request $request)
    {
        $egresado = new EgresadoSoporte();

        $formulario = $this -> createForm(DatosPersonalesType::class, $egresado);
        $formulario -> handleRequest($request);

        if($formulario -> isSubmitted() && $formulario -> isValid() && $this -> validarDatosPersonales($egresado)){
            $em = $this -> getDoctrine() -> getManager();
            $em -> persist($egresado);
            $em -> flush();

            return $this -> redirectToRoute('altaDatosAcademicos', ['id' => $egresado->getId()]); //Lo redirijo a la solapa siguiente
        }

        return $this -> render('egresado/altaDatosPersonales.html.twig', [
            'formulario' => $formulario -> createView(),
            
        ]);
    }

    /**
     * @Route("/altaDatosAcademicos/{id}", name="altaDatosAcademicos")
     */
    public function altaDatosAcademicos(Request $request, $id)
    {
        $em = $this -> getDoctrine() -> getManager();
        $egresado = $em -> getRepository(EgresadoSoporte::class) -> find($id);

        $formulario = $this -> createForm(DatosAcademicosType::class, $egresado);
        $formulario -> handleRequest($request);

        if($formulario -> isSubmitted() && $formulario -> isValid() && $this -> validarFechaEgreso($egresado)){
            $em = $this -> getDoctrine() -> getManager();
            $em -> persist($egresado);
            $em -> flush();

            return $this -> redirectToRoute('altaDatosAdministrativos', ['id' => $egresado->getId()]); //Lo redirijo a la solapa siguiente
        }

        return $this -> render('egresado/altaDatosAcademicos.html.twig', [
            'formulario' => $formulario -> createView()
        ]);
    }

    
    /**
     * @Route("/altaDatosAdministrativos/{id}", name="altaDatosAdministrativos")
     */
    public function altaDatosAdministrativos(Request $request, $id){
        
        $em = $this -> getDoctrine() -> getManager();
        $egresado = $em -> getRepository(EgresadoSoporte::class) -> find($id);

        $formulario = $this -> createForm(DatosAdministrativosType::class, $egresado);
        $formulario -> handleRequest($request);

        if($formulario -> isSubmitted() && $formulario -> isValid() && $this -> validarDatosAdministrativos($egresado)){
            $em = $this -> getDoctrine() -> getManager();
            $em -> persist($egresado);
            $em -> flush();

            
            return $this -> redirectToRoute('altaArchivos', ['id' => $egresado->getId()]);
        }

        return $this -> render('egresado/altaDatosAdministrativos.html.twig', [
            'formulario' => $formulario -> createView()
        ]);
    }


    /**
     * @Route("/altaArchivos/{id}", name="altaArchivos")
     */
    public function altaArchivos(Request $request, $id){
        $em = $this -> getDoctrine() -> getManager();
        $egresado = $em -> getRepository(EgresadoSoporte::class) -> find($id);
        //Esto esta porque necesito usar el mismo egresado que venia de los pasos anteriores

        
        $formulario = $this -> createForm(ArchivosType::class, $egresado);
        $formulario -> handleRequest($request);

        //SUBIR EL PDF ANALITICO
        if($formulario -> isSubmitted() && $this -> validarArchivos($egresado)){
            
            $egresado = $formulario->getData();
            
            if($egresado -> getPdfAnalitico() != null){
                $pdfAnalitico = $formulario->get('pdfAnalitico')->getData();
                $extensionArchivo=$pdfAnalitico->guessExtension();
                
                if ($extensionArchivo == 'pdf'){

                    $nombreArchivo= time().".".$extensionArchivo;
                        
                    $pdfAnalitico->move("public/uploads/pdfsAnalitico/",$nombreArchivo);

                    $egresado->setPdfAnalitico($nombreArchivo);    

                }else{
                    $this -> addFlash('error', 'Sólo se pueden cargar extensiones .pdf en el certificado analítico');
                    return $this->render('egresado/cargaArchivos.html.twig', [
                        'formulario' => $formulario -> createView()
                    ]);
                }

            }

            //Termina envio de PDF
            //Carga de imagenes
            $archivos = $egresado -> getArchivosArray();
            $contador = 0;
            foreach($archivos as $archivo){
                if($archivo != null){

                    $documento = new Archivo();
                    $extensionArchivo = $archivo -> guessExtension();

                    if($extensionArchivo == 'jpg' || $extensionArchivo == 'png' || $extensionArchivo == 'pdf' || $extensionArchivo == 'jpeg' ){

                        $nombreArchivo= time() . $contador .".".$extensionArchivo;
                        $contador++;
                        //$archivo -> move("public/uploads/imagenesDigitales/", $nombreArchivo);

                        $documento -> setNombreArchivo($nombreArchivo);
                        $egresado -> addArchivo($documento);
                        $em -> persist($documento);
                        
                    }
                    else{
                        $this -> addFlash('error', 'Extension inválida en las imágenes, sólo se permiten .jpg, .png, .pdf, .docx, .doc, .jpeg');
                        return $this -> render('egresado/cargaArchivos.html.twig', [
                            'formulario' => $formulario -> createView()
                        ]);
                    }
                }
            }

            $em -> persist($egresado);


            $egresadoOriginal = new Egresado();

            $this->copyEgresado($egresadoOriginal,$egresado);
            
            //print_r($egresadoOriginal->getDni());die;

            $em -> persist($egresadoOriginal);
            $em -> remove($egresado);
            $em -> flush();

           
            $this -> addFlash('info', '¡El egresado se ha registrado correctamente!');
            return $this->redirectToRoute('verEgresados');
        }
        else{
           
            return $this -> render('egresado/cargaArchivos.html.twig', [
                'formulario' => $formulario -> createView()
            ]);
        }

        return $this -> render('egresado/cargaArchivos.html.twig', [
            'formulario' => $formulario -> createView()
        ]);
    }




    /**
     * @Route("/verEgresados", name="verEgresados")
     */
    public function verEgresados(){
        $em = $this -> getDoctrine() -> getManager();

        $egresados = $em -> getRepository(Egresado::class)->findBy(array(), array('apellido' => 'ASC'));

        return $this -> render('egresado/verEgresados.html.twig', [
            'egresados' => $egresados
        ]);
    }
    
    
    /**
     * @Route("/modificarDatosPersonales/{id}", name="modificarDatosPersonales")
     */
    public function modificarDatosPersonales(Request $request, $id){
        $em = $this -> getDoctrine() -> getManager();
        $egresado = $em -> getRepository(Egresado::class) -> find($id);

        $formulario = $this -> createForm(DatosPersonalesOrigType::class, $egresado);
        $formulario -> handleRequest($request);

        if($formulario -> isSubmitted() && $formulario -> isValid() && $this -> validarDatosPersonales($egresado)){
            $em -> flush();
            $this -> addFlash('info', '¡Los datos personales se han modificado correctamente!');
            return $this -> redirectToRoute('verEgresados');
        }

        return $this -> render('egresado/modificarDatosPersonales.html.twig', [
            'formulario' => $formulario -> createView()
        ]);
    }

    
    /**
     * @Route("/modificarDatosAcademicos/{id}", name="modificarDatosAcademicos")
     */
    public function modificarDatosAcademicos(Request $request, $id){
        $em = $this -> getDoctrine() -> getManager();
        $egresados = $em -> getRepository(Egresado::class) -> find($id);

        $formulario = $this -> createForm(DatosAcademicosOrigType::class, $egresados);
        $formulario -> handleRequest($request);

        if($formulario -> isSubmitted() && $formulario -> isValid()){
            $em -> flush();
            $this -> addFlash('info', '¡Los datos académicos se han modificado correctamente!');
            return $this -> redirectToRoute('verEgresados');
        }

        return $this -> render('egresado/modificarDatosAcademicos.html.twig', [
            'formulario' => $formulario -> createView()
        ]);
    }

    /**
     * @Route("/modificarDatosAdministrativos/{id}", name="modificarDatosAdministrativos")
     */
    public function modificarDatosAdministrativos(Request $request, $id){
        $em = $this -> getDoctrine() -> getManager();
        $egresados = $em -> getRepository(Egresado::class) -> find($id);

        $formulario = $this -> createForm(DatosAdministrativosOrigType::class, $egresados);
        $formulario -> handleRequest($request);

        if($formulario -> isSubmitted() && $formulario -> isValid()){
            $em -> flush();
            $this -> addFlash('info', '¡Los datos administrativos se han modificado correctamente!');
            return $this -> redirectToRoute('verEgresados');
        }

        return $this -> render('egresado/modificarDatosAdministrativos.html.twig', [
            'formulario' => $formulario -> createView()
        ]);
    }
    
     /**
     * @Route("/modificarArchivos/{id}", name="modificarArchivos")
     */
    public function modificarArchivos($id , Request $request){
        $em = $this -> getDoctrine() -> getManager();
        $egresado = $em -> getRepository(Egresado::class) -> find($id);

        
        $urlPdf = $egresado->getPdfAnalitico();    
        

        $formulario = $this -> createForm(ArchivosOrigType::class, $egresado);
        $formulario -> handleRequest($request);

        $archivos = $egresado -> getArchivosArray();
        $archivosEgresado = $egresado -> getArchivos();

        //SUBIR EL PDF ANALITICO
        if($formulario -> isSubmitted() && $this -> validarArchivos($egresado)){

            $egresado = $formulario->getData();
            if ($egresado->getPdfAnalitico()!=null){

                $pdfAnalitico = $formulario->get('pdfAnalitico')->getData();
            
                $extensionArchivo=$pdfAnalitico->guessExtension();
                
                if ($extensionArchivo == 'pdf'){
                    $nombreArchivo= time().".".$extensionArchivo;
                        
                    $pdfAnalitico->move("public/uploads/pdfsAnalitico/",$nombreArchivo);

                    $egresado->setPdfAnalitico($nombreArchivo);
                    
                }else{
                    $this -> addFlash('error', 'Sólo se pueden cargar extensiones .pdf en el certificado analítico');
                    return $this->render('egresado/modificarArchivos.html.twig', [
                        'formulario' => $formulario->createView(),
                        'pdf' => $egresado -> getPdfAnalitico()
                    ]);
                }

            }else{
                //Si no se carga nada, cargo de nuevo el mismo icono que estaba antes.
                $egresado->setPdfAnalitico($urlPdf);
            }
            //ACA TERMINA LA MODIFICACION DE PDF
            //ARRANCA LA DE IMAGENES
        
            $contador = 0; //ES PARA QUE NO SE COPIEN LOS NOMBRES
            foreach($archivos as $archivo){
                if($archivo != null){
                    $documento = new Archivo();
                    $extensionArchivo = $archivo -> guessExtension();

                    if($extensionArchivo == 'jpg' || $extensionArchivo == 'png' || $extensionArchivo == 'pdf' || $extensionArchivo == 'jpeg' ){

                        $nombreArchivo= time() . $contador .".".$extensionArchivo;
                        $contador++;
                        $archivo -> move("public/uploads/imagenesDigitales/", $nombreArchivo);

                        $documento -> setNombreArchivo($nombreArchivo);
                        $egresado -> addArchivo($documento);
                        $em -> persist($documento);
                    }
                    else{
                        $this -> addFlash('error', 'Extension inválida en las imágenes, sólo se permiten .jpg, .png, .pdf, .docx, .doc, .jpeg');
                        return $this -> render('egresado/modificarArchivos.html.twig', [
                            'formulario' => $formulario -> createView(),
                            'pdf' => $egresado -> getPdfAnalitico(),
                            'egresado' => $egresado,
                            'imagenes' => $archivosEgresado
                        ]);
                    }
                }
            }
            $this -> addFlash('info', '¡Los archivos se modificaron correctamente!');

            $em -> persist($egresado);
            $em -> flush();

            return $this -> redirectToRoute('verEgresados');
        }
        else{
                
            return $this -> render('egresado/modificarArchivos.html.twig', [
                'formulario' => $formulario -> createView(),
                'pdf' => $egresado -> getPdfAnalitico(),
                'egresado' => $egresado,
                'imagenes' => $archivosEgresado
            ]);
        }
        
        return $this -> render('egresado/modificarArchivos.html.twig', [
            'formulario' => $formulario -> createView(),
            'pdf' => $egresado -> getPdfAnalitico(),
            'egresado' => $egresado,
            'imagenes' => $archivosEgresado
        ]);
    }
   

    /**
     * @Route("/eliminarEgresados/{id}", name="eliminarEgresados")
     */
    public function eliminarEgresados($id)
    {
        $manager=$this->getDoctrine()->getManager();
                
        $egresados= $manager->getRepository(Egresado::class)->find($id);
       
        $manager->remove($egresados);
        $manager->flush();
        $this -> addFlash('info', '¡El egresado se ha eliminado correctamente!');
        return $this->redirectToRoute("verEgresados");
    }

 
    public function validarArchivos($egresado){
        $archivos = $egresado -> getArchivosArray();
        $archivosEgresado = $egresado -> getArchivos();
        $total = count($archivos) + count($archivosEgresado);
        if($total <= 5){
            return true;
        }
        else{
            $this -> addFlash('error', 'Máximo 5 imágenes');
            return false;
        }
    }

    public function validarDatosPersonales($egresado){

        //Googlear REGEX para saber que estoy haciendo
        //Validar apellido
        $apellido = $egresado -> getApellido();
        $validarApellido = '/^[A-Za-zäÄëËïÏöÖüÜáéíóúáéíóúÁÉÍÓÚÂÊÎÔÛâêîôûàèìòùÀÈÌÒÙÑñ .]{2,149}$/';
        if(!preg_match($validarApellido, $apellido)){
            $this -> addFlash('error', 'Ingrese un apellido válido');
            return false;
        }
        
        
        //Validar nombre
        $nombre = $egresado -> getNombre();
        $validarNombre = '/^[A-Za-zäÄëËïÏöÖüÜáéíóúáéíóúÁÉÍÓÚÂÊÎÔÛâêîôûàèìòùÀÈÌÒÙÑñ .]{2,149}$/';
        if(!preg_match($validarNombre, $nombre)){
            $this -> addFlash('error', 'Ingrese un nombre válido');
            return false;
        }

        //Validar DNI
        $dni = $egresado -> getDni();
        $validarDni = '/^[0-9]{7,8}$/' ;
        if(!preg_match($validarDni, $dni)){
            $this -> addFlash('error', 'Ingrese un DNI válido');
            return false;
        }

        //Validar año de la Fecha
        $fecha = $egresado -> getFechaNacimiento();
        if($fecha != null){
            $anio = $fecha->format('Y');
            if($anio < 2010 || $anio >= 2060){
                $this -> addFlash('error', 'No se permiten años menores a 2010 o superiores a 2060');
                return false;
            }
        }

        //Validar teléfono
        $telefono = $egresado -> getTelefono();
        $validarTelefono = '/^(?:(?:00)?549?)?0?(?:11|[2368]\d)(?:(?=\d{0,2}15)\d{2})??\d{8}$/'; 
        if(!preg_match($validarTelefono, $telefono)){
            $this -> addFlash('error', 'Ingrese un teléfono valido y sólo numeros');
            return false;
        }

        //Validar ciudad
        $ciudad = $egresado -> getCiudad();
        $validarCiudad = '/^[A-Za-zäÄëËïÏöÖüÜáéíóúáéíóúÁÉÍÓÚÂÊÎÔÛâêîôûàèìòùÀÈÌÒÙÑñ .]{4,149}$/';
        if(!preg_match($validarCiudad, $ciudad)){
            $this -> addFlash('error', 'Ingrese una ciudad con nombre válido');
            return false;
        }

        //Validar provincia
        $provincia = $egresado -> getProvincia();
        $validarProvincia = '/^[A-Za-zäÄëËïÏöÖüÜáéíóúáéíóúÁÉÍÓÚÂÊÎÔÛâêîôûàèìòùÀÈÌÒÙÑñ .]{4,149}$/';
        if(!preg_match($validarProvincia, $provincia)){
            $this -> addFlash('error', 'Ingrese una provincia con nombre válido');
            return false;
        }

        //Validar Calle
        $calle = $egresado -> getCalle();
        $validarCalle = '/^[A-Za-zäÄëËïÏöÖüÜáéíóúáéíóúÁÉÍÓÚÂÊÎÔÛâêîôûàèìòùÀÈÌÒÙÑñ .]{4,149}$/';
        if(!preg_match($validarCalle, $calle)){
            $this -> addFlash('error', 'Ingrese un domicilio válido ');
            return false;
        }

        //Validar Nro Domicilio
        $nroDomicilio = $egresado -> getNroDomicilio();
        $validarNro = '/^[0-9]{1,5}$/' ;
        if(!preg_match($validarNro, $nroDomicilio)){
            $this -> addFlash('error', 'Ingrese un número de domicilio válido');
            return false;
        }

        //Validar Piso
        $piso = $egresado -> getpiso();
        if($piso != null){
            $validarPiso = '/^[0-9]{1,2}$/' ;
            if(!preg_match($validarPiso, $piso || $piso != null)){
                $this -> addFlash('error', 'Ingrese un número de piso válido');
                return false;
            }
        }


        //Validar Depto
        $depto = $egresado -> getdepto();
        if($depto != null){
            $validarDepto = '/^[0-9]{1,2}||[A-Za-z]{1,2}$/' ;
            if(!preg_match($validarDepto, $depto)){
                $this -> addFlash('error', 'Ingrese un departamento válido');
                return false;
            }
        }
    
        return true;
    }

    public function validarFechaEgreso($egresado){
        $fecha = $egresado -> getFechaNacimiento();
        if($fecha != null){
            $anio = $fecha->format('Y');
            if($anio < 2010 || $anio >= 2060){
                $this -> addFlash('error', 'No se permiten años menores a 2010 o superiores a 2060');
                return false;
            }
        }
    }

    public function validarDatosAdministrativos($egresado){
        $nroME = $egresado->getNroResolucionME();
        $nroExpediente = $egresado->getNroExpediente();
        $nroRectoral = $egresado->getNroResolucionRectoral();
        $nroDiploma = $egresado->getNroDiploma();
        $nroAnalitico = $egresado->getNroAnalitico();
        $nroRevalida = $egresado->getNroRevalida();

        if($nroME <= 0 || $nroExpediente <= 0 || $nroRectoral <= 0 || $nroDiploma <= 0 || $nroAnalitico <= 0 || $nroRevalida <= 0){
            $this -> addFlash('error', 'No se permiten numeros negativos o 0 en esta sección');
            return false;
        }

        $fecha = $egresado->getFechaEntrega();
        if($fecha != null){
            $anio = $fecha->format('Y');
            if($anio < 2010 || $anio >= 2060){
                $this -> addFlash('error', 'No se permiten años menores a 2010 o superiores a 2060');
                return false;
            }
        }
    }

    //Copiar a Pata la entidad PORQUE NO ME DEJA DE OTRA FORMA SINO
    public function copyEgresado($egresadoOriginal, $egresado){

        $egresadoOriginal->setApellido($egresado->getApellido());
        $egresadoOriginal->setNombre($egresado->getNombre());
        $egresadoOriginal->setDni($egresado->getDni());
        $egresadoOriginal->setFechaNacimiento($egresado->getFechaNacimiento());
        $egresadoOriginal->setTelefono($egresado->getTelefono());
        $egresadoOriginal->setEmail($egresado->getEmail());
        $egresadoOriginal->setNacionalidad($egresado->getNacionalidad());
        $egresadoOriginal->setCiudad($egresado->getCiudad());
        $egresadoOriginal->setProvincia($egresado->getProvincia());
        $egresadoOriginal->setCalle($egresado->getCalle());
        $egresadoOriginal->setNroDomicilio($egresado->getNroDomicilio());
        if($egresado -> getPiso() != null){
            $egresadoOriginal->setPiso($egresado->getPiso());
        }
        if($egresado -> getDepto()!= null){
            $egresadoOriginal->setDepto($egresado->getDepto());
        }    
        $egresadoOriginal->setDenominacionCarrera($egresado->getDenominacionCarrera());
        $egresadoOriginal->setTituloOtorgado($egresado->getTituloOtorgado());
        $egresadoOriginal->setDocumentoEmitido($egresado->getDocumentoEmitido());
        $egresadoOriginal->setFechaEgreso($egresado->getFechaEgreso());
        $egresadoOriginal->setNroResolucionME($egresado->getNroResolucionME());
        $egresadoOriginal->setNroExpediente($egresado->getNroExpediente());
        $egresadoOriginal->setNroResolucionRectoral($egresado->getNroResolucionRectoral());
        $egresadoOriginal->setNroDiploma($egresado->getNroDiploma());
        $egresadoOriginal->setNroAnalitico($egresado->getNroAnalitico());
        $egresadoOriginal->setNroRevalida($egresado->getNroRevalida());
        $egresadoOriginal->setFechaEntrega($egresado->getFechaEntrega());
        $egresadoOriginal->setPdfAnalitico($egresado->getPdfAnalitico());
        

        //Tengo que hacer esto de nuevo como cuando los doy de alta por el motivo que tengo que recorrer todos los archivos, sino 
        //No funciona 
        //Tengo que comentar la linea de MOVE en el alta porque sino los estaria moviendo 2 veces.
        $archivos = $egresado -> getArchivosArray();
        $contador = 0;
        $em = $this -> getDoctrine() -> getManager();
        foreach($archivos as $archivo){
            if($archivo != null){

                $documento = new Archivo();
                $extensionArchivo = $archivo -> guessExtension();

                if($extensionArchivo == 'jpg' || $extensionArchivo == 'png' || $extensionArchivo == 'pdf' || $extensionArchivo == 'jpeg' ){

                    $nombreArchivo= time() . $contador .".".$extensionArchivo;
                    $contador++;
                    $archivo -> move("public/uploads/imagenesDigitales/", $nombreArchivo);

                    $documento -> setNombreArchivo($nombreArchivo);
                    $egresadoOriginal -> addArchivo($documento);
                    $em -> persist($documento);
                    
                }
            }
        }
        return $egresadoOriginal;
    }
    
    
       
}
