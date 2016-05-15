<?php
namespace Myapp\ResponsableBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Myapp\ResponsableBundle\Entity\Produit;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Myapp\ResponsableBundle\Form\ProduitForm;
use Myapp\ResponsableBundle\Entity\Image;
use Myapp\ResponsableBundle\Form\Image1Form;
use Myapp\ResponsableBundle\Entity\Image2;
use Symfony\Component\HttpFoundation\Request;
use Myapp\ResponsableBundle\Form\ImageType;
use Myapp\ResponsableBundle\Form\ImageForm2;
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
    
    
    
    public function imageAjoutFAction(Request $request)
    {

    // On crée un objet Advert
    $image = new Image2();

    // On crée le FormBuilder grâce au service form factory
    $form = $this->get('form.factory')->createBuilder('form', $image)

    // On ajoute les champs de l'entité que l'on veut ? notre formulaire
   
    ->add('imageName',      'text')
    ->add('imageFile',     'file')
            ->add('produit','entity',array('class'=>'MyappResponsableBundle:Produit','property'=>'id'))
              
    ->add('save',      'submit')
    ->getForm()
    ;

    $form->handleRequest($request);

    // On vérifie que les valeurs entrées sont correctes
    // (Nous verrons la validation des objets en détail dans le prochain chapitre)
    if ($form->isValid()) {
      // On l'enregistre notre objet $advert dans la base de données, par exemple
      $em = $this->getDoctrine()->getManager();

      $em->persist($image);

      $em->flush();

      $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');

      // On redirige vers la page de visualisation de l'annonce nouvellement créée
      //return $this->redirect($this->generateUrl('oc_platform_view', array('id' => $advert->getId())));
    return $this->render('MyappResponsableBundle:View1nour:add.html.twig', array(
      'form' => $form->createView(),
    ));
    }

    return $this->render('MyappResponsableBundle:View1nour:add.html.twig', array(
      'form' => $form->createView(),
    ));
    }
    public function afficherImagePAction()
    {
        $em=$this->container->get('doctrine')->getManager(); 
        
        $entity=$em->getRepository("MyappResponsableBundle:Image2")->findAll();
        $e=new ImageType();
        $form=$this->createForm($e, $entity);       
//$helper = $this->container->get('vich_uploader.templating.helper.uploader_helper');
//$path = $helper->asset($entity, 'imageFile');
        return $this->render('MyappResponsableBundle:View1nour:afficherImage.html.twig', array('product' => $entity,'f'=>$form->createView()));
    }
    
   public function imageAjoutProduitFAction(Request $request)
    {

    // On crée un objet Advert
    $produit = new Produit();

    // On crée le FormBuilder grâce au service form factory
    $form = $this->get('form.factory')->createBuilder('form', $produit)

    // On ajoute les champs de l'entité que l'on veut ? notre formulaire
   
    ->add('imageName',      'text')
    ->add('imageFile',     'file')
  
   
     ->add('couleur','entity',array('class'=>'MyappResponsableBundle:couleur','property'=>'id',"multiple" => true,"expanded"=>true))
          ->add('size','entity',array('class'=>'MyappResponsableBundle:Size','property'=>'id',"multiple" => true,"expanded"=>true))
                ->add('description')
                ->add('reference')
                
                ->add('marque')
                ->add('prixvente')
            ->add('prixancien')
                ->add('prixdachat')
                ->add('quantite')
                ->add('disponible')
              
               
                ->add('designation')
               ->add('valider','submit')
                 ->getForm()
        ;

    $form->handleRequest($request);

    // On vérifie que les valeurs entrées sont correctes
    // (Nous verrons la validation des objets en détail dans le prochain chapitre)
    if ($form->isValid()) {
      // On l'enregistre notre objet $advert dans la base de données, par exemple
      $em = $this->getDoctrine()->getManager();

      $em->persist($produit);

      $em->flush();

      $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');

      // On redirige vers la page de visualisation de l'annonce nouvellement créée
      //return $this->redirect($this->generateUrl('oc_platform_view', array('id' => $advert->getId())));
    return $this->render('MyappResponsableBundle:View1nour:add.html.twig', array(
      'form' => $form->createView(),
    ));
    }
    return $this->render('MyappResponsableBundle:View1nour:add.html.twig', array(
      'form' => $form->createView(),
    ));
    
    }
    public function afficherImageProduitAction($id)
    {  $em=$this->container->get('doctrine')->getManager();
     $imagefind=$em->getRepository("MyappResponsableBundle:Image2")->findOneBy(array('produit'=>$id));
      return $this->render('MyappResponsableBundle:View1nour:Produitgrid.html.twig', array('image'=>$imagefind));
  }
     public function affichergAction($id,$catB)
    {  $em=$this->container->get('doctrine')->getManager();
       $produitfind=$em->getRepository("MyappResponsableBundle:Produit")->findBy(array("boutique"=>$id)); 
       $produitM=$em->getRepository("MyappResponsableBundle:Produit")->findBy(array('boutique'=>$id),array('note'=>'desc'),1,0); 
       $produitV=$em->getRepository("MyappResponsableBundle:Produit")->findBy(array('boutique'=>$id),array('prixvente'=>'asc'),1,0);
       $boutiquefind=$em->getRepository("MyappResponsableBundle:Boutique")->find($id); 
     $modele  = $this->get('knp_paginator')->paginate($produitfind,$this->get('request')->query->get('page', 1)/*page number*/,12/*limit per page*/);
     if($catB=="Fashion et Beaute") {
     return $this->render('MyappResponsableBundle:View1nour:Produitgrid.html.twig', array('produits'=>$modele,'boutique'=>$boutiquefind,'produitMs'=>$produitM,'produitV'=>$produitV));
     }
     if($catB=="Restauration") {
     return $this->render('MyappResponsableBundle:View1nour:ProduitgridFood.html.twig', array('produits'=>$modele,'boutique'=>$boutiquefind,'produitMs'=>$produitM,'produitV'=>$produitV));
     }
     if($catB=="Electronique et Ordinateurs") {
     return $this->render('MyappResponsableBundle:View1nour:ProduitgridMachine.html.twig', array('produits'=>$modele,'boutique'=>$boutiquefind,'produitMs'=>$produitM,'produitV'=>$produitV));
     }
     }
  
  
  public function affichergFAction($id,$cat)
    {  $em=$this->container->get('doctrine')->getManager();
   
       $produitfind=$em->getRepository("MyappResponsableBundle:Produit")->findBy(array('categorie'=>$cat,"boutique"=>$id)); 
       $produitM=$em->getRepository("MyappResponsableBundle:Produit")->findBy(array('categorie'=>$cat,'boutique'=>$id),array('note'=>'desc'),1,0); 
       $produitV=$em->getRepository("MyappResponsableBundle:Produit")->findBy(array('categorie'=>$cat,'boutique'=>$id),array('prixvente'=>'asc'),1,0);
       $boutiquefind=$em->getRepository("MyappResponsableBundle:Boutique")->find($id); 
     $modele  = $this->get('knp_paginator')->paginate($produitfind,$this->get('request')->query->get('page', 1)/*page number*/,12/*limit per page*/);
      return $this->render('MyappResponsableBundle:View1nour:Produitgrid.html.twig', array('produits'=>$modele,'boutique'=>$boutiquefind,'produitMs'=>$produitM,'produitV'=>$produitV));
  }
   public function afficherPDetailleAction($id,$bout)
    {
      $em=$this->container->get('doctrine')->getManager();
       $modelefind=$em->getRepository("MyappResponsableBundle:Produit")->find($id);
       $boutiquefind=$em->getRepository("MyappResponsableBundle:Boutique")->find($bout);
       $imagefind=$em->getRepository("MyappResponsableBundle:Image2")->findBy(array('produit'=>$id));
       
       
        
        $request=$this->get('request');
       
        $form = $this->get('form.factory')->createBuilder('form', $modelefind)
    ->add('note','rating')
    ->add('vote', 'submit')
    ->getForm()
    ;
        
     if($form->handleRequest($request)->isValid())
         {
        
         $modelefind->setNbreV($modelefind->getNbreV()+1);
         $modelefind->setNote($modelefind->getNbreV()/5+$modelefind->getNote());
            $em=$this->getDoctrine()->getManager();
            $em->persist($modelefind);
            $em->flush();
        // return ($this->redirectToRoute("afficher_produits"));    
        }
     
      return $this->render('MyappResponsableBundle:View1nour:afficherdetailleProduit.html.twig', array('modele'=>$modelefind,'f'=>$form->createView(),'images'=>$imagefind,'boutique'=>$boutiquefind));
    
      
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
    public function afficherProduitRespAction($id)
    {
        $em=$this->container->get('doctrine')->getManager();
   
       $produitfind=$em->getRepository("MyappResponsableBundle:Produit")->findBy(array("boutique"=>$id)); 
       $boutiquefind=$em->getRepository("MyappResponsableBundle:Boutique")->find($id); 
     $modele  = $this->get('knp_paginator')->paginate($produitfind,$this->get('request')->query->get('page', 1)/*page number*/,4/*limit per page*/);
      return $this->render('MyappResponsableBundle:View1nour:ResListeProduit.html.twig', array('produits'=>$modele,'boutique'=>$boutiquefind));
  
        
    }
    function SupprimerProduitResAction($id,$idb){
        $em=$this->getDoctrine()->getManager();
        $modele = $em->getRepository('MyappResponsableBundle:Produit')->find($id);
        
        $em->remove($modele);
        $em->flush();
      return ($this->redirect($this->generateUrl("afficherProduitResp",array('id'=>$idb)))) ;
    }
    
    public function modifierProduitResAction($id,$idb)
    {
        $em=$this->getDoctrine()->getManager();
        $modele= $em->getRepository('MyappResponsableBundle:Produit')->find($id);
        $modelform =new ProduitForm();
        $imagefind=$em->getRepository("MyappResponsableBundle:Image2")->findBy(array('produit'=>$id));
        $emImage=new ImageForm2(); 
        $image=new Image2() ;
         $formImage = $this->createForm($emImage, $image   );

    // On ajoute les champs de l'entité que l'on veut ? notre formulaire
   
    
  
       
        
        $form=$this->createForm($modelform, $modele);//il faut i entite et le model form
        
        $request=$this->get('request');
        
        if($form->handleRequest($request)->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($modele);
            $em->flush();
        return ($this->redirect($this->generateUrl("modifierProduitRes",array('id'=>$id,'idb'=>$idb))));       
        }
        $request=$this->get('request');
        if($formImage->handleRequest($request)->isValid()){
            $emI = $this->getDoctrine()->getManager();
           
             $emI->persist($image);
            $emI->flush();
           
            
        return ($this->redirect($this->generateUrl("modifierProduitRes",array('id'=>$id,'idb'=>$idb))));    
        }
    return $this->render('MyappResponsableBundle:View1nour:ResmodifierProduit.html.twig',array('f'=>$form->createView(),'f2'=>$formImage->createView(),'modele'=>$modele,'images'=>$imagefind,'boutiqueid'=>$idb));    
    }
    
    function SupprimerImageProduitResAction($id,$idp,$idb){
        $em=$this->getDoctrine()->getManager();
        $modele = $em->getRepository('MyappResponsableBundle:Image2')->find($id);
        $em->remove($modele);
        $em->flush();
        return ($this->redirect($this->generateUrl("modifierProduitRes",array('id'=>$idp,'idb'=>$idb))));       
         
    }
    
    
     public function ajouterProduitResAction($id)
    { $model=new Produit(); 
        $modelForm=new ProduitForm(); 
        $form = $this->createForm($modelForm, $model);
         $emImage=new ImageForm2(); 
        $image=new Image2() ;
         $formImage = $this->createForm($emImage, $image   );

//creation du formulaire //instancier un objet form qui quit un type qui est enrelation avec un type
        $request=$this->get('request');
        if($form ->handleRequest($request)->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($model);
            $em->flush();  
            return ($this->redirect($this->generateUrl("afficherProduitResp",array('id'=>$id))));
            
        }
        
         $request=$this->get('request');
        if($formImage->handleRequest($request)->isValid()){
            $emI = $this->getDoctrine()->getManager();
            
             $emI->persist($image);
            $emI->flush();
               
        return ($this->redirect($this->generateUrl("ajouterProduitRes",array('id'=>$id))));    
        }
        return $this->render('MyappResponsableBundle:View1nour:ResAjoutproduit.html.twig',array('f'=>$form->createView(),'f2'=>$formImage->createView(),'id'=>$id));////une vue ne peut pas dessiner un objet c'est pour cela la methode createview l'aide pour dessiner ce formulaire
    }
    function AjouterProduit2Action(){
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
    
    
    
    
    
     public function testResAction()
    {
        return $this->render('MyappResponsableBundle:View1nour:testimage.html.twig',array());
          
    }
    
    public function afficher_produit_soldeAction()
    {  $em=$this->container->get('doctrine')->getManager();
       $produitfind=$em->getRepository("MyappResponsableBundle:Produit")->findBy(array("solde"=>'oui')); 
      $modele  = $this->get('knp_paginator')->paginate($produitfind,$this->get('request')->query->get('page', 1)/*page number*/,12/*limit per page*/);
    
     return $this->render('MyappResponsableBundle:View1nour:afficher_produit_solde.html.twig', array('produits'=>$modele));
     
     }
     public function afficher_produit_evenementAction()
    {  $em=$this->container->get('doctrine')->getManager();
       $produitfind=$em->getRepository("MyappResponsableBundle:Produit")->findBy(array("categorie"=>'event')); 
      $modele  = $this->get('knp_paginator')->paginate($produitfind,$this->get('request')->query->get('page', 1)/*page number*/,12/*limit per page*/);
    
     return $this->render('MyappResponsableBundle:View1nour:afficher_produit_evenement.html.twig', array('produits'=>$modele));
     
     }
      public function afficher_produit_newAction()
    {  $em=$this->container->get('doctrine')->getManager();
       $produitfind=$em->getRepository("MyappResponsableBundle:Produit")->findBy(array("year"=>"2015")); 
      $modele  = $this->get('knp_paginator')->paginate($produitfind,$this->get('request')->query->get('page', 1)/*page number*/,12/*limit per page*/);
    
     return $this->render('MyappResponsableBundle:View1nour:afficher_produit_new.html.twig', array('produits'=>$modele));
     
     }
     
}
