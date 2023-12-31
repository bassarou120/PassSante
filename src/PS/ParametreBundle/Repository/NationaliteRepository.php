<?php

namespace PS\ParametreBundle\Repository;

use Doctrine\ORM\NoResultException;

/**
 * NationaliteRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class NationaliteRepository extends \Doctrine\ORM\EntityRepository
{
     /**
     * On teste si le couple PIN + ID existe
     * @param  int $pin         
     * @param  int $identifiant 
     * @return int
     */
    public function exists($nationalite)
    {
        $em = $this->getEntityManager();
        $qb = $em
            ->createQuery('SELECT a.id FROM ParametreBundle:Nationalite a WHERE a.id = ?1 OR a.libNationalite = ?2')
            ->setParameter(1, $nationalite)
            ->setParameter(2, $nationalite);
        try {
          $result = $qb->getOneOrNullResult(); 
        } catch (NoResultException $e) {
            $result = null;
        }

        return $result;
    }
}
