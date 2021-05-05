<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\UserBusqueda;
use App\Form\UserBusquedaType;


class UsuarioController extends AbstractController
{

    /**
     * @Route("/superadmin/roles", name="roles")
     */
    public function OtorgarRol(Request $request)
    {   
        $manager=$this->getDoctrine()->getManager();

        $form = $this -> createForm(UserBusquedaType::class, new UserBusqueda());
        $form -> handleRequest($request);
        $busqueda = $form ->getData();

        $usuarios= $manager->getRepository(User::class)->findBy(array(), array('email' => 'ASC'));

        
        if($form -> isSubmitted()){
            return $this -> render('usuario/roles.html.twig', [
                'usuario' => $this -> buscarUsuarios($busqueda), 'formulario' => $form -> createView()
            ]);
        }
        else{
            return $this->render('usuario/roles.html.twig',
            ['usuarios' => $usuarios, 'formulario' => $form -> createView()]
            );
        }
     
    }
    
    /**
     * @Route("/superadmin/cambioSuperadmin/{id}", name="cambioSuperadmin")
     */
    public function cambioSuperAdmin(Request $request,$id)
    {
        $em = $this->getDoctrine()->getManager();

        $usuario= $em->getRepository(User::class)->find($id);

        $usuario->setRoles(['ROLE_USER', 'ROLE_ADMIN', 'ROLE_SUPERADMIN']);
            
        $em->flush($usuario);
        $this->addFlash('correcto', 'Se cambió el permiso a SUPERADMIN');
        return $this->redirectToRoute('roles');
    }

    
    /**
     * @Route("/superadmin/cambioAdmin/{id}", name="cambioAdmin")
     */
    public function cambioAdmin(Request $request,$id)
    {
        $em = $this->getDoctrine()->getManager();

        $usuario= $em->getRepository(User::class)->find($id);

        $usuario->setRoles(['ROLE_USER','ROLE_ADMIN']);
            
        $em->flush($usuario);
        $this->addFlash('correcto', 'Se cambió el permiso a ADMIN');
        return $this->redirectToRoute('roles');
    }


    /**
     * @Route("/superadmin/cambioUser/{id}", name="cambioUser")
     */
    public function cambioUser(Request $request,$id)
    {
        $em = $this->getDoctrine()->getManager();

        $usuario= $em->getRepository(User::class)->find($id);

        $usuario->setRoles(['ROLE_USER']);
            
        $em->flush($usuario);
        $this->addFlash('correcto', 'Se cambió el permiso a USER');
        return $this->redirectToRoute('roles');
    }

    /**
     * @Route("/superadmin/eliminarUser/{id}", name="eliminarUser")
     */
    public function eliminarUser($id){
        $em = $this->getDoctrine()->getManager();
        $usuario = $em -> getRepository(User::class)->find($id);
        

        $this->addFlash('correcto', 'Se eliminó correctamente el usuario: '. $usuario->getUsername());
        $em -> remove($usuario);
        $em -> flush();
        return $this->redirectToRoute('roles');
    }



    public function buscarUsuarios(UserBusqueda $busqueda){
        $manager = $this -> getDoctrine() -> getManager();

        $query = $manager->createQuery(
            "SELECT u
            FROM App\Entity\User u
            WHERE u.email LIKE :email
            ORDER BY u.id ASC
            "
            )->setParameter('email',$busqueda->getBuscar().'%');
            
            
            //Límite de resultados..
            $query->setMaxResults(100);
            
            //Retorna busqueda de la compra..
            return $query->getResult();
    }
 
}