<?php

namespace Myapp\adminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('MyappadminBundle:Default:index.html.twig', array('name' => $name));
    }
}
