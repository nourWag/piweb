<?php

namespace Myapp\visiteurBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('MyappvisiteurBundle:Default:index.html.twig', array('name' => $name));
    }
}
