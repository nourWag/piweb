<?php
namespace Myapp\ResponsableBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
class boutiqueType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', 'text', array( 
            'label'  => 'Nom_boutique',
            'attr'   =>  array('class'   => 'form-control')))
            ->add('categorie'
                    . '',  'text', array( 
            'label'  => 'Description_boutique',
            'attr'   =>  array('class'   => 'form-control')))
            ->add('promotion',  'text', array( 
            'label'  => 'Promotion',
            'attr'   =>  array('class'   => 'form-control')))
        ;
    }

    public function getName()
    {
        return 'pi2_tstbundle_boutique';
    }
}
