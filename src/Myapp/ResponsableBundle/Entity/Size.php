<?php
namespace Myapp\ResponsableBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/** 
* 
* 
* @ORM\Entity 
*/ 
class Size {
    /** 
 * @var string 
 * 
 * @ORM\Column(name="id", type="string", nullable=false) 
 * @ORM\Id 
 * @ORM\GeneratedValue(strategy="IDENTITY") 
 */ 
private $id; 
 
    
    /**
     * @ORM\ManyToOne(targetEntity="Produit")
     */
    protected $produit;
   

public function getId() {
    return $this->id;
}

function getTitre() {
    return $this->titre;
}
 public function __toString()
   {
      return strval( $this->getId() );
   }
function setId($id) {
    $this->id = $id;
}

function setTitre($titre) {
    $this->titre = $titre;
}


}





