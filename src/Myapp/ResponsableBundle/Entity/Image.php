<?php
namespace Myapp\ResponsableBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/** 
* 
* 
* @ORM\Entity 
*/ 
class Image 
{ 
/** 
 * @var integer 
 * 
 * @ORM\Column(name="id", type="integer", nullable=false) 
 * @ORM\Id 
 * @ORM\GeneratedValue(strategy="IDENTITY") 
 */ 
private $id; 
/** 
 * 
 * 
 * @ORM\Column(name="img", type="blob", nullable=false) 
 */ 
private $img; 
/** 
 * @var string 
 * 
 * @ORM\Column(name="titre", type="string", nullable=false) 
 */ 
private $titre; 
 /** 
 * 
 * @Assert\File(maxSize="6000000") 
 * 
 */
private $file;
 /**
 *
 * @ORM\ManyToOne(targetEntity="boutique") 
 */
private $boutiquecle;
/** 
 * 
 * @ORM\ManyToOne(targetEntity="Produit") 
 */ 
private $produit;

function getProduit() {
    return $this->produit;
}

function setProduit($produit) {
    $this->produit = $produit;
}

function getBoutiquecle() {
    return $this->boutiquecle;
}

function setBoutiquecle($boutiquecle) {
    $this->boutiquecle = $boutiquecle;
}

function getId() {
    return $this->id;
}

function getImg() {
    return $this->img;
}

function getTitre() {
    return $this->titre;
}

function setId($id) {
    $this->id = $id;
}

function setImg($img) {
    $this->img = $img;
}

function setTitre($titre) {
    $this->titre = $titre;
}

function getFile() {
    return $this->file;
}

function setFile($file) {
    $this->file = $file;
}


}
