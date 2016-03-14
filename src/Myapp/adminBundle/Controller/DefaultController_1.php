<?php

namespace Myapp\adminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('testMyapppagesBundle:Default:index.html.twig', array('name' => $name));
    }
}
