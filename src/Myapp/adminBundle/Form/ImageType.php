<?php
 
namespace Myapp\adminBundle\Form;
 
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

 
class ImageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
           // ->add('image')
                ->add('imageName',      'text')
    ->add('imageFile',     'file')
        ;
    }
 
    public function getName()
    {
        return 'mon_proprebundle_producttype';
    }
 
    public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' => 'Myapp\ResponsableBundle\Entity\Image',
        );
    }
}