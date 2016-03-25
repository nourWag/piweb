<?php

namespace Myapp\userBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * Panierproduit
 *
 * @ORM\Table(name="panierproduit")
 * @ORM\Entity
 */
class Panierproduit
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idPr", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idpr;

    /**
     * @var integer
     *
     * @ORM\Column(name="idPan", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idpan;
     /**
     * @var integer
     * 
     * @ORM\Column(name="quantite", type="integer")
     * 
     */
    private $quantite;
    
    function getIdpr() {
        return $this->idpr;
    }

    function getIdpan() {
        return $this->idpan;
    }

    function setIdpr($idpr) {
        $this->idpr = $idpr;
    }

    function setIdpan($idpan) {
        $this->idpan = $idpan;
    }

    function getQuantite() {
        return $this->quantite;
    }

    function setQuantite($quantite) {
        $this->quantite = $quantite;
    }

}
