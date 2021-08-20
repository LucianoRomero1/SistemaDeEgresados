<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Egresado;
use App\Entity\EgresadoSoporte;
use App\Entity\Archivo;
use App\Entity\Titulos;
use App\Form\DatosPersonalesType;
use App\Form\DatosPersonalesOrigType;
use App\Form\DatosAcademicosType;
use App\Form\DatosAcademicosOrigType;
use App\Form\DatosAdministrativosType;
use App\Form\DatosAdministrativosOrigType;
use App\Form\ArchivosType;
use App\Form\ArchivosOrigType;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\UserBusqueda;
use App\Form\UserBusquedaType;
use Dompdf\Dompdf;
use Dompdf\Options;
use App\Services\FuncionesEgresado;

class EgresadoController extends AbstractController
{

    ########### EMPIEZA ABM ########### 

    /**
     * @Route("/admin/altaDatosPersonales", name="altaDatosPersonales")
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
     * @Route("/admin/altaDatosAcademicos/{id}", name="altaDatosAcademicos")
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
     * @Route("/admin/altaDatosAdministrativos/{id}", name="altaDatosAdministrativos")
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
     * @Route("/admin/altaArchivos/{id}", name="altaArchivos")
     */
    public function altaArchivos(Request $request, $id){
        $em = $this -> getDoctrine() -> getManager();
        $funcionesEgresado = new FuncionesEgresado();
        $egresado = $em -> getRepository(EgresadoSoporte::class) -> find($id);
        //Esto esta porque necesito usar el mismo egresado que venia de los pasos anteriores

        
        $formulario = $this -> createForm(ArchivosType::class, $egresado);
        $formulario -> handleRequest($request);

        if($formulario -> isSubmitted() && $this -> validarArchivos($egresado) && $funcionesEgresado ->cargarPdf($formulario) && $funcionesEgresado ->cargarArchivos($egresado, $em)){
            
            $em -> persist($egresado);

            $egresadoOriginal = new Egresado();

            $this->copyEgresado($egresadoOriginal,$egresado);
            $egresadoOriginal = $this -> sumarLibroFolio($egresadoOriginal);


            $em -> persist($egresadoOriginal);
            $em -> remove($egresado);
            $em -> flush();

           
            $this -> addFlash('correcto', '¡La titulación del egresado se ha registrado correctamente!');
            return $this->redirectToRoute('verEgresados');
        }
        else if($funcionesEgresado ->cargarPdf($formulario) == false){
            $this -> addFlash('error', 'Sólo se pueden cargar extensiones .pdf en el certificado analítico');
            return $this->render('egresado/cargaArchivos.html.twig', [
                'formulario' => $formulario -> createView()
            ]);
        }
        else if($funcionesEgresado ->cargarArchivos($egresado, $em) == false){
            $this -> addFlash('error', 'Sólo se pueden cargar extensiones .pdf, .png, .jpg, .jpeg en las imagenes');
            return $this->render('egresado/cargaArchivos.html.twig', [
                'formulario' => $formulario -> createView()
            ]);
        }
        return $this -> render('egresado/cargaArchivos.html.twig', [
            'formulario' => $formulario -> createView()
        ]);
    }


    /**
     * @Route("/admin/verEgresados", name="verEgresados")
     */
    public function verEgresados(Request $request){
        $em = $this -> getDoctrine() -> getManager();

             
        $form = $this->createForm(UserBusquedaType::class,new UserBusqueda());
        $form->handleRequest($request);
        $busqueda=$form->getData();

        $egresados = $em -> getRepository(Egresado::class)->findBy(array(), array('id' => 'DESC'));

        //Esto es para el buscador
        if ($form->isSubmitted()){
            return $this->render('egresado/verEgresados.html.twig', ['egresados' => $this->consultaTodos($busqueda),'formulario' => $form->createView()]);
        }
        else{
            return $this -> render('egresado/verEgresados.html.twig', [
                'egresados' => $egresados, 'formulario' => $form->createView()
            ]);
        }
        


        ############# ESTE ES CON EL DATA TABLE #####################
        //return $this -> render('egresado/verEgresadosTest.html.twig', ['egresados' => $egresados, 'formulario' => $form->createView()]);
        
        
    }
    

    /**
     * @Route("/admin/modificarDatosPersonales/{id}", name="modificarDatosPersonales")
     */
    public function modificarDatosPersonales(Request $request, $id){
        $em = $this -> getDoctrine() -> getManager();
        $egresado = $em -> getRepository(Egresado::class) -> find($id);

        $formulario = $this -> createForm(DatosPersonalesOrigType::class, $egresado);
        $formulario -> handleRequest($request);

        if($formulario -> isSubmitted() && $formulario -> isValid() && $this -> validarDatosPersonales($egresado)){
            $em -> flush();
            $this -> addFlash('correcto', '¡Los datos personales de '. $egresado->getNombre(). ' '. $egresado->getApellido().' DNI Nº: '. $egresado->getDni() .' se han modificado correctamente!');
            return $this -> redirectToRoute('verEgresados');
        }

        return $this -> render('egresado/modificarDatosPersonales.html.twig', [
            'formulario' => $formulario -> createView(),
            'egresado' => $egresado
        ]);
    }

    
    /**
     * @Route("/admin/modificarDatosAcademicos/{id}", name="modificarDatosAcademicos")
     */
    public function modificarDatosAcademicos(Request $request, $id){
        $em = $this -> getDoctrine() -> getManager();
        $egresado = $em -> getRepository(Egresado::class) -> find($id);

        $formulario = $this -> createForm(DatosAcademicosOrigType::class, $egresado);
        $formulario -> handleRequest($request);

        if($formulario -> isSubmitted() && $formulario -> isValid()){
            $em -> flush();
            $this -> addFlash('correcto', '¡Los datos académicos de ' . $egresado->getNombre(). ' '. $egresado->getApellido().' DNI Nº: '. $egresado->getDni() . ' se han modificado correctamente!');
            return $this -> redirectToRoute('verEgresados');
        }

        return $this -> render('egresado/modificarDatosAcademicos.html.twig', [
            'formulario' => $formulario -> createView(),
            'egresado' => $egresado
        ]);
    }

    /**
     * @Route("/admin/modificarDatosAdministrativos/{id}", name="modificarDatosAdministrativos")
     */
    public function modificarDatosAdministrativos(Request $request, $id){
        $em = $this -> getDoctrine() -> getManager();
        $egresado = $em -> getRepository(Egresado::class) -> find($id);

        $formulario = $this -> createForm(DatosAdministrativosOrigType::class, $egresado);
        $formulario -> handleRequest($request);

        if($formulario -> isSubmitted() && $formulario -> isValid() && $this -> validarDatosAdministrativos($egresado)){
            $em -> flush();
            $this -> addFlash('correcto', '¡Los datos administrativos de ' . $egresado->getNombre(). ' '. $egresado->getApellido().' DNI Nº: '. $egresado->getDni() . ' se han modificado correctamente!');
            return $this -> redirectToRoute('verEgresados');
        }

        return $this -> render('egresado/modificarDatosAdministrativos.html.twig', [
            'formulario' => $formulario -> createView(),
            'egresado' => $egresado
        ]);
    }
    
     /**
     * @Route("/admin/modificarArchivos/{id}", name="modificarArchivos")
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
                        
                    $pdfAnalitico->move("uploads/pdfsAnalitico/",$nombreArchivo);

                    $egresado->setPdfAnalitico($nombreArchivo);
                    
                }else{
                    $egresado->setPdfAnalitico($urlPdf);
                    $this -> addFlash('error', 'Sólo se pueden cargar extensiones .pdf en el certificado analítico');
                    return $this->render('egresado/modificarArchivos.html.twig', [
                        'formulario' => $formulario->createView(),
                        'pdf' => $egresado -> getPdfAnalitico(),
                        'egresado' => $egresado,
                        'imagenes' => $archivosEgresado
                    ]);
                }

            }
            else{
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
                        $archivo -> move("uploads/imagenesDigitales/", $nombreArchivo);

                        $documento -> setNombreArchivo($nombreArchivo);
                        $egresado -> addArchivo($documento);
                        $em -> persist($documento);
                    }
                    else{
                        $this -> addFlash('error', 'Extension inválida en las imágenes, sólo se permiten .jpg, .png, .pdf, .jpeg');
                        return $this -> render('egresado/modificarArchivos.html.twig', [
                            'formulario' => $formulario -> createView(),
                            'pdf' => $egresado -> getPdfAnalitico(),
                            'egresado' => $egresado,
                            'imagenes' => $archivosEgresado
                        ]);
                    }
                }
            }
            
            $this -> addFlash('correcto', '¡Los archivos de ' . $egresado->getNombre(). ' '. $egresado->getApellido().' DNI Nº: '. $egresado->getDni() .  ' se modificaron correctamente!');
            // $this -> addFlash('correcto', '¡Los archivos se cargaron correctamente!');

            $em -> persist($egresado);
            $em -> flush();

            // return $this -> redirectToRoute('modificarArchivos', ['id' => $id]);
            return $this -> redirectToRoute('verEgresados');
        }
        else{
            $egresado->setPdfAnalitico($urlPdf);
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
     * @Route("/admin/eliminarEgresados/{id}", name="eliminarEgresados")
     */
    public function eliminarEgresados($id)
    {
        $manager=$this->getDoctrine()->getManager();
                
        $egresado= $manager->getRepository(Egresado::class)->find($id);
       
        $this -> addFlash('correcto', '¡El egresado ' . $egresado -> getNombre() .' '. $egresado -> getApellido() .' se ha eliminado correctamente!');
        $manager->remove($egresado);
        $manager->flush();
        
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


    ########### FIN ABM ###########


    ########### MANEJO DE IMAGENES Y PDF ###########
        
    /**
     * @Route("/admin/verPDF/{id}", name="verPDF")
     */
    public function verPDF($id)
    {
        $entityManager = $this->getDoctrine()->getManager();

        $egresado= $entityManager->getRepository(Egresado::class)->find($id);

        return $this->redirect("https://intranet.unraf.edu.ar/RegistroDigital/uploads/pdfsAnalitico/" . $egresado->getPdfAnalitico());
    }


    /**
     * @Route("/admin/verImagen/{nombreImagen}", name="verImagen")
     */
    public function verImagen($nombreImagen)
    {
        //$entityManager = $this->getDoctrine()->getManager();

        // $egresado= $entityManager->getRepository(Egresado::class)->find($id);

        return $this->redirect("https://intranet.unraf.edu.ar/RegistroDigital/uploads/imagenesDigitales/" . $nombreImagen);
    }

     /**
     * @Route("/admin/eliminarPDF/{id}", name="eliminarPDF")
     */
    public function eliminarPDF($id){
        $entityManager = $this->getDoctrine()->getManager();

        $egresado = $entityManager->getRepository(Egresado::class)->find($id);

        unlink('uploads/pdfsAnalitico/' . $egresado -> getPdfAnalitico());
        $egresado ->setPdfAnalitico(null);
        //Se setea a nulo porque el remove en este caso no sirve, se utiliza para casos como para borrar
        //la entidad o para borrar un objeto
        $entityManager->flush();

        $this -> addFlash('correcto', '¡El pdf se eliminó correctamente!');
        return $this -> redirectToRoute('modificarArchivos', ['id' => $id]);

    }

    /**
     * @Route("/admin/eliminarImagen/{idImagen}/{id}", name="eliminarImagen")
     */
    public function eliminarImagen($idImagen, $id){
        $entityManager = $this->getDoctrine()->getManager();

        $imagen = $entityManager->getRepository(Archivo::class)->find($idImagen);

        unlink('uploads/imagenesDigitales/' . $imagen -> getNombreArchivo());
        $entityManager->remove($imagen);
        $entityManager->flush();

        $this -> addFlash('correcto', '¡La imagen se eliminó correctamente!');
        return $this -> redirectToRoute('modificarArchivos', ['id' => $id]);

    }


    ########### FIN MANEJO DE IMAGENES Y PDF ###########


    ########### PDF HECHO A MANO  ###########

    /**
     * @Route("/admin/generatePdf/{id}", name="generatePdf")
     */
    public function generatePdf($id)
    {
        $em = $this -> getDoctrine() -> getManager();
        $egresado = $em -> getRepository(Egresado::class) -> find($id);
        
        
        // Configure Dompdf según sus necesidades
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');
        $pdfOptions->set('isPhpEnabled', true);
        // $pdfOptions->set(array('isRemoteEnabled' => true));
        
        
        // Crea una instancia de Dompdf con nuestras opciones
        $dompdf = new Dompdf($pdfOptions);
        
        // Recupere el HTML generado en nuestro archivo twig
        $html = $this->renderView('myPdf.html.twig', [
            'egresado' => $egresado
        ]);
        
        // Cargar HTML en Dompdf
        $dompdf->loadHtml($html);
        
        
        // (Opcional) Configure el tamaño del papel y la orientación 'vertical' o 'vertical'
        $dompdf->setPaper('A4', 'portrait');
        
        // Renderiza el HTML como PDF
        $dompdf->render();

        $canvas = $dompdf->getCanvas(); 

        
        // $imageURL = 'img/logounraf.png'; 
        // $imgWidth = 180; 
        // $imgHeight = 55; 
        // $x = 70; 
        // $y = 70; 
        // $canvas->set_opacity(1); 
        
        // $canvas->image($imageURL, $x, $y, $imgWidth, $imgHeight); 

        $canvas->page_script('
            if( $PAGE_NUM == 1){
                $pdf->set_opacity(1);
                $pdf->image("img/logounraf.png", 70, 70, 180, 55);
            }
        ');
      
        // Envíe el PDF generado al navegador (vista en línea)
        $dompdf->stream("Egresado-".$egresado->getNombre(). "" .$egresado->getApellido() .".pdf", [
            "Attachment" => false
        ]);
    }

    public function sumarLibroFolio($egresadoOriginal){
        $egresadoAnterior = $this -> buscarEgresadoAnterior();
        $egresadoAnterior = end($egresadoAnterior);
        if($egresadoAnterior != null){
            if($egresadoAnterior->getFolio() <= 100){
                $egresadoOriginal->setFolio( $egresadoAnterior->getFolio() + 1);
                $egresadoOriginal->setLibro($egresadoAnterior->getLibro());
            }
            else{
                $egresadoOriginal->setFolio(1);
                $egresadoOriginal->setLibro($egresadoAnterior->getLibro() + 1);
            }
        }
        else{
            $egresadoOriginal -> setFolio(1);
            $egresadoOriginal -> setLibro(1);
        }

     
        return $egresadoOriginal;
    }
    
    public function buscarEgresadoAnterior(){
        
        $manager=$this->getDoctrine()->getManager();
        
        
        $query = $manager->createQuery(
        "   SELECT e
            FROM App\Entity\Egresado e
            ORDER BY  e.id DESC"
        );
        
        //Límite de resultados..
        $query->setMaxResults(1);
        
        //Retorna busqueda de la compra..
        return $query->getResult();

    }
    
    ########### FIN PDF HECHO A MANO  ###########

    ########### VALIDACIONES ###########

    public function validarDatosPersonales($egresado){

        //Googlear REGEX para saber que estoy haciendo

        //Validar nombre
        $nombre = $egresado -> getNombre();
        $validarNombre = '/^[A-Za-zäÄëËïÏöÖüÜáéíóúáéíóúÁÉÍÓÚÂÊÎÔÛâêîôûàèìòùÀÈÌÒÙÑñ .]{2,149}$/';
        if(!preg_match($validarNombre, $nombre)){
            $this -> addFlash('error', 'Ingrese un nombre válido');
            return false;
        }

        //Validar apellido
        $apellido = $egresado -> getApellido();
        $validarApellido = '/^[A-Za-zäÄëËïÏöÖüÜáéíóúáéíóúÁÉÍÓÚÂÊÎÔÛâêîôûàèìòùÀÈÌÒÙÑñ .]{2,149}$/';
        if(!preg_match($validarApellido, $apellido)){
            $this -> addFlash('error', 'Ingrese un apellido válido');
            return false;
        }
        
        
        // //Validar DNI
        // $dni = $egresado -> getDni();
        // $validarDni = '/^[0-9]{7,8}$/' ;
        // if(!preg_match($validarDni, $dni)){
        //     $this -> addFlash('error', 'Ingrese un DNI válido');
        //     return false;
        // }

        //No valido el DNI para que sino es DNI y es otra cosa, escriba libremente
        // $dni = $egresado -> getDni();
        // if(!is_numeric($dni)){
        //     $this -> addFlash('error', 'Ingrese un nº de documento válido');
        //     return false;
        // }
        
    

        //Validar año de la Fecha
        $fecha = $egresado -> getFechaNacimiento();
        if($fecha != null){
            $anio = $fecha->format('Y');
            if($anio < 1920 || $anio >= 2060){
                $this -> addFlash('error', 'No se permiten años menores a 1900 o superiores a 2060');
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
        $validarCiudad = '/^[A-Za-zäÄëËïÏöÖüÜáéíóúáéíóúÁÉÍÓÚÂÊÎÔÛâêîôûàèìòùÀÈÌÒÙÑñ .]{3,149}$/';
        if(!preg_match($validarCiudad, $ciudad)){
            $this -> addFlash('error', 'Ingrese una ciudad con nombre válido');
            return false;
        }

        //Validar provincia
        $provincia = $egresado -> getProvincia();
        $validarProvincia = '/^[A-Za-zäÄëËïÏöÖüÜáéíóúáéíóúÁÉÍÓÚÂÊÎÔÛâêîôûàèìòùÀÈÌÒÙÑñ .]{3,149}$/';
        if(!preg_match($validarProvincia, $provincia)){
            $this -> addFlash('error', 'Ingrese una provincia con nombre válido');
            return false;
        }

        //Validar Calle
        // $calle = $egresado -> getCalle();
        // $validarCalle = '/^[A-Za-zäÄëËïÏöÖüÜáéíóúáéíóúÁÉÍÓÚÂÊÎÔÛâêîôûàèìòùÀÈÌÒÙÑñ .]{3,149}$/';
        // if(!preg_match($validarCalle, $calle)){
        //     $this -> addFlash('error', 'Ingrese un domicilio válido ');
        //     return false;
        // }

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
        $fecha = $egresado -> getFechaEgreso();
        if($fecha != null){
            $anio = $fecha->format('Y');
            if($anio < 2010){
                $this -> addFlash('error', 'No se permiten años menores a 2010');
                return false;
            }
        }
        return true;
    }

    public function validarDatosAdministrativos($egresado){
        $nombreRector = $egresado -> getNombreRector();
        $apellidoRector = $egresado -> getApellidoRector();
        $nombreSecretario = $egresado -> getNombreSecretario();
        $apellidoSecretario = $egresado -> getApellidoSecretario();
        $fecha = $egresado->getFechaEntrega();

        //Validar apellidos
        $validarApellido = '/^[A-Za-zäÄëËïÏöÖüÜáéíóúáéíóúÁÉÍÓÚÂÊÎÔÛâêîôûàèìòùÀÈÌÒÙÑñ .]{2,149}$/';
        if(!preg_match($validarApellido, $apellidoRector) || !preg_match($validarApellido, $apellidoSecretario)){
            $this -> addFlash('error', 'Ingrese un apellido válido');
            return false;
        }
        
        
        //Validar nombres
        $validarNombre = '/^[A-Za-zäÄëËïÏöÖüÜáéíóúáéíóúÁÉÍÓÚÂÊÎÔÛâêîôûàèìòùÀÈÌÒÙÑñ .]{2,149}$/';
        if(!preg_match($validarNombre, $nombreRector) || !preg_match($validarApellido, $nombreSecretario)){
            $this -> addFlash('error', 'Ingrese un nombre válido');
            return false;
        }

        
        if($fecha != null){
            $anio = $fecha->format('Y');
            if($anio < 2010){
                $this -> addFlash('error', 'No se permiten años menores a 2010');
                return false;
            }
        }

        return true;
    }

    ########## FIN VALIDACIONES ###########




    ######### BUSQUEDA DE USUARIOS ###########

    //Como realmente no es necesario aplicar filtro de busqueda, momenteaneamente lo voy a sacar
    // public function buscarUsuarios(UserBusqueda $busqueda){
    //     if($busqueda -> getFiltrarPor() == 1){
    //         return $this -> consultaApellidos($busqueda);
    //     }
    //     else if($busqueda -> getFiltrarPor() == 2){
    //         return $this -> consultaDni($busqueda);
    //     }
    //     else{
    //         return $this ->consultaTodos($busqueda);
    //     }
    // }


    // public function consultaApellidos(UserBusqueda $busqueda){
        
    //     $manager=$this->getDoctrine()->getManager();
        
    //     $query = $manager->createQuery(
    //     "SELECT u
    //     FROM App\Entity\Egresado u
    //     WHERE u.apellido LIKE :apellido
    //     ORDER BY u.id DESC
    //     "
    //     )
    //     ->setParameter('apellido',$busqueda->getBuscar().'%');
        
        
    //     $query->setMaxResults(100);
        
        
    //     return $query->getResult();
    // }

    // public function consultaDni(UserBusqueda $busqueda){
        
    //     $manager=$this->getDoctrine()->getManager();
        
    //     $query = $manager->createQuery(
    //     "SELECT u
    //     FROM App\Entity\Egresado u
    //     WHERE u.dni LIKE :dni
    //     ORDER BY u.id DESC
    //     "
    //     )
    //     ->setParameter('dni',$busqueda->getBuscar().'%');
    
        
    //     $query->setMaxResults(100);
        
        
    //     return $query->getResult();
    // }

    public function consultaTodos(UserBusqueda $busqueda){
        
        $manager=$this->getDoctrine()->getManager();
        
        $query = $manager->createQuery(
        "SELECT u
        FROM App\Entity\Egresado u
        WHERE u.apellido LIKE :apellido
        OR u.dni LIKE :dni
        ORDER BY u.id DESC
        "
        )
        ->setParameter('apellido', '%'. $busqueda->getBuscar().'%')
        ->setParameter('dni', '%'. $busqueda->getBuscar().'%');
        
        //Límite de resultados..
        $query->setMaxResults(100);
        
        //Retorna busqueda de la compra..
        return $query->getResult();
    }

    ######## FIN BUSQUEDA USUARIOS #########



    ######## COPIAR ENTIDAD A PATA #########

    public function copyEgresado($egresadoOriginal, $egresado){

        $egresadoOriginal->setApellido($egresado->getApellido());
        $egresadoOriginal->setNombre($egresado->getNombre());
        $egresadoOriginal->setTipoDocumentoIdentidad($egresado->getTipoDocumentoIdentidad());
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
        $egresadoOriginal->setOriginalDuplicado($egresado->getOriginalDuplicado());
        $egresadoOriginal->setFechaEgreso($egresado->getFechaEgreso());
        $egresadoOriginal->setNombreRector($egresado->getNombreRector());
        $egresadoOriginal->setApellidoRector($egresado->getApellidoRector());
        $egresadoOriginal->setNombreSecretario($egresado->getNombreSecretario());
        $egresadoOriginal->setApellidoSecretario($egresado->getApellidoSecretario());
        $egresadoOriginal->setNroResolucionAprob($egresado->getNroResolucionAprob());
        $egresadoOriginal->setNroResolucionME($egresado->getNroResolucionME());
        $egresadoOriginal->setNroExpediente($egresado->getNroExpediente());
        $egresadoOriginal->setNroResolucionRectoral($egresado->getNroResolucionRectoral());
        $egresadoOriginal->setNroDiploma($egresado->getNroDiploma());
        $egresadoOriginal->setNroAnalitico($egresado->getNroAnalitico());
        if($egresado->getNroRevalida() != null){
            $egresadoOriginal->setNroRevalida($egresado->getNroRevalida());
        }
        if($egresado->getFechaEntrega() != null){
            $egresadoOriginal->setFechaEntrega($egresado->getFechaEntrega());
        }
        
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
                    $archivo -> move("uploads/imagenesDigitales/", $nombreArchivo);

                    $documento -> setNombreArchivo($nombreArchivo);
                    $egresadoOriginal -> addArchivo($documento);
                    $em -> persist($documento);
                    
                }
            }
        }
        return $egresadoOriginal;
    }
    
    ########### FIN ENTIDAD A PATA ############
       
}
