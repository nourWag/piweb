<?php
namespace Myapp\ResponsableBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
class Image1Form extends AbstractType{
   public function buildForm(FormBuilderInterface $builder, array $options) {
       $builder
       ->add('titre')
       ->add('file')
       
        ->add('produit');
}
    public function getName() {
        return 'Image';
}

   
}
