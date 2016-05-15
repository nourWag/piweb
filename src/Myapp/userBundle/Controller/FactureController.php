<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FactureController
 *
 * @author sawssen
 */
namespace Myapp\userBundle\Controller;
use \Symfony\Bundle\FrameworkBundle\Controller\Controller;
use \Symfony\Component\HttpFoundation\Response;
use \Symfony\Component\HttpFoundation\Request;
use piweb\MyappuserBundle\Entity\Panierproduit;
use piweb\MyappuserBundle\Entity\Panier;
use piweb\MyappResponsableBundle\Entity\Produit;
use piweb\MyappuserBundle\Entity\ProduitPan;
use Symfony\Component\HttpFoundation\Session\Session;
use Doctrine\ORM\Query\ResultSetMapping;
use piweb\MyappadminBundle\Entity\User;
use Myapp\userBundle\Entity\Facture;
use Myapp\userBundle\Entity\LigneFacture;
class FactureController extends Controller{
    
        function ajouterAction()
        {
            
            $em=$this->getDoctrine()->getManager();
            $queryMax = $em->createQuery('SELECT MAX(f.num_sequentiel) FROM MyappuserBundle:Facture f');
        $numseq = $queryMax->getSingleScalarResult();

            $model=new Facture();
            
            $model->setNum_sequentiel($numseq+1);
            $model->setDate_creation(date("d-m-Y H:i:s"));
            
            $em->persist($model);
            $em->flush();
        ///
        $response=new Response();
            $panier=1;//$session->get('panier');
            
               $repository = $this->getDoctrine()
        ->getRepository('MyappuserBundle:Panier');
        $userId = $this->get('security.context')->getToken()->getUser()->getId();

        $panier = $repository->findOneBy(array('idUser' => $userId));
       
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
               $query->setParameter(1, $panier->getIdPan());
             //les produit quiexistedans le panier
                $produit = $query->getResult();
                
             //
                 $lignefact = array();
                 
                 foreach ($produit as $prod)
                 {
                     $lf=new LigneFacture();
                     //$lf.setIdFact($prod->);
                     $lf->setIdPr($prod->getIdpr());
                     $lf->setQuantite($prod->getQuantite());
                     $lf->setFacture($model);
                     
                             
                     //$lignefact[]=$lf;
                     array_push($lignefact, $lf);
            
            
                    $em->persist($lf);
                    $em->flush();
                    
                 }
                // var_dump($lignefact);
                 
                 //
              // return $this->render('MyappuserBundle:Facture:FactureView.html.twig');
               $content = $this->renderView('MyappuserBundle:Facture:FacturePDF.html.twig',array('produits'=>$produit,'facture'=>$model));
                $pdfData = $this->get('obtao.pdf.generator')->outputPdf($content);
               // return $this->render('MyappuserBundle:Facture:PanierView.html.twig',array('produits'=>$produit));
                 $pdfData = $this->get('obtao.pdf.generator')->outputPdf($content,array('font'=>'Georgia','format'=>'L'));

                $response = new Response($pdfData);
                $response->headers->set('Content-Type', 'application/pdf');

                return $response;   
                 
        
        }
      
}
