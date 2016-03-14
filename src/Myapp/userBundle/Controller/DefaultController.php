<?php

namespace Myapp\userBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('MyappuserBundle:Default:index.html.twig', array('name' => $name));
    }
}
