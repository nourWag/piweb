<?php
namespace Myapp\ResponsableBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Myapp\adminBundle\Entity\User;
/**
 * Boutique
 *
 * @ORM\Table(name="boutique")
 * @ORM\Entity
 */
class boutique
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
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=30, nullable=false)
     */
    private $nom; 
    /**
     * @var string
     *
     * @ORM\Column(name="categorie", type="string", length=30, nullable=false)
     */
    private $categorie;
    /**
     * @var string
     *
     * @ORM\Column(name="Fax", type="string", length=30, nullable=false)
     */
    private $Fax;
    /**
     * @var string
     *
     * @ORM\Column(name="numero_telephone", type="string", length=30, nullable=false)
     */
    public $numero_telephone;
    /**
     * @var string
     *
     * @ORM\Column(name="Email", type="string", length=30, nullable=false)
     */
    private $Email;
    /**
     * @var string
     *
     * @ORM\Column(name="promotion", type="string", length=30, nullable=false)
     */
    private $promotion;
    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="string", length=30, nullable=false)
     */
    private $Description;
    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=30)
     */
    private $etat="non valide";
    /**
     *
     * @ORM\OneToMany(targetEntity="Image", mappedBy="boutiquecle", cascade={"remove"}) 
     */
    private $Image_cle;
    /**
     * 
     * @ORM\ManyToOne(targetEntity="Myapp\adminBundle\Entity\User" ) 
     * 
     */
    private $userId;

function getUserId() {
    return $this->userId;
}

function setUserId($userId) {
    $this->userId = $userId;
}


    function getId() {
        return $this->id;
    }

    function getNom() {
        return $this->nom;
    }

    function getCategorie() {
        return $this->categorie;
    }

    function getFax() {
        return $this->Fax;
    }



    
    function getEmail() {
        return $this->Email;
    }

    function getPromotion() {
        return $this->promotion;
    }

    function getDescription() {
        return $this->Description;
    }

    function getImage_cle() {
        return $this->Image_cle;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setCategorie($categorie) {
        $this->categorie = $categorie;
    }

    function setFax($Fax) {
        $this->Fax = $Fax;
    }

    function getEtat() {
        return $this->etat;
    }

    function setEtat($etat) {
        $this->etat = $etat;
    }

    
    function setEmail($Email) {
        $this->Email = $Email;
    }

    function setPromotion($promotion) {
        $this->promotion = $promotion;
    }

    function setDescription($Description) {
        $this->Description = $Description;
    }

    function setImage_cle($Image_cle) {
        $this->Image_cle = $Image_cle;
    }

    function getNumero_telephone() {
        return $this-> numero_telephone;
    }

    function setNumero_telephone($numero_telephone) {
        $this-> numero_telephone = $numero_telephone;
    }



}
