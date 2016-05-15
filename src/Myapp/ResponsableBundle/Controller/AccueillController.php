<?php
namespace Myapp\ResponsableBundle\Controller;
use \Symfony\Bundle\FrameworkBundle\Controller\Controller;
class AccueillController extends Controller{
      public function indexAction()
    {
         
        return $this->render('MyappResponsableBundle:View1nour:accueil.html.twig', array());
    }
    public function registerAction()
    {
        return $this->render('MyappResponsableBundle:View1nour:register.html.twig', array());
    }
}
