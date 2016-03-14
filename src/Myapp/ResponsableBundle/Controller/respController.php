<?php
namespace Myapp\ResponsableBundle\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of respController
 *
 * @author snoussi
 */
class respController extends Controller {
   public function affAction()
    {
        return $this->render('MyappResponsableBundle::layoutAd.html.twig',array());
          
    }
    public function indexAction()
    {
        return $this->render('MyappResponsableBundle:layoutprofile:layoutAd.html.twig', array());
    }

}
