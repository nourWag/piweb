<?php

namespace Myapp\adminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PagesController extends Controller
{
    public function menuAction()
    {
        $em = $this->getDoctrine()->getManager();
        $pages = $em->getRepository('testMyapppagesBundle:Pages')->findAll();
        
        return $this->render('testMyapppagesBundle:Default:pages/modulesUsed/menu.html.twig', array('pages' => $pages));
    }
    
    public function pageAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $page = $em->getRepository('testMyapppagesBundle:Pages')->find($id);
        
        if (!$page) throw $this->createNotFoundException('La page n\'existe pas.');
        
        return $this->render('testMyapppagesBundle:Default:pages/layout/pages.html.twig', array('page' => $page));
    }
}
