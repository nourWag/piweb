<?php
namespace Myapp\adminBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Myapp\ResponsableBundle\Entity\Image;
use  Myapp\MyappadminBundle\Form\ImageForm;
use Myapp\adminBundle\Form\ImagepType;
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
//return $this->render('MyappadminBundle:image:index.html.twig', array()); 
} 
return $this->render('MyappadminBundle:image:upload.html.twig', 
array('Form'=>$form->createView())); 
}

 function listAction()
{
   $em=$this->getDoctrine()->getManager();
   $model=$em->getRepository
    ('MyappResponsableBundle:Image')->findAll();
    return $this->render
 ('MyappadminBundle:image:affiche.html.twig',array('mod'=>$model));
}

 public function supprimerAction($id)
    { $em = $this->getDoctrine()->getManager();
$modeles =
  $em->getRepository
     ('MyappResponsableBundle:Image')->find($id);
                 $em->remove($modeles);
                 $em->flush();
return $this->redirect($this->generateUrl("affpack"));
    }

     public function ModifierAction($id) {
$em = $this->getDoctrine()->getManager();
$modele =$em->getRepository('MyappResponsableBundle:Image')
        ->find($id);
$formv=new ImagepType();
$form = $this->createForm($formv,$modele);
          $Request = $this->get('request');
  if( $form->handleRequest($Request)->isValid()){
            $em->persist($modele);  
          $em->flush();
return $this->redirect($this->generateUrl("affpack") );
            }
           return $this->render
  ('MyappadminBundle:Image:edit.html.twig',
  array('form' => $form->createView()));
            
     }
     
     
     
     
    public function list1Action() 
{ 
$em = $this->getDoctrine()->getManager(); 
$image=$em->getRepository('MyappResponsableBundle:Image')->findAll(); 
return $this->render('MyappadminBundle:image:list.html.twig', 
array('images'=>$image)); 
} 
    public function afficheAction($id) 
{ 
$em = $this->getDoctrine()->getManager(); 
$image=$em->getRepository('MyappResponsableBundle:Image')->find($id); 
return $this->render('MyappadminBundle:image:affiche.html.twig', 
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

                function listpaAction()
{
   $em=$this->getDoctrine()->getManager();
   $model=$em->getRepository
    ('MyappResponsableBundle:Image')->findAll();
    return $this->render
 ('MyappadminBundle:Administration:pages/layout/affichagepack.html.twig',array('mod'=>$model));
}









 public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MyappResponsableBundle:Image')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Image entity.');
        }

        $editForm = $this->createEditForm($entity);
      //  $deleteForm = $this->createDeleteForm($id);

        return $this->render('MyappadminBundle:Image:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
      //      'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Image entity.
    *
    * @param Image $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Image $entity)
    {
        $form = $this->createForm(new ImageType(), $entity, array(
            'action' => $this->generateUrl('image_updatepack', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Image entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MyappResponsableBundle:Image')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Image entity.');
        }

      //  $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('image_editpack', array('id' => $id)));
        }

        return $this->render('MyappadminBundle:Image:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    
    
        
    }
