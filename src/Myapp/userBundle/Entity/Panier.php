<?php

namespace Myapp\userBundle\Entity;

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
     * @ORM\Column(name="idPan", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpan;
    /**
     * @var integer
     *
     * @ORM\Column(name="idUser", type="integer")
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUser;

    function Panier(int $idpan) {
        $this->idpan = $idpan;
    }

    function getIdpan() {
        return $this->idpan;
    }

    

    function setIdpan($idpan) {
        $this->idpan = $idpan;
    }

  
}
