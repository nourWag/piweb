<?php

namespace Myapp\userBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Facture
 *
 * @ORM\Table(name="facture")
 * @ORM\Entity
 */
class Facture
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
     * @ORM\Column(name="num_sequentiel", type="integer")
     *
     */
    private $num_sequentiel;
    /**
     * @var string
     *
     * @ORM\Column(name="date_creation", type="string")
     * 
     */
   
     private $date_creation;
     function getId() {
         return $this->id;
     }

     function getNum_sequentiel() {
         return $this->num_sequentiel;
     }

     function getDate_creation() {
         return $this->date_creation;
     }

     function setId($id) {
         $this->id = $id;
     }

     function setNum_sequentiel($num_sequentiel) {
         $this->num_sequentiel = $num_sequentiel;
     }

     function setDate_creation($date_creation) {
         $this->date_creation = $date_creation;
     }


}
