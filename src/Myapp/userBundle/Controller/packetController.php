<?php

namespace Myapp\userBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Myapp\userBundle\Entity\packet;
use Myapp\userBundle\Form\packetType;

/**
 * packet controller.
 *
 */
class packetController extends Controller
{

    /**
     * Lists all packet entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('MyappuserBundle:packet')->findAll();

        return $this->render('MyappuserBundle:packet:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new packet entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new packet();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('packet_show', array('id' => $entity->getId())));
        }

        return $this->render('MyappuserBundle:packet:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a packet entity.
     *
     * @param packet $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(packet $entity)
    {
        $form = $this->createForm(new packetType(), $entity, array(
            'action' => $this->generateUrl('packet_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new packet entity.
     *
     */
        function listAction()
{
   $em=$this->getDoctrine()->getManager();
   $model=$em->getRepository
    ('MyappuserBundle:Image')->findAll();
    return $this->render
 ('MyappuserBundle:packet:affichage.html.twig',array('mod'=>$model));
}
    public function newAction()
    {
        $entity = new packet();
        $form   = $this->createCreateForm($entity);

        return $this->render('MyappuserBundle:packet:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a packet entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MyappuserBundle:packet')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find packet entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('MyappuserBundle:packet:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing packet entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MyappuserBundle:packet')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find packet entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('MyappuserBundle:packet:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a packet entity.
    *
    * @param packet $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(packet $entity)
    {
        $form = $this->createForm(new packetType(), $entity, array(
            'action' => $this->generateUrl('packet_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing packet entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MyappuserBundle:packet')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find packet entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('packet_edit', array('id' => $id)));
        }

        return $this->render('MyappuserBundle:packet:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a packet entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('MyappuserBundle:packet')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find packet entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('packet'));
    }

    /**
     * Creates a form to delete a packet entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('packet_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
