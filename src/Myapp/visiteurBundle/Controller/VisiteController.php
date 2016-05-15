<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of VisiteController
 *
 * @author sawssen
 */
namespace Myapp\visiteurBundle\Controller;
use \Symfony\Bundle\FrameworkBundle\Controller\Controller;
class VisiteController extends Controller{
    function visiterAction()
        {
        return $this->render('MyappvisiteurBundle:VisiteVirtuelle:visite.html.twig');
        }
    
}
