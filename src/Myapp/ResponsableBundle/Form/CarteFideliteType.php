<?php

namespace Myapp\ResponsableBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CarteFideliteType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                
            ->add('idCarteFidelite')
            ->add('nombrePointFidele')
            ->add('dateCreationCarteFidelite')
           
                 ->add('valider','submit');
        
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Myapp\ResponsableBundle\Entity\CarteFidelite'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'CarteFidelite';
    }
}
