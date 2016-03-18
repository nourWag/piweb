<?php
namespace Myapp\ResponsableBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Myapp\ResponsableBundle\Entity\boutique;
use Myapp\ResponsableBundle\Entity\Image;
use Myapp\ResponsableBundle\Form\boutiqueType;
use Myapp\ResponsableBundle\Form\ImageForm;
class boutiqueController extends Controller {
//    function ajout2Action(){
//        $model=new boutique(); 
//        $modelForm=new boutiqueType(); 
//        $form = $this->createForm($modelForm, $model); //creation du formulaire //instancier un objet form qui quit un type qui est enrelation avec un type
//        $request=$this->get('request');
//        if($form ->handleRequest($request)->isValid()){
//            $em=$this->getDoctrine()->getManager();
//            $em->persist($model);
//            $em->flush();
//        return $this->redirect($this->generateUrl("pi2tst_homepage5"));            
//        }
//        return $this->render('pi2tstBundle:View1:ajout1.html.twig',array('f'=>$form->createView()));////une vue ne peut pas dessiner un objet c'est pour cela la methode createview l'aide pour dessiner ce formulaire
//    }
    function ajout2Action(){
        $model=new boutique();//instanciation de lentite
        $requette=$this->get('request');
        if($requette->getMethod()=="POST")
        {
            $libelle=$requette->get('nom'); //name qui est dans le formulaire //on est en train de recuperer
            $pays=$requette->get('emplacement');//recupere
            $pays2=$requette->get('promotion');//recupere
            $model->setNom($libelle);//set pour manipuler
            $model->setCategorie($pays);
            $model->setPromotion($pays2);
            $em=$this->getDoctrine()->getManager(); //on fait appel a l'entite manager qui est le gestionnaire des entites//
            $em->persist($model); //persist =insert into table //l'orm persist des objets dans la base de donnees
            $em->flush(); //exec executer a requete //il va faire la construction d une ligne
       return $this->redirect($this->generateUrl("pi2tst_homepage5"));
        }
        return $this->render('MyappResponsableBundle:View1:ajout.html.twig',array());
        
    }
    
    function listAction(){
        $em=$this->container->get('doctrine')->getManager();  //instancier la doctrine et le manager
        $modele=$em->getRepository('MyappResponsableBundle:boutique')->findAll();
        return $this->render('MyappResponsableBundle:View1:list.html.twig',array('modele'=>$modele));
    
    }
    function rechercheAction()
    {
        $em = $this->getDoctrine()->getManager();
        $modeles = $em->getRepository('MyappResponsableBundle:boutique')->findAll();
        $request = $this->getRequest();
        if ($request->getMethod()=="POST")
        {
        $search1=$request->get('search1');
        //$search2=$request->get('search2');
        $modeles=$em->getRepository('MyappResponsableBundle:boutique')->findBy(array("nom"=>$search1));        
        // $modeles=$em->getRepository('CalendrierMedecinsBundle:Patient')->findBy(array("nom"=>$search1,"prenom"=>$search2));        

        
     }
       
        return $this->render('MyappResponsableBundle:View1:rechercheBoutique.html.twig',array("modeles"=>$modeles));
    }
    function modifierAction($id){
       $em=$this->getDoctrine()->getManager();
        $modele= $em->getRepository('MyappResponsableBundle:boutique')->find($id);
        $modelform =new boutiqueType();
        $form=$this->createForm($modelform, $modele);//il faut i entite et le model form
        $request=$this->get('request');
        if($form->handleRequest($request)->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($modele);
            $em->flush();
        return $this->redirect($this->generateUrl("pi2tst_homepage5"));    
        }
    return $this->render('MyappResponsableBundle:View1:update.html.twig',array('f'=>$form->createView()));    
    }    
    
    

function supprimerAction($id){
        $em=$this->getDoctrine()->getManager();
        $modele = $em->getRepository('MyappResponsableBundle:boutique')->find($id);
        $em->remove($modele);
        $em->flush();
       return $this->redirect($this->generateUrl("pi2tst_homepage5"));
    }
  
}
