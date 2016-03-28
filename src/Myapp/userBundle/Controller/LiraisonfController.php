<?php

namespace Myapp\userBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use  Myapp\userBundle\Entity\Liraisonf;
use  Myapp\userBundle\Form\LiraisonfType;

/**
 * Liraisonf controller.
 *
 */
class LiraisonfController extends Controller
{

    /**
     * Lists all Liraisonf entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('MyappuserBundle:Liraisonf')->findAll();

        return $this->render('MyappuserBundle:Liraisonf:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Liraisonf entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Liraisonf();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('liraisonf_show', array('id' => $entity->getId())));
        }

        return $this->render('MyappuserBundle:Liraisonf:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Liraisonf entity.
     *
     * @param Liraisonf $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Liraisonf $entity)
    {
        $form = $this->createForm(new LiraisonfType(), $entity, array(
            'action' => $this->generateUrl('liraisonf_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'ajouter'));

        return $form;
    }

    /**
     * Displays a form to create a new Liraisonf entity.
     *
     */
    public function newAction()
    {
        $entity = new Liraisonf();
        $form   = $this->createCreateForm($entity);

        return $this->render('MyappuserBundle:Liraisonf:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Liraisonf entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MyappuserBundle:Liraisonf')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Liraisonf entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('MyappuserBundle:Liraisonf:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Liraisonf entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MyappuserBundle:Liraisonf')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Liraisonf entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('MyappuserBundle:Liraisonf:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Liraisonf entity.
    *
    * @param Liraisonf $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Liraisonf $entity)
    {
        $form = $this->createForm(new LiraisonfType(), $entity, array(
            'action' => $this->generateUrl('liraisonf_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'modifier'));

        return $form;
    }
    /**
     * Edits an existing Liraisonf entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MyappuserBundle:Liraisonf')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Liraisonf entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('liraisonf_edit', array('id' => $id)));
        }

        return $this->render('MyappuserBundle:Liraisonf:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Liraisonf entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('MyappuserBundle:Liraisonf')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Liraisonf entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('liraisonf'));
    }

    /**
     * Creates a form to delete a Liraisonf entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('liraisonf_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'supprimer'))
            ->getForm()
        ;
    }
    public function RechercheAction()
    {
        $em = $this->getDoctrine()->getManager();
$modeles = $em->getRepository
        ('MyappuserBundle:Liraisonf')->findAll();
        $request = $this->get('request');
        if ($request->getMethod()=="POST")
        {
$search=$request->get('search');
$modeles=$em->getRepository
        ('MyappuserBundle:Liraisonf')->
                findBy(array("nom"=>$search));        
        }
        
        return $this->render
('MyappuserBundle:Liraisonf:recherche.html.twig'
                ,array("modeles"=>$modeles));
    }
}
