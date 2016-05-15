<?php

namespace Myapp\ResponsableBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class boutiqueType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom','text',array('required'=>true))
            ->add('categorie', 'choice', array('choices'=>array('Fashion et Beaute'=>'Fashion et Beaute',
                'Electronique et Ordinateurs'=>'Electronique et Ordinateurs', 'Restauration'=>'Restauration')))
            ->add('Fax', 'integer')
            ->add('numero_telephone', 'integer')
            ->add('Email', 'email', array('label' => 'E-mail',  'required' => true))
            ->add('promotion')
            ->add('Description', 'textarea')
              
            ->add('valider', 'submit');
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Myapp\ResponsableBundle\Entity\boutique'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'myapp_responsablebundle_boutique';
    }
}
