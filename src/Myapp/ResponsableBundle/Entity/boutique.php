<?php
namespace Myapp\ResponsableBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
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
     * @var integer
     *
     * @ORM\Column(name="promotion", type="integer", nullable=false)
     */
    private $promotion;
    /**
     * @var string
     *
     * @ORM\Column(name="categorie", type="string", length=30, nullable=false)
     */
    private $categorie;
    /**
     *
     * @ORM\OneToMany(targetEntity="Image", mappedBy="boutiquecle", cascade={"remove"}) 
     */
    private $Image_cle;
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Boutique
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set categorie
     *
     * @param string $categorie
     * @return Boutique
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return string 
     */
    public function getCategorie()
    {
        return $this->categorie;
    }
    function getPromotion() {
        return $this->promotion;
    }

    function setPromotion($promotion) {
        $this->promotion = $promotion;
    }
    function getImage_cle() {
        return $this->Image_cle;
    }

    function setImage_cle($Image_cle) {
        $this->Image_cle = $Image_cle;
    }



}
