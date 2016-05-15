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
                ->add('marque')
            ->add('note','rating'
    )
          ->add('couleur')
          ->add('size')
                //,'entity',array('class'=>'MyappResponsableBundle:Size','property'=>'id',"multiple" => true,"expanded"=>true))
                ->add('description')
                ->add('reference')
               
                ->add('updatedAt')
                ->add('marque')
                ->add('prixvente')
                ->add('prixdachat')
                ->add('quantite')
                ->add('disponible')
                ->add('prixancien')
              
               ->add('categorie','choice',array('choices'=>array('femme'=>'femme',"home"=>'homme')))
               
                ->add('designation')
                ->add('boutique','entity',array('class'=>'MyappResponsableBundle:boutique','property'=>'nom',"expanded"=>false))
              
                ->add('imageName',      'text')
    ->add('imageFile',     'file',array('required' => false))
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

   
    