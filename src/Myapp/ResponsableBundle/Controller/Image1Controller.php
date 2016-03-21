<?php
namespace Myapp\ResponsableBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use  Myapp\ResponsableBundle\Form\Image1Form;
use  Myapp\ResponsableBundle\Entity\Image;
use Symfony\Component\HttpFoundation\StreamedResponse;

class Image1Controller extends Controller
{
   public function uploadAction($id)
{
    $im=new Image();
     $em = $this->getDoctrine()->getManager();
     $im=$em->getRepository('MyappResponsableBundle:Image')->find($id);
    $form =    $this->createForm(new Image1Form(), $im);
    $request = $this->get('request_stack')->getCurrentRequest();
        $form->handleRequest($request);
        if ($form->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $stream = fopen($im->getFile(),'rb');
            $im->setImg(stream_get_contents($stream));
            $em->persist($im);
            $em->flush();
             return  ($this->redirect($this->generateUrl('modifierProduit',  array('id'=>$id))));
        }
    return $this->render('MyappResponsableBundle:View1nour:uploadImageModifier.html.twig',
     array('Form'=>$form->createView(),'image'=>$im));
}
 public function upload2Action($id)
{
    $im=new Image();
     $em = $this->getDoctrine()->getManager();
     $im=$em->getRepository('MyappResponsableBundle:Image')->find($id);
    $form =    $this->createForm(new ImageForm(), $im);
    $request = $this->get('request_stack')->getCurrentRequest();
        $form->handleRequest($request);
        if ($form->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $stream = fopen($im->getFile(),'rb');
            $im->setImg(stream_get_contents($stream));
            $em->persist($im);
            $em->flush();
            return $this->render('MyappResponsableBundle:imagenour:index.html.twig', array());
        }
    return $this->render('MyappResponsableBundle:imagenour:uploadImageModifier.html.twig',
     array('Form'=>$form->createView(),'image'=>$im));
}
public function uploadAjoutAction($id)
{
    $im=new Image();
     $em = $this->getDoctrine()->getManager();
      $im->setProduit($id);
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
            return  ($this->redirect($this->generateUrl('modifierProduit',  array('id'=>$id))));
        }
    return $this->render('MyappResponsableBundle:View1nour:ajouterimageProduit.html.twig',
     array('Form'=>$form->createView(),'image'=>$im));
}
public function listAction()
{
    $em = $this->getDoctrine()->getManager();
    $image=$em->getRepository('MyappResponsableBundle:Image')->findAll();
    return $this->render('MyappResponsableBundle:imagenour:list.html.twig',
     array('images'=>$image));
}
public function afficheAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $image=$em->getRepository('MyappResponsableBundle:Image')->find($id);
        return $this->render('MyappResponsableBundle:imagenour:affiche.html.twig',
         array('images'=>$image));
    }
    public function photoAction($id)
   {
       $em = $this->getDoctrine()->getManager();
       $image_obj=new Image();
       $image_obj = $em->getRepository('MyappResponsableBundle:Image')->findOneBy(array('produit'=>$id));
       $photo=$image_obj->getImg();
       $response = new StreamedResponse(function () use ($photo) {
           echo stream_get_contents($photo);
       });
       $response->headers->set('Content-Type', 'image/jpeg');
       return $response;
   }
   public function photo2Action($id)
   {
       $em = $this->getDoctrine()->getManager();
       $image_obj=new Image();
       $image_obj = $em->getRepository('MyappResponsableBundle:Image')->find($id);
       $photo=$image_obj->getImg();
       $response = new StreamedResponse(function () use ($photo) {
           echo stream_get_contents($photo);
       });
       $response->headers->set('Content-Type', 'image/jpeg');
       return $response;
   }
      
   public function uploadAjoutProduitAction()
{
    $im=new Image();
     $em = $this->getDoctrine()->getManager();
    
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
            return ($this->redirect($this->generateUrl("afficher_produits")));
        }
        return $this->render('MyappResponsableBundle:View1nour:ajouterPlesieursImage.html.twig',array('m'=>$em,'Form'=>$form->createView()));  
    
}
}
