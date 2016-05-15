<?php

namespace Myapp\ResponsableBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class LiraisonfType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */

   
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
//                 ->add('id', 'integer', array('label'  => 'id', 'attr'  =>  array('class'   => 'form-control')))
            ->add('nom', 'text', array('label'  => 'nom', 'attr'   =>  array('class'   => 'form-control')))
            ->add('prenom', 'text', array('label'  => 'prenom', 'attr'   =>  array('class'   => 'form-control')))
//            ->add('adresse')
            ->add('adresse', 'choice', array(
                'label'  => 'adresse'
                , 'attr'   =>  array('class'   => 'form-control'),
                'choices' =>array(1 => 'el kef', 2 => 'tunis', 3 => 'beja',4 => 'kasserine', 2 => 'nabeul', 3 => 'tatawine'),))
//            ->add('Numero de telephone:')
             ->add('telephone', 'text', array('label'  => 'telephone', 'attr'   =>  array('class'   => 'form-control')))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Myapp\userBundle\Entity\Liraisonf'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'Myapp_ResponsableBundle_liraisonf';
    }
}
