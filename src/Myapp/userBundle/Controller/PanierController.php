<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PanierController
 *
 * @author sawssen
 */
namespace Myapp\userBundle\Controller;
use \Symfony\Bundle\FrameworkBundle\Controller\Controller;
use \Symfony\Component\HttpFoundation\Response;
use \Symfony\Component\HttpFoundation\Request;
use Myapp\userBundle\Entity\Panierproduit;
//use Myapp\userBundle\Entity\Panierproduit;
use piweb\MyappuserBundle\Entity\Panier;
use piweb\MyappResponsableBundle\Entity\Produit;
use piweb\MyappuserBundle\Entity\ProduitPan;
use Symfony\Component\HttpFoundation\Session\Session;
use Doctrine\ORM\Query\ResultSetMapping;
use piweb\MyappadminBundle\Entity\User;


class PanierController extends Controller{
     function affichageAction()
        { $response=new Response();
//            $session=$this->getRequest()->getSession();
//            if (!$session->has('panier'))$session->set('panier',0);
//            $panier=1;//$session->get('panier');
            
               $repository = $this->getDoctrine()
        ->getRepository('MyappuserBundle:Panier');
        $userId = $this->get('security.context')->getToken()->getUser()->getId();
 //echo $userId;
       
        $panier = $repository->findOneBy(array('idUser' => $userId));
        //echo "        ";
        //echo $panier->getIdpan();
//        return $response;    
              
               $em=$this->getDoctrine()->getManager();
              
               $rsm = new ResultSetMapping();
               
               $rsm->addEntityResult('MyappuserBundle:ProduitPan', 'p');
                $rsm->addFieldResult('p', 'idPr', 'idpr');
                $rsm->addFieldResult('p', 'reference', 'reference');
                $rsm->addFieldResult('p', 'prixvente', 'prix');
                $rsm->addFieldResult('p', 'idPan', 'idpan');
                $rsm->addFieldResult('p', 'quantite', 'quantite');
                $rsm->addFieldResult('p', 'imageName', 'img');

               $query = $em->createNativeQuery('SELECT pp.idPr,p.imageName,p.prixvente,p.reference,pp.quantite, pp.idPan FROM panierproduit pp,produit p WHERE pp.idPr=p.id  and  pp.idPan =  ?', $rsm);
               $query->setParameter(1, $panier->getIdpan());
             
                $produit = $query->getResult();
               
                
              
              
              
              
              return $this->render('MyappuserBundle:Panier:PanierView.html.twig',array('produits'=>$produit));
        }
        
  
  function ajouterAction()
  {  
        $response=new Response();
        $request= Request::createFromGlobals();
//        $session=$this->getRequest()->getSession();
//        if (!$session->has('panier'))$session->set('panier',0);
        //$panier=1;//$session->get('panier');

        $repository = $this->getDoctrine()
        ->getRepository('MyappuserBundle:Panier');
        $userId = $this->get('security.context')->getToken()->getUser()->getId();
        $panier = $repository->findOneBy(array('idUser' => $userId));
//        echo $userId;
//        echo "  ";
//        echo $panier->getIdPan();
//        return $response;
        //insersion de id user et idProduit fl table jdida
        $em=$this->getDoctrine()->getManager();
        $model=new Panierproduit();
        
        //r�cuperer le rslt de la requette
        $data = $request->query->get('idprodui');//query propriété id du produitcommande
        $qt_commande=$request->query->get('quant');
        //echo $data;
        //echo $qt_commande;
        
        //on test si le prod existe deja dans le panier
        $tempProd=$em->getRepository('MyappuserBundle:Panierproduit')->findOneBy(array('idpr' => $data,'idpan' => $panier->getIdPan()));
        if($tempProd)
        {
            //le prod exist deja on additionne les qt
            $tempProd->setQuantite($tempProd->getQuantite()+$qt_commande);
            $em->persist($tempProd);//insert model into table(y7otha fl memoire kahaw)
            $em->flush();//execute la persistance
            
        }
        else{
            //insestion dans l'objet
            $model->setIdpan($panier->getIdpan());
            $model->setIdpr($data);
            $model->setQuantite($qt_commande);

            //$em=$this->getDoctrine()->getManager(); 
            $em->persist($model);//insert model into table(y7otha fl memoire kahaw)
            $em->flush();//execute la persistance
        }
   
    $response->setStatusCode(Response::HTTP_OK);//reponse serveur 200
    // prints the HTTP headers followed by the content
    $response->send($data);
    return $response;
    //return $this->redirect($this->generateUrl("afficher_panier"));
   
 }
  
  
  function supprimerAction(){
      
    $response=new Response();
    $request= Request::createFromGlobals();   
//        $session=$this->getRequest()->getSession();
//        if (!$session->has('panier'))$session->set('panier',0);
//        $panier=1;//$session->get('panier');
     
        $repository = $this->getDoctrine()
        ->getRepository('MyappuserBundle:Panier');
        $userId = $this->get('security.context')->getToken()->getUser()->getId();
        $panier = $repository->findOneBy(array('idUser' => $userId));
        echo $userId;
        echo "  ";
        echo $panier->getIdPan();
//        return $response;
       
       
        //$model=new Panierproduit();
        
        $data = $request->query->get('idprodui');//query propriété
        //echo $data;
        //suppression
      $em=$this->getDoctrine()->getManager(); 
      $modele=$em->getRepository('MyappuserBundle:Panierproduit')->findOneBy(array('idpr' => $data,'idpan' => $panier->getIdPan()));//repository ypointi 3al entité eli 3andha l'id spécifié
      $em->remove($modele);
      $em->flush();
        
   
    $response->setStatusCode(Response::HTTP_OK);//reponse serveur 200
    // prints the HTTP headers followed by the content
    $response->send();
    return $response;
   
  }
//  function loginAction()
//  {
//      $session = new Session();
//      $session->start();
//     $session->set('loginClientId','1');
//     $session->set('panier','1');   
//   return (new Response("Connecté"));  
//  }
}
