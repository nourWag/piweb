<?php
namespace Myapp\adminBundle\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

//use  test\Myapp\useBundle\Entity\User;
//use  test\Myapp\pagesBundle\Form\PagesType;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of admin_et_clientController
 *
 * @author snoussi
 */
class clientController extends Controller {
    
    function listAction()
{
   $em=$this->getDoctrine()->getManager();
   $model=$em->getRepository
    ('MyappadminBundle:User')->findAll();
    return $this->render
 ('MyappadminBundle:Administration:pages/layout/affichage.html.twig',array('mod'=>$model));
}
    
    public function RechercheAction()
    {
        $em = $this->getDoctrine()->getManager();
$modeles = $em->getRepository
        ('MyappadminBundle:User')->findAll();
        $request = $this->get('request');
        if ($request->getMethod()=="POST")
        {
$search=$request->get('search');
$modeles=$em->getRepository
        ('MyappadminBundle:User')->
                findBy(array("username"=>$search));        
        }
        
        return $this->render
('MyappadminBundle:Administration:pages/layout/recherche.html.twig'
                ,array("modeles"=>$modeles));
    }
    
    
     public function supprimerAction($id)
    { $em = $this->getDoctrine()->getManager();
$modeles =
  $em->getRepository
     ('MyappadminBundle:User')->find($id);
                 $em->remove($modeles);
                 $em->flush();
return $this->redirect($this->generateUrl("affich"));
    }
    
    public function lockAction($id)
    {
          
          $em=$this->getDoctrine()->getManager();
         $req=$this->get('request');
         $client=$em->getRepository('MyappadminBundle:user')->find($id);
         
         if ($req->getMethod()=='POST') {
             $lock=$req->get('lock');
                 $disabled=$req->get('disable');
        $query=$this->getDoctrine()->getManager()->createQuery('UPDATE MyappadminBundle:user c SET  c.locked = :nvlocked , c.enabled = :nvenabled where c.id=:idClient');
    $query->setParameter('nvlocked',$lock);
    $query->setParameter('idClient',$id);
       $query->setParameter('nvenabled',$disabled);
    $query->execute();
    return $this->redirect($this->generateUrl("adminPages"));
         }
    return $this->render('MyappadminBundle:Administration:pages/layout/lock.html.twig',array('client'=> $client));

    }
       ////salma
    
    function listeAction(){
        
        
        $em=$this->container->get('doctrine')->getManager();  //instancier la doctrine et le manager
        $modele=$em->getRepository('MyappResponsableBundle:boutique')->findAll();
        return $this->render('MyappadminBundle:salma:salma.html.twig',array('modele'=>$modele));
    
    }
    
    
    function promoAction($id) // tmodifi 3al blasa
    {
    $em = $this->getDoctrine()->getManager();
    $modele =$em->getRepository('MyappResponsableBundle:boutique')
        ->find($id);
      $modele->setEtat("valide");
            $em->persist($modele);  
            $em->flush();

            return $this->redirect($this->generateUrl("salma") );
    }
    
    
}



