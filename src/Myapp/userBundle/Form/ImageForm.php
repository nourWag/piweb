<?php
namespace  Myapp\userBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
class ImageForm extends AbstractType { 
public function buildForm(FormBuilderInterface $builder, array $options) { 
$builder 
->add('titre') 
->add('file'); 
} 
public function getName() { 
return 'Image'; 
}

}

