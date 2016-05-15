<?php
namespace Myapp\ResponsableBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Myapp\ResponsableBundle\Entity\CarteFidelite;
use Myapp\ResponsableBundle\Form\CarteFideliteType;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CarteFideliteController
 *
 * @author lenovo
 */
class CarteFideliteController extends Controller {
    
    
    
    function AjouterCarteFideliteAction()   {
        
        $modele =new Cartefidelite();
        $modelForm =new CarteFideliteType();
        $form=$this->createForm($modelForm , $modele);
        $request =$this->get('request');
        if($form->handleRequest($request)->isValid())
        {
           
            $em= $this->getDoctrine()->getManager();
            $em->persist($modele);
            $em ->flush();
            return $this->redirect($this->generateUrl('Afficher_CarteFidelite'));
        }
        return $this->render('MyappResponsableBundle:CarteFidelite:AjouterCarteFidelite.html.twig',array('form'=>$form->createView()));       
    }
    
    
    
    
    public function AfficherCarteFideliteAction(){
        $em=$this->getDoctrine()->getManager();//instantiation du gestionaire des objet
        $cartes=$em->getRepository('MyappResponsableBundle:CarteFidelite')->findAll(); //get repository temchi lel une entité bien determiner
    return $this->render('MyappResponsableBundle:CarteFidelite:AfficherCarteFidelite.html.twig',array('mds'=>$cartes));
        
    }
    
    
    public function modifierCarteFideliteAction($id){
        $em =$this->getDoctrine()->getManager();//instencier objet doctrine mel orm//manager les entités
        $cartes = $em ->getRepository('MyappResponsableBundle:CarteFidelite')->find($id);//cherche id
        $form=$this->createForm(new CarteFideliteType(),$cartes);
        $request=$this->get('request');
        if($form->handleRequest($request)->isValid()){
            $em->persist($cartes);
        $em->flush();
         return $this->redirect($this->generateUrl('Afficher_CarteFidelite'));
       }
       return $this->render('MyappResponsableBundle:CarteFidelite:ModifierCarteFidelite.html.twig'
                ,array('form'=>$form->createView()));
        }
        
    public function supprimerCarteFideliteAction($id){
        $em =$this->getDoctrine()->getManager();
        $cartes = $em ->getRepository('MyappResponsableBundle:CarteFidelite')
                ->find($id);//cherche id
        $em->remove($cartes);
        $em->flush();
         return $this->redirect($this->generateUrl('Afficher_CarteFidelite'));
        
    }


    public function rechercherCarteFideliteAction()
    {
        $em=$this->getDoctrine()->getManager();
        $cartes=$em->getRepository('MyappResponsableBundle:CarteFidelite')->findALL();
        $requet=$this->getRequest('request');
        if($requet->getMethod()=="POST")
        {
            $search=$requet->get('search');
            $cartes=$em->getRepository('MyappResponsableBundle:CarteFidelite')->find($search);
        }
          return $this->render('MyappResponsableBundle:CarteFidelite:RechercherCarteFidelite.html.twig',array('mds'=>$cartes));
    }

    
    
    
    //put your code here
}
