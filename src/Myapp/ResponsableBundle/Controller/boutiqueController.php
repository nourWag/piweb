<?php
namespace Myapp\ResponsableBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Kitpages\DataGridBundle\Grid\GridConfig;
use Kitpages\DataGridBundle\Paginator\PaginatorConfig;
use Kitpages\DataGridBundle\Grid\Field;
use Symfony\Component\HttpFoundation\Request;
use Myapp\ResponsableBundle\Entity\boutique;
use Myapp\ResponsableBundle\Entity\Image;
use Myapp\ResponsableBundle\Form\boutiqueType;
use Myapp\ResponsableBundle\Form\ImageForm;
use Symfony\Component\HttpFoundation\JsonResponse;
use Myapp\adminBundle\Entity\User;

class boutiqueController extends Controller {
    public function productListAction(Request $request)
    {

        $userId = $this->get('security.context')->getToken()->getUser();
        $repository = $this->getDoctrine()->getRepository('MyappResponsableBundle:boutique');
        
         $em=$this->container->get('doctrine')->getManager();  //instancier la doctrine et le manager
        $modele=$em->getRepository('MyappResponsableBundle:boutique')->findByUserId($userId);
        
        
        $queryBuilder = $repository->createQueryBuilder('boutique')->orderBy('boutique.nom')->groupBy('boutique.id')
            ->where('boutique.userId = :id_user')
               
            ->setParameter('id_user', $userId);
        $gridConfig = new GridConfig();
        $gridConfig
            ->setQueryBuilder($queryBuilder)
            ->setCountFieldName('boutique.id')
            ->addField(new Field('boutique.nom',['label'=>'Nom', 'filterable'=>true]))
            ->addField(new Field('boutique.categorie',['label'=>'Categorie', 'filterable'=>true]))
            ->addField(new Field('boutique.Fax',['label'=>'Description', 'filterable'=>true]))
            ->addField(new Field('boutique.numero_telephone',['label'=>'numero_telephone', 'filterable'=>true]))
            ->addField(new Field('boutique.Email',['label'=>'Email', 'filterable'=>true]))
                
            ->addField(new Field('boutique.promotion',['label'=>'promotion', 'filterable'=>true]))
               ;
            
//          ->addField('boutique.id', array(
//                'sortable' => true,
//                'formatValueCallback' => function($value) 
////        {
////            return $value->format('Y/m/d');    
////        }
//            ))
//                 // Paginator config
//    $this->setGridPaginato($gridConfig, 1);

     // paginator configuration
        $gridPaginatorConfig = new PaginatorConfig();
        $gridPaginatorConfig
                            ->setName($gridConfig->getName())
                            ->setCountFieldName($gridConfig->getCountFieldName())
                            ->setItemCountInPage(2);
        
        $gridConfig->setPaginatorConfig($gridPaginatorConfig);
       // $grid = $gridManager->getGrid($gridConfig, $request);
        $gridManager = $this->get('kitpages_data_grid.grid_manager');
        $grid = $gridManager->getGrid($gridConfig, $request);

        return $this->render('MyappResponsableBundle:Default:productList.html.twig', array(
            'grid' => $grid, 'modele'=>$modele));

    }
//    foreach ($ligneCmd as $cmd) {
//            $tab[$i] = $cmd;
//            $id = $tab[$i]->getProduit()->getId();
//            $cc = null;
//            if
//            ($id == $produit->getId()) {
//                $cc = $tab[$i];
//                break;
//            } else {
//                
//            }
//            $i++;
//        }


    function ajout2Action(){
        $repository = $this->getDoctrine()->getRepository('MyappResponsableBundle:boutique');
        $userId = $this->get('security.context')->getToken()->getUser();//il est en train de recuperer el user
        $model=new boutique(); 
        $modelForm=new boutiqueType(); 
        $form = $this->createForm($modelForm, $model); //creation du formulaire //instancier un objet form qui quit un type qui est enrelation avec un type
        $request=$this->get('request');
      
        if($form ->handleRequest($request)->isValid()){
           // $model-> setUserId($userId);
            $em=$this->getDoctrine()->getManager();         
            $model->setUserId($userId);
          
            $em->persist($model);
            $em->flush();
        return $this->redirect($this->generateUrl("respensablePages"));            
        }
        return $this->render('MyappResponsableBundle:View2:ajout1.html.twig',array('f'=>$form->createView()));////une vue ne peut pas dessiner un objet c'est pour cela la methode createview l'aide pour dessiner ce formulaire
    }
    
//    function ajout2Action(){
//        $model=new boutique();//instanciation de lentite
//        $requette=$this->get('request');
//        if($requette->getMethod()=="POST")
//        {
//            $nom=$requette->get('nom'); //name qui est dans le formulaire //on est en train de recuperer
//            $categorie=$requette->get('categorie');//recupere
//            $Fax=$requette->get('Fax');
//            $numero_telephone=$requette->get('numero_telephone');
//            $Email=$requette->get('Email');
//            $promotion=$requette->get('promotion');//recupere
//            $Description=$requette->get('Description');
//            
//            $model->setNom($nom);//set pour manipuler
//            $model->setCategorie($categorie);
//            $model->setFax($Fax);
//            $model->setNumero_telephone($numero_telephone);
//            $model->setEmail($Email);
//            $model->setPromotion($promotion);
//            $model->setDescription($Description);
//            $em=$this->getDoctrine()->getManager(); //on fait appel a l'entite manager qui est le gestionnaire des entites//
//            $em->persist($model); //persist =insert into table //l'orm persist des objets dans la base de donnees
//            $em->flush(); //exec executer a requete //il va faire la construction d une ligne
//       return $this->redirect($this->generateUrl("path_list"));
//        }
//        return $this->render('MyappResponsableBundle:View2:ajout.html.twig',array());
//        
//    }
    
    function listAction(){
        
        $userId = $this->get('security.context')->getToken()->getUser();
        $em=$this->container->get('doctrine')->getManager();  //instancier la doctrine et le manager
        $modele=$em->getRepository('MyappResponsableBundle:boutique')->findByUserId($userId);
        return $this->render('MyappResponsableBundle:View2:list.html.twig',array('modele'=>$modele));
    
    }
    
    function list_categorie1Action(){
        $em=$this->container->get('doctrine')->getManager();  //instancier la doctrine et le manager
        $modele=$em->getRepository('MyappResponsableBundle:boutique')->findByCategorie('Fashion et Beaute');
    return $this->render('MyappResponsableBundle:View2:list_cat.html.twig',array('modele'=>$modele));
    }
    
    function list_categorie2Action(){
        $em=$this->container->get('doctrine')->getManager();  //instancier la doctrine et le manager
        $modele=$em->getRepository('MyappResponsableBundle:boutique')->findByCategorie('Electronique et Ordinateurs');
        return $this->render('MyappResponsableBundle:View2:list_cat.html.twig',array('modele'=>$modele));
    
    }
    function list_categorie4Action(){
        $em=$this->container->get('doctrine')->getManager();  //instancier la doctrine et le manager
        $modele=$em->getRepository('MyappResponsableBundle:boutique')->findByCategorie('Restauration');
        return $this->render('MyappResponsableBundle:View2:list_cat.html.twig',array('modele'=>$modele));
    
    }
        function ListCategorie3Action($nom){
            $em = $this->getDoctrine()->getManager();
        $modele = $em->getRepository('MyappResponsableBundle:boutique')->findByNom($nom);
        return $this->render('MyappResponsableBundle:View2:list_cat3.html.twig', array('modele' => $modele));
    } 
    function ListPromotionAction(){
            $em = $this->getDoctrine()->getManager();
         $v ='0';
        $modele = $em->getRepository('MyappResponsableBundle:boutique')->findByPromotion($v);
        return $this->render('MyappResponsableBundle:View2:list_promotion.html.twig', array('modele' => $modele));
    } 
    //////////////////////////
    function rechercheAction(){
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
        return $this->redirect($this->generateUrl("path_list"));    
        }
    return $this->render('MyappResponsableBundle:View2:update.html.twig',array('f'=>$form->createView()));    
    }    
    
    

    function supprimerAction($id){
        $em=$this->getDoctrine()->getManager();
        $modele = $em->getRepository('MyappResponsableBundle:boutique')->find($id);
        $em->remove($modele);
        $em->flush();
       return $this->redirect($this->generateUrl("respensablePages"));
    }
    
    public function rechercherAction() {
        $request = $this->getRequest();
        if($request->isXmlHttpRequest()) {
             
            $nomPhoto = '';
            $nomPhoto = $request->request->get('nomphoto');
             
            $em = $this->getDoctrine()->getEntityManager();
             
            if($nomPhoto != '') {
                $qb = $em->createQueryBuilder();
 
                $qb->select('p')
                    ->from('MyappResponsableBundle:boutique', 'p')
                    ->where("p.categorie LIKE :nomphoto")
                    ->setParameter('nomphoto', '%'.$nomPhoto.'%');
 
                $query = $qb->getQuery();              
                $photos = $query->getResult();
            } else {
                $photos = $em->getRepository('MyappResponsableBundle:boutique')->findAll();
            }
            return $this->render('MyappResponsableBundle:boutique:RechTwig.html.twig', array(
                'photos' => $photos,
            ));
        } else {
            return $this->listerAction();
        }
    }
    
    public function villesAction($id) 
    {
        $em = $this->getDoctrine()->getManager();
        $villeCodePostal = $em->getRepository('MyappResponsableBundle:boutique')->findOneBy(array('id' => $id));
        
        if ($villeCodePostal) {
            $ville = $villeCodePostal->getCategorie();
        } else {
            $ville = null;
        }
        
        $response = new JsonResponse();
        return $response->setData(array('ville' => $ville));
    }
     public function indexAction()
    {
        $repository = $this->container->get('custom.repository');
        $entities = $repository->getItems();
 
        return array('entities' => $entities);
    }
    function essaiAction(){
        
        return $this->render('MyappResponsableBundle:View2:javatwig.html.twig',array());
    
    }
    ////////////////////////////
    
//   public function imageAjoutFAction(Request $request)
//    {
//    // On crée un objet Advert
//    $image = new Image2();
//
//    // On crée le FormBuilder grâce au service form factory
//    $form = $this->get('form.factory')->createBuilder('form', $image)
//
//    // On ajoute les champs de l'entité que l'on veut ? notre formulaire
//   
//    ->add('imageName',      'text')
//    ->add('imageFile',     'file')
//    ->add('save',      'submit')
//    ->getForm()
//    ;
//
//    $form->handleRequest($request);
//
//    // On vérifie que les valeurs entrées sont correctes
//    // (Nous verrons la validation des objets en détail dans le prochain chapitre)
//    if ($form->isValid()) {
//      // On l'enregistre notre objet $advert dans la base de données, par exemple
//      $em = $this->getDoctrine()->getManager();
//
//      $em->persist($image);
//
//      $em->flush();
//
//      $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');
//
//      // On redirige vers la page de visualisation de l'annonce nouvellement créée
//      //return $this->redirect($this->generateUrl('oc_platform_view', array('id' => $advert->getId())));
//    return $this->render('MyappResponsableBundle:View1nour:add.html.twig', array(
//      'form' => $form->createView(),
//    ));
//    }
//
//    return $this->render('MyappResponsableBundle:View1nour:add.html.twig', array(
//      'form' => $form->createView(),
//    ));
//    }
//    public function afficherImagePAction()
//    {
//        $em=$this->container->get('doctrine')->getManager(); 
//        
//        $entity=$em->getRepository("MyappResponsableBundle:Image2")->findAll();
//        $e=new ImageType();
//        $form=$this->createForm($e, $entity);       
////$helper = $this->container->get('vich_uploader.templating.helper.uploader_helper');
////$path = $helper->asset($entity, 'imageFile');
//        return $this->render('MyappResponsableBundle:View1nour:afficherImage.html.twig', array('product' => $entity,'f'=>$form->createView()));
//    }
}

    
 
