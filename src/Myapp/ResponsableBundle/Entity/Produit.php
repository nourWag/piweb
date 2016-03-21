<?php
namespace Myapp\ResponsableBundle\Entity;
use Myapp\ResponsableBundle\Entity\Size;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 */
class Produit {
 /** 
 * @var integer 
 * 
 * @ORM\Column(name="id", type="integer", nullable=false) 
 * @ORM\Id 
 * @ORM\GeneratedValue(strategy="IDENTITY") 
 */ 
private $id; 
    /**
     * @ORM\column{type="string",length=255}
     */
    private $description;
    
    /**
     *
     * @ORM\Column(name="reference", type="string", length=30, nullable=true)
     */
    private $reference;

    /**
     *
     * @ORM\Column(name="designation", type="string", length=30, nullable=false)
     */
    private $designation;

    /**
     *
     * @ORM\Column(name="taille", type="float", precision=10, scale=0, nullable=false)
     */
    private $taille;

    /**
     *
     * @ORM\Column(name="etat", type="boolean", nullable=false)
     */
    private $etat;

    /**
     *
     * @ORM\Column(name="prixdachat", type="float", precision=10, scale=0, nullable=false)
     */
    private $prixdachat;

    /**
     *
     * @ORM\Column(name="marque", type="string", length=30, nullable=false)
     */
    private $marque;

    /**
     *
     * @ORM\Column(name="prixVente", type="float", precision=10, scale=0, nullable=false)
     */
    private $prixvente;

    /**
     *
     * @ORM\Column(name="quantite", type="integer", nullable=false)
     */
    private $quantite;
    /**
     *
     * @ORM\Column(name="note", type="integer", nullable=true)
     */
    private $note;
    /**
     *
     * @ORM\Column(name="NbreV", type="integer", nullable=true)
     */
    private $NbreV=0;
    /**
     *
     * @ORM\Column(name="disponible", type="string", length=30, nullable=false)
     */
    private $disponible;
    
    /**
     * @var ArrayCollection $couleur
     *
     * @ORM\OneToMany(targetEntity="couleur", mappedBy="produit",cascade={"remove"})
     */
    private $couleur;
    
   
    /**
     * @var ArrayCollection $size
     *
     * @ORM\OneToMany(targetEntity="Size", mappedBy="produit",cascade={"remove"}) 
     */
    private $size;
    
    /**
     * @var ArrayCollection $img
     *
     * @ORM\OneToMany(targetEntity="Image", mappedBy="produit", cascade={"remove"})
     */
    private $img;
    
   

  public  function getSize() {
        return $this->size;
    }

  public  function setSize($size) {
        $this->size = $size;
    }

     public  function getCouleur() {
        return $this->couleur;
    }

     public  function setCouleur($couleur) {
        $this->couleur = $couleur;
    }

     
    public function getDisponible() {
        return $this->disponible;
    }

    public function setDisponible($disponible) {
        $this->disponible = $disponible;
    }

        
    public function getNbreV() {
        return $this->NbreV;
    }

    public function setNbreV($NbreV) {
        $this->NbreV = $NbreV;
    }

            public function getNote() {
        return $this->note;
    }

       public  function setNote($note) {
        $this->note = $note;
    }

        public function getId() {
         return $this->id;
     }

     public function getDescription() {
         return $this->description;
     }

     public function getReference() {
         return $this->reference;
     }

     public function getDesignation() {
         return $this->designation;
     }

     public function getTaille() {
         return $this->taille;
     }

     public function getEtat() {
         return $this->etat;
     }

     public function getPrixdachat() {
         return $this->prixdachat;
     }

     public function getMarque() {
         return $this->marque;
     }

     public function getPrixvente() {
         return $this->prixvente;
     }

     public function getQuantite() {
         return $this->quantite;
     }

     public function getImg() {
         return $this->img;
     }

     public function setId($id) {
         $this->id = $id;
     }

     public function setDescription($description) {
         $this->description = $description;
     }

     public function setReference($reference) {
         $this->reference = $reference;
     }

     public function setDesignation($designation) {
         $this->designation = $designation;
     }

     public function setTaille($taille) {
         $this->taille = $taille;
     }

     public function setEtat($etat) {
         $this->etat = $etat;
     }

     public function setPrixdachat($prixdachat) {
         $this->prixdachat = $prixdachat;
     }

     public function setMarque($marque) {
         $this->marque = $marque;
     }

     public function setPrixvente($prixvente) {
         $this->prixvente = $prixvente;
     }

     public function setQuantite($quantite) {
         $this->quantite = $quantite;
     }

     public function setImg($img) {
         $this->img = $img;
     }

public function __toString()
{
    return (string) $this->getId();
}

}