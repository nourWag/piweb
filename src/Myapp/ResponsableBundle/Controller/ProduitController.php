<?php
namespace Myapp\ResponsableBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Myapp\ResponsableBundle\Entity\Produit;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Myapp\ResponsableBundle\Form\ProduitForm;
use Myapp\ResponsableBundle\Entity\Image;
use Myapp\ResponsableBundle\Form\Image1Form;
class ProduitController extends Controller{
    //put your code here
    
    public function afficherPAction()
    {
        $em=$this->container->get('doctrine')->getManager(); 
    
      $modelefind=$em->getRepository("MyappResponsableBundle:Produit")->findAll();
      $modelform =new ProduitForm();
     
     $form=$this->createForm($modelform,new Produit());
     
      $modele  = $this->get('knp_paginator')->paginate($modelefind,$this->get('request')->query->get('page', 1)/*page number*/,1/*limit per page*/);
     
        return $this->render('MyappResponsableBundle:View1nour:afficherProduit.html.twig', array('modele'=>$modele,'f'=>$form->createView()));
    }
    
    public function afficherPDetailleAction($id)
    {
      $em=$this->container->get('doctrine')->getManager();
       $modelefind=$em->getRepository("MyappResponsableBundle:Produit")->find($id);
       $modelform =new ProduitForm();
     $imagefind=$em->getRepository("MyappResponsableBundle:Image")->findBy(array('produit'=>$id));
     $form=$this->createForm($modelform, $modelefind);
       $request=$this->get('request');
     if($form->handleRequest($request)->isValid())
         {
            $em=$this->getDoctrine()->getManager();
            $em->persist($modele);
            $em->flush();
        return ($this->redirectToRoute("afficher_produits"));    
        }
     
      return $this->render('MyappResponsableBundle:View1nour:afficherdetailleProduit.html.twig', array('modele'=>$modelefind,'f'=>$form->createView(),'images'=>$imagefind));
    }
    
   
    
    
     public function afficherCouleurAction($id)
    {
      $em=$this->container->get('doctrine')->getManager(); 
    
      $modelefind=$em->getRepository("MyappResponsableBundle:Produit")->find($id);
      return $this->render('MyappResponsableBundle:View1nour:afficherdetailleProduit.html.twig', array('modele'=>$modelefind));
    }
     public function afficherImageAction($id)
    {
         $em = $this->getDoctrine()->getManager();
       $image_obj = $em->getRepository('MyappResponsableBundle:Produit')->find($id);
       $photo=$image_obj->getImage();
       $response = new StreamedResponse(function () use ($photo) {
           ob_end_clean();
           echo stream_get_contents($photo);
       });
       
       $response->headers->set('Content-Type', 'image/jpeg');
       return $response;
   }
     public function afficherP2Action()
    {
        $em=$this->container->get('doctrine')->getManager(); 
      $modelefind=$em->getRepository("MyappResponsableBundle:Produit")->findAll();
      
     
      $modele  = $this->get('knp_paginator')->paginate($modelefind,$this->get('request')->query->get('page', 1)/*page number*/,2/*limit per page*/);
        return $this->render('MyappResponsableBundle:View1nour:afficherProduit2.html.twig', array('modele'=>$modele));
    }
       
    public function modifierProduitAction($id)
    {
         $em=$this->getDoctrine()->getManager();
        $modele= $em->getRepository('MyappResponsableBundle:Produit')->find($id);
        $modelform =new ProduitForm();
        $imagefind=$em->getRepository("MyappResponsableBundle:Image")->findBy(array('produit'=>$id));
        $emImage=new Image(); 
        $formImage =    $this->createForm(new Image1Form(), $emImage);
         
        $form=$this->createForm($modelform, $modele);//il faut i entite et le model form
        
        $request=$this->get('request');
        
        if($form->handleRequest($request)->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($modele);
            $em->flush();
        return ($this->redirect($this->generateUrl("afficher_produits")));    
        }
        $request=$this->get('request');
        if($formImage->handleRequest($request)->isValid()){
            $emI = $this->getDoctrine()->getManager();
            $stream = fopen($emImage->getFile(),'rb');
            $emImage->setImg(stream_get_contents($stream));
            $emI->persist($emImage);
            $emI->flush();
           
            
        return ($this->redirect($this->generateUrl("afficher_produits")));    
        }
    return $this->render('MyappResponsableBundle:View1nour:modiffierProduit.html.twig',array('f'=>$form->createView(),'f2'=>$formImage->createView(),'modele'=>$modele,'images'=>$imagefind));    
    }
  
    function SupprimerProduitAction($id){
        $em=$this->getDoctrine()->getManager();
        $modele = $em->getRepository('MyappResponsableBundle:Produit')->find($id);
        $em->remove($modele);
        $em->flush();
        return ($this->redirect($this->generateUrl("afficher_produits"))); 
    }
    
    function AjouterProduitAction(){
        $model=new Produit(); 
        $modelForm=new ProduitForm(); 
        $form = $this->createForm($modelForm, $model); //creation du formulaire //instancier un objet form qui quit un type qui est enrelation avec un type
        $request=$this->get('request');
        if($form ->handleRequest($request)->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($model);
            $em->flush();
            
            $emImage=new Image(); 
            $formImage = $this->createForm(new Image1Form(), $emImage);    
            return ($this->redirect($this->generateUrl("uploadAjoutProduit")));
            
        }
        return $this->render('MyappResponsableBundle:View1nour:ajouterProduit.html.twig',array('f'=>$form->createView()));////une vue ne peut pas dessiner un objet c'est pour cela la methode createview l'aide pour dessiner ce formulaire
    } 
    
  public function order_produitAction()
    {
        $em=$this->container->get('doctrine')->getManager(); 
        $query = $em->createQuery("SELECT m FROM MyappResponsableBundle:Produit m ORDER BY m.prixdachat ASC");
        $result = $query->getResult();
        $modelefind=$result;

      $modelform =new ProduitForm();
     
     $form=$this->createForm($modelform,new Produit());
     
      $modele  = $this->get('knp_paginator')->paginate($modelefind,$this->get('request')->query->get('page', 1)/*page number*/,2/*limit per page*/);
     
        return $this->render('MyappResponsableBundle:View1nour:afficherProduit.html.twig', array('modele'=>$modele,'f'=>$form->createView()));
    }
    
    public function order_produit_prixvendreAction()
    {
        $em=$this->container->get('doctrine')->getManager(); 
        $query = $em->createQuery("SELECT m FROM MyappResponsableBundle:Produit m ORDER BY m.prixvente ASC");
        $result = $query->getResult();
        $modelefind=$result;

      $modelform =new ProduitForm();
     
     $form=$this->createForm($modelform,new Produit());
     
      $modele  = $this->get('knp_paginator')->paginate($modelefind,$this->get('request')->query->get('page', 1)/*page number*/,2/*limit per page*/);
     
        return $this->render('MyappResponsableBundle:View1nour:afficherProduit.html.twig', array('modele'=>$modele,'f'=>$form->createView()));
    }
    
    public function fixer_nmb_produitsAction($id)
    {
        $em=$this->container->get('doctrine')->getManager(); 
    
      $modelefind=$em->getRepository("MyappResponsableBundle:Produit")->findAll();
      $modelform =new ProduitForm();
     
     $form=$this->createForm($modelform,new Produit());
     
      $modele  = $this->get('knp_paginator')->paginate($modelefind,$this->get('request')->query->get('page', 1)/*page number*/,$id/*limit per page*/);
     
        return $this->render('MyappResponsableBundle:View1nour:afficherProduit.html.twig', array('modele'=>$modele,'f'=>$form->createView()));
    }
    
    function produit_rechercherAction()
    {
        $em = $this->getDoctrine()->getManager();
        $modelefind = $em->getRepository('MyappResponsableBundle:Produit')->findAll();
         $modele  = $this->get('knp_paginator')->paginate($modelefind,$this->get('request')->query->get('page', 1)/*page number*/,2/*limit per page*/);
        $request = $this->getRequest();
        if ($request->getMethod()=="POST")
        {
        $search1=$request->get('search1');
        $modelefind=$em->getRepository('MyappResponsableBundle:Produit')->findBy(array("designation"=>$search1));        
         $modele  = $this->get('knp_paginator')->paginate($modelefind,$this->get('request')->query->get('page', 1)/*page number*/,2/*limit per page*/);     

        
     }
       
        return $this->render('MyappResponsableBundle:View1nour:rechercheProduit.html.twig',array("modele"=>$modele));
    }
    public function afficherPClientAction()
    {
        $em=$this->container->get('doctrine')->getManager(); 
    
      $modelefind=$em->getRepository("MyappResponsableBundle:Produit")->findAll();
      $modelform =new ProduitForm();
     
     $form=$this->createForm($modelform,new Produit());
     
      $modele  = $this->get('knp_paginator')->paginate($modelefind,$this->get('request')->query->get('page', 1)/*page number*/,2/*limit per page*/);
     
        return $this->render('MyappResponsableBundle:View1nour:AfficherProduitClient.html.twig', array('modele'=>$modele,'f'=>$form->createView()));
    }
}
