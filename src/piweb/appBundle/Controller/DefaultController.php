<?php

namespace piweb\appBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('piwebappBundle:Default:index.html.twig', array('name' => $name));
    }
}
