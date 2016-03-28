<?php

namespace Myapp\adminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cartefidelite
 *
 * @ORM\Table(name="cartefidelite")
 * @ORM\Entity
 */
class Cartefidelite
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
     * @var float
     *
     * @ORM\Column(name="tauxReduction", type="float", precision=10, scale=0, nullable=false)
     */
    private $tauxreduction;

    /**
     * @var integer
     *
     * @ORM\Column(name="pointFidelite", type="integer", nullable=false)
     */
    private $pointfidelite;

    /**
     * @var float
     *
     * @ORM\Column(name="seuilAchat", type="float", precision=10, scale=0, nullable=false)
     */
    private $seuilachat;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=20, nullable=false)
     */
    private $etat;


}
