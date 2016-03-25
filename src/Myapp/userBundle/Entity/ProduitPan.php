<?php
namespace Myapp\userBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * ProduitPan
 *
 * @ORM\Table(name="produitPan")
 * @ORM\Entity
 */
class ProduitPan
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
     */
    private $quantite;
    /**
     * @var string
     *
     * @ORM\Column(name="reference", type="string")
     */
    private $reference;
    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float")
     */
    private $prix;
    /**
     * 
     *
     * @ORM\Column(name="img", type="integer", nullable=false) 
     */
    private $img;
    
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
    function getNom() {
    return $this->nom;
    }

    function getPrix() {
    return $this->prix;
    }

    function setNom($nom) {
    $this->nom = $nom;
    }

    function setPrix($prix) {
    $this->prix = $prix;
    }
    function getReference() {
        return $this->reference;
    }

    function getImg() {
        return $this->img;
    }

    function setReference($reference) {
        $this->reference = $reference;
    }

    function setImg($img) {
        $this->img = $img;
    }


}




