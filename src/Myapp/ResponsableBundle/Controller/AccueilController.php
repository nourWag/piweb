<?php
namespace Myapp\ResponsableBundle\Controller;
use \Symfony\Bundle\FrameworkBundle\Controller\Controller;
class AccueilController extends Controller{
     public function indexAction()
    {
        return $this->render('MyappResponsableBundle:View1:acc.html.twig', array());
    }

     public function BoutiqueAction()
    {
        return $this->render('MyappResponsableBundle:View1:Boutique.html.twig', array());
    }
}
