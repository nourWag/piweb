<?php
namespace Myapp\ResponsableBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Myapp\ResponsableBundle\Entity\Image;
use Myapp\ResponsableBundle\Form\ImageForm;

class ImageController extends Controller {

    public function uploadAction() 
{ 
$im=new Image(); 
$form = $this->createForm(new ImageForm(), $im); 
$request = $this->get('request_stack')->getCurrentRequest(); 
$form->handleRequest($request); 
if ($form->isValid()) 
{ 
$em = $this->getDoctrine()->getManager(); 
$stream = fopen($im->getFile(),'rb'); 
$im->setImg(stream_get_contents($stream)); 
$em->persist($im); 
$em->flush(); 
return $this->render('MyappResponsableBundle:image:index.html.twig', array()); 
} 
return $this->render('MyappResponsableBundle:image:upload.html.twig', 
array('Form'=>$form->createView())); 
} 

    public function listAction() 
{ 
$em = $this->getDoctrine()->getManager(); 
$image=$em->getRepository('MyappResponsableBundle:Image')->findAll(); 
return $this->render('MyappResponsableBundle:image:list.html.twig', 
array('images'=>$image)); 
} 
    public function afficheAction($id) 
{ 
$em = $this->getDoctrine()->getManager(); 
$image=$em->getRepository('MyappResponsableBundle:Image')->find($id); 
return $this->render('MyappResponsableBundle:image:affiche.html.twig', 
array('images'=>$image)); 
} 
public function photoAction($id)
        { $em = $this->getDoctrine()->getManager(); 
        $image_obj = $em->getRepository('MyappResponsableBundle:Image')->find($id); 
        $photo=$image_obj->getImg(); 
        $response = new StreamedResponse(function () use ($photo) { echo stream_get_contents($photo); 
        
        }
        );
        $response->headers->set('Content-Type', 'image/jpeg'); return $response; }

    }
