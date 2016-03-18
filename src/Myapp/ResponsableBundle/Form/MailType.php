<?php
namespace pi2\tstBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class MailType extends AbstractType{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', 'text', array('label'  => 'Nom', 'attr'   =>  array('class'   => 'form-control')))
            ->add('prenom', 'text', array('label'  => 'Prenom', 'attr'   =>  array('class'   => 'form-control')))
            ->add('tel', 'number', array('label'  => 'Tel', 'attr'   =>  array('class'   => 'form-control')))
            ->add('from','email')
            ->add('text', 'text', array('label'  => 'Titre', 'attr'   =>  array('class'   => 'form-control')))
            ->add('valider', 'submit') 
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'pi2\tstBundle\Entity\Mail'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'Mail';
    }
}
