<?php

namespace Myapp\userBundle\Entity;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping as ORM;

/**
 * lignefacture
 *
 * @ORM\Table(name="lignefacture")
 * @ORM\Entity
 */
class LigneFacture
{
    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Myapp\userBundle\Entity\Facture")
     */
    private $facture;
    
   /**
     * @var integer
     *
     * @ORM\Column(name="idPr", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idPr;
    /**
     * 
     * @ORM\Column()
     */
     private $quantite;
    

     function getFacture() {
         return $this->facture;
     }

     function getIdPr() {
         return $this->idPr;
     }

     function getQuantite() {
         return $this->quantite;
     }

     function setFacture($facture) {
         $this->facture = $facture;
     }

     function setIdPr($idPr) {
         $this->idPr = $idPr;
     }

     function setQuantite($quantite) {
         $this->quantite = $quantite;
     }



    
}
