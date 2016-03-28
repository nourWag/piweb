<?php

namespace Myapp\adminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Newslettre
 *
 * @ORM\Table(name="newslettre")
 * @ORM\Entity
 */
class Newslettre
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
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=30, nullable=false)
     */
    private $description;


}
