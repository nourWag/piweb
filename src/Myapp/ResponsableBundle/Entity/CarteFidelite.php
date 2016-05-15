<?php
namespace Myapp\ResponsableBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * cartefidelite
 *
 * @ORM\Table(name="cartefidelite")
 * @ORM\Entity
 */
class CarteFidelite {
    //put your code here
    
/** 
 * @var integer 
 * 
 * @ORM\Column(name="idCarteFidelite", type="integer", nullable=false) 
 * @ORM\Id 
 * @ORM\GeneratedValue
 */ 
private $idCarteFidelite; 
/** 
 * 
 * 
 * @ORM\Column(name="nombrePointFidele", type="integer", nullable=false) 
 */ 
private $nombrePointFidele; 
/** 
 * @var date
 * 
 * @ORM\Column(name="dateCreationCarteFidelite", type="datetime", nullable=false) 
 */ 
private $dateCreationCarteFidelite;


function getIdCarteFidelite() {
    return $this->idCarteFidelite;
}

function getNombrePointFidele() {
    return $this->nombrePointFidele;
}

function getDateCreationCarteFidelite() {
    return $this->dateCreationCarteFidelite;
}

function setIdCarteFidelite($idCarteFidelite) {
    $this->idCarteFidelite = $idCarteFidelite;
}

function setNombrePointFidele($nombrePointFidele) {
    $this->nombrePointFidele = $nombrePointFidele;
}

function setDateCreationCarteFidelite(\DateTime $dateCreationCarteFidelite) {
    $this->dateCreationCarteFidelite = $dateCreationCarteFidelite;
}




}
