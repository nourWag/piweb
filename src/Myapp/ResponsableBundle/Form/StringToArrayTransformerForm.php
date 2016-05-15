<?php
 namespace MyApp\UserBundle\Form ;
 use Symfony\Component\Form\DataTransformerInterface;

use Symfony\Component\Form\Exception\TransformationFailedException;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of StringToArrayTransformer
 *
 * @author snoussi
 */
class StringToArrayTransformer implements DataTransformerInterface {
    //put your code here
   


public function transform($array)

 {

 return $array[0];

 }

 public function reverseTransform($string)

 {

 return array($string);

 }

}
