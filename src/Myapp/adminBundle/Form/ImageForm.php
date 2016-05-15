<?php
namespace Myapp\adminBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
class ImageForm extends AbstractType { 
public function buildForm(FormBuilderInterface $builder, array $options) { 
$builder 
->add('titre', 'text', array( 
            'label'  => 'Titre',
            'attr'   =>  array('class'   => 'form-control')))
->add('file') 
//->add('boutiquecle','entity',array('class'=>'MyappResponsableBundle:boutique','property'=>'nom', 'attr'   =>  array(
             //   'class'   => 'form-control')))
;

} 
public function getName() { 
return 'Image'; 
} 
} 

