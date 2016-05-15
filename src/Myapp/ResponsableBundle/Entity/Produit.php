<?php
namespace Myapp\ResponsableBundle\Entity;
use Myapp\ResponsableBundle\Entity\Size;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\HttpFoundation\File\File;

use Doctrine\ORM\Mapping as ORM;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
/**
 * @ORM\Entity
 * @Vich\Uploadable
 * @ORM\Entity(repositoryClass="Myapp\ResponsableBundle\Entity\ModeleRepository")
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
     * @ORM\Column(name="prixancien", type="float", precision=10, scale=0, nullable=false)
     */
    private $prixancien;

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
     *
     * @ORM\Column(name="couleur", type="string", length=30, nullable=true)
     */
    private $couleur;
    
   
    /**
     *
     * @ORM\Column(name="size", type="string", length=30, nullable=true)
     */
    private $size;
    
    /**
     * @var ArrayCollection $img
     *
     * @ORM\OneToMany(targetEntity="Image", mappedBy="produit", cascade={"remove"})
     */
    private $img;
    /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     * 
     * @Vich\UploadableField(mapping="product_image", fileNameProperty="imageName")
     * 
     * @var File
     */
    private $imageFile;

    /**
     * @ORM\Column(type="string", length=255)
     *
     * @var string
     */
    private $imageName;

    /**
     * @ORM\Column(type="date")
     *
     * @var \Date
     */
    private $updatedAt;
    /**
     *
     * @ORM\ManyToOne(targetEntity="boutique") 
     */
    private $boutique;
   /**
     *
     * @ORM\Column(name="categorie", type="string", length=30, nullable=true)
     */
    private $categorie;
    /**
     *
     * @ORM\Column(name="solde", type="string", length=30, nullable=true)
     */
    private $solde;
     /**
     *
     * @ORM\Column(name="year", type="string", length=30, nullable=true)
     */
    private $year;
    public function getYear() {
        return $this->year;
    }

    public function setYear($year) {
        $this->year = $year;
    }

        public function getSolde() {
        return $this->solde;
    }

    public function setSolde($solde) {
        $this->solde = $solde;
    }

         public function getBoutique() {
        return $this->boutique;
    }

     public function getCategorie() {
        return $this->categorie;
    }

     public function setBoutique($boutique) {
        $this->boutique = $boutique;
    }

    public function setCategorie($categorie) {
        $this->categorie = $categorie;
    }

       
    public function getPrixancien() {
        return $this->prixancien;
    }

    public function setPrixancien($prixancien) {
        $this->prixancien = $prixancien;
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

/**
     * If manually uploading a file (i.e. not using Symfony Form) ensure an instance
     * of 'UploadedFile' is injected into this setter to trigger the  update. If this
     * bundle's configuration parameter 'inject_on_load' is set to 'true' this setter
     * must be able to accept an instance of 'File' as the bundle will inject one here
     * during Doctrine hydration.
     *
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $image
     *
     * @return produit
     */
    
   

    public function getUpdatedAt() {
        return $this->updatedAt;
    }

    

    public function setUpdatedAt(\DateTime $updatedAt) {
        $this->updatedAt = $updatedAt;
    }

    

        public function setImageFile(File $image = null)
    {
        $this->imageFile = $image;

        if ($image) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt = new \DateTime('now');
        }

        return $this;
    }

    /**
     * @return File
     */
    public function getImageFile()
    {
        return $this->imageFile;
    }

    /**
     * @param string $imageName
     *
     * @return Product
     */
    public function setImageName($imageName)
    {
        $this->imageName = $imageName;

        return $this;
    }

    /**
     * @return string
     */
    public function getImageName()
    {
        return $this->imageName;
    }
    public function getCouleur() {
        return $this->couleur;
    }

   

    public function setCouleur($couleur) {
        $this->couleur = $couleur;
    }
     public function getSize() {
        return $this->size;
    }

     public function setSize($size) {
        $this->size = $size;
    }


    


}