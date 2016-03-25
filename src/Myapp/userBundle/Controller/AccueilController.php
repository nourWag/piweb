<?php
namespace Myapp\userBundle\Controller;
use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

use \Symfony\Bundle\FrameworkBundle\Controller\Controller;
class AccueilController extends Controller{
     public function indexAction()
             
    {
         
        
         
         
         
         
         
         
         
         
         
         
         
         
         
         $em = $this->getDoctrine()->getManager(); 
$image=$em->getRepository('MyappResponsableBundle:Image')->findall(); 
        return $this->render('MyappuserBundle:View1:index.html.twig', array('images'=>$image));
    }
//  protected function isAuthorised($role)
//    {
//        if (is_bool($role)) {
//            if ($role == false) {
//                throw new AccessDeniedException('You do not have permission to use this resource.');
//            }
//
//            return true;
//        }
//
//        if (! $this->isGranted($role)) {
//            throw new AccessDeniedException('You do not have permission to use this resource.');
//        }
//
//        return true;
//    }


    public function affAction()
             
    {
    //   $this->isAuthorised(' ROLE_client');
        return $this->render('MyappuserBundle::layoutAd.html.twig');
    }
     public function errorAction()
             
    {
       
        return $this->render('MyappuserBundle::error.html.twig');
    }
   
     
}
