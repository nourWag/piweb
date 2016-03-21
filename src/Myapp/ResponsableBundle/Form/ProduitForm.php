<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Myapp\ResponsableBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProduitForm extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('note','rating', array(
        //...
        'stars' => 5,
        //...
    ))
          ->add('couleur','entity',array('class'=>'pidev2MyappBundle:couleur','property'=>'id',"multiple" => true,"expanded"=>true))
          ->add('size','entity',array('class'=>'pidev2MyappBundle:Size','property'=>'id',"multiple" => true,"expanded"=>true))
                ->add('description')
                ->add('reference')
                ->add('taille')
                ->add('etat')
                ->add('marque')
                ->add('prixvente')
                ->add('prixdachat')
                ->add('quantite')
                ->add('disponible')
              
               
                ->add('designation')
               ->add('valider','submit');
        ;
    }
    
    /**
     * @return string
     */
    public function getName()
    {
        return 'pagination_pabundle_rating';
    }
}

   
    