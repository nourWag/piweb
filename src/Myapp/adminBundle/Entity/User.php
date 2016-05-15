<?php
namespace Myapp\adminBundle\Entity;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
/**
* @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
    function getId() {
        return $this->id;
    }
/**

*

* @ORM\Column(type="string", length=255)

* 

*/

protected $nom;

/**

*

* @ORM\Column(type="string", length=255)

* 

*/

protected $prenom;
public function getNom() {
    return $this->nom;
}

public function getPrenom() {
    return $this->prenom;
}

public function setNom($nom) {
    $this->nom = $nom;
}

public function setPrenom($prenom) {
    $this->prenom = $prenom;
}
 
 
}

 