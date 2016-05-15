<?php 
namespace Myapp\ResponsableBundle\Entity;

use Doctrine\ORM\EntityRepository;
use DoctrineExtensions\Query\Mysql\DateFormat;


class ModeleRepository extends EntityRepository
{


    public function findAllnew()
    {
        return $this->getEntityManager()
            ->createQuery('SELECT p FROM MyappResponsableBundle:Produit p where year = "2015"  ')
            ->getResult();
    }


}
?>