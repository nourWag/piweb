<?php

namespace Myapp\adminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use  Myapp\adminBundle\Entity\Pages;
use  Myapp\adminBundle\Form\PagesType;

/**
 * Pages controller.
 *
 */
class PagesAdminController extends Controller
{

     
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('MyappadminBundle:Pages')->findAll();

        return $this->render('MyappadminBundle:Administration:pages/layout/index.html.twig', array(
            'entities' => $entities,
        ));
    }
       public function index1Action()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('MyappadminBundle:Pages')->findAll();

        return $this->render('MyappadminBundle::layoutAd.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Pages entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Pages();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('adminPages_show', array('id' => $entity->getId())));
        }

        return $this->render('MyappadminBundle:Administration:pages/layout/new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Pages entity.
    *
    * @param Pages $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Pages $entity)
    {
        $form = $this->createForm(new PagesType(), $entity, array(
            'action' => $this->generateUrl('adminPages_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Pages entity.
     *
     */
    public function newAction()
    {
        $entity = new Pages();
        $form   = $this->createCreateForm($entity);

        return $this->render('MyappadminBundle:Administration:pages/layout/new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Pages entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MyappadminBundle:Pages')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Pages entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('MyappadminBundle:Administration:pages/layout/show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }
    public function listAction() 
{ 
$em = $this->getDoctrine()->getManager(); 
$image=$em->getRepository('MyappadminBundle:Pages')->findAll(); 
return $this->render('MyappadminBundle:Administration:pages/layout/show.html.twig', 
array('images'=>$image)); 
} 
    /**
     * Displays a form to edit an existing Pages entity.
     *
     */
    public function editAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MyappadminBundle:Pages')->find($id=11);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Pages entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id=11);

        return $this->render('MyappadminBundle:Administration:pages/layout/edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Pages entity.
    *
    * @param Pages $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Pages $entity)
    {
        $form = $this->createForm(new PagesType(), $entity, array(
            'action' => $this->generateUrl('adminPages_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Pages entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MyappadminBundle:Pages')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Pages entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('adminPages_edit', array('id' => $id)));
        }

        return $this->render('MyappadminBundle:Administration:pages/layout/edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Pages entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('MyappadminBundle:Pages')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Pages entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('adminPages'));
    }

    /**
     * Creates a form to delete a Pages entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('adminPages_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
