<?php
namespace Myapp\ResponsableBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
class ImageForm2 extends AbstractType { 
public function buildForm(FormBuilderInterface $builder, array $options) { 
$builder 
->add('imageName',      'text',array('required' => false))
    ->add('imageFile',     'file',array('required' => false)) 
        ->add('produit','entity',array('class'=>'MyappResponsableBundle:Produit','property'=>'designation'))
              
                ->add('ajouter',     'submit')
;

} 
public function getName() { 
return 'Image'; 
} 
} 

