<?php

namespace Myapp\ResponsableBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Panier
 *
 * @ORM\Table(name="panier")
 * @ORM\Entity
 */
class Panier
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="totalArticles", type="integer", nullable=false)
     */
    private $totalarticles;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbrArticle", type="integer", nullable=false)
     */
    private $nbrarticle;

    /**
     * @var float
     *
     * @ORM\Column(name="prixTotal", type="float", precision=10, scale=0, nullable=false)
     */
    private $prixtotal;

    /**
     * @var float
     *
     * @ORM\Column(name="prixArticles", type="float", precision=10, scale=0, nullable=false)
     */
    private $prixarticles;
     /**
     * @ORM\OneToMany(targetEntity="Myapp\ResponsableBundle\Entity\Produit", mappedBy="Panier")
     */
    protected $produits;
    
    public function __construct()
    {
        $this->produits = new ArrayCollection();
    }

public function addProduits(Produit $produit)
  {
    // Ici, on utilise l'ArrayCollection vraiment comme un tableau
    $this->produits[] = $produit;

    return $this;
  }

  public function removeProduits(Produit $produit)
  {
    // Ici on utilise une méthode de l'ArrayCollection, pour supprimer la catégorie en argument
    $this->produits->removeElement($produit);
  }

  // Notez le pluriel, on récupère une liste de catégories ici !
  public function getProduits()
  {
    return $this->produits;
  }

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
     * Set totalarticles
     *
     * @param integer $totalarticles
     * @return Panier
     */
    public function setTotalarticles($totalarticles)
    {
        $this->totalarticles = $totalarticles;

        return $this;
    }

    /**
     * Get totalarticles
     *
     * @return integer 
     */
    public function getTotalarticles()
    {
        return $this->totalarticles;
    }

    /**
     * Set nbrarticle
     *
     * @param integer $nbrarticle
     * @return Panier
     */
    public function setNbrarticle($nbrarticle)
    {
        $this->nbrarticle = $nbrarticle;

        return $this;
    }

    /**
     * Get nbrarticle
     *
     * @return integer 
     */
    public function getNbrarticle()
    {
        return $this->nbrarticle;
    }

    /**
     * Set prixtotal
     *
     * @param float $prixtotal
     * @return Panier
     */
    public function setPrixtotal($prixtotal)
    {
        $this->prixtotal = $prixtotal;

        return $this;
    }

    /**
     * Get prixtotal
     *
     * @return float 
     */
    public function getPrixtotal()
    {
        return $this->prixtotal;
    }

    /**
     * Set prixarticles
     *
     * @param float $prixarticles
     * @return Panier
     */
    public function setPrixarticles($prixarticles)
    {
        $this->prixarticles = $prixarticles;

        return $this;
    }

    /**
     * Get prixarticles
     *
     * @return float 
     */
    public function getPrixarticles()
    {
        return $this->prixarticles;
    }
}
