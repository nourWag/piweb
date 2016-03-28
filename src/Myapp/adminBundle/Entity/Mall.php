<?php

namespace Myapp\adminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mall
 *
 * @ORM\Table(name="mall")
 * @ORM\Entity
 */
class Mall
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
     * @ORM\Column(name="surface", type="float", precision=10, scale=0, nullable=false)
     */
    private $surface;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbreBoutique", type="integer", nullable=false)
     */
    private $nbreboutique;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbreEnseigne", type="integer", nullable=false)
     */
    private $nbreenseigne;


}
