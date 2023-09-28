<?php

namespace PS\SpecialiteBundle\Repository;

/**
 * ChampRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ChampRepository extends \Doctrine\ORM\EntityRepository
{
    public function getMaxCount()
    {
        $em = $this->getEntityManager();

        $qb = $em->createQueryBuilder();
        $qb->select("COUNT(c.id) + 1 as ref")
            ->from("PSSpecialiteBundle:Champ", 'c');

        //$count = $qb->getSingleScalarResult();
        return $qb->getQuery()->getSingleScalarResult();

    }


    public function getValidationGroups()
    {
        $em = $this->getEntityManager();
        $qb = $em->createQueryBuilder();
        $qb->select("DISTINCT(c.validaionGroup)")
            ->from("PSSpecialiteBundle:Champ", 'c');
            
        return $qb->getQuery()->getResult();
    }


    public function getSiblings($champ)
    {
        $em = $this->getEntityManager();
        $qb = $em->createQueryBuilder();
        $qb->select("c")
            ->from("PSSpecialiteBundle:Champ", 'c')
            ->where('c.champParent = :champParent')
            ->setParameter('champParent', $champ->getChampParent());

        return $champ->getChampParent() ? $qb->getQuery()->getResult() : [];
    }


    public function getBySpecialite($specialite)
    {
         $em = $this->getEntityManager();

        $qb = $em->createQueryBuilder();
        return $qb->select("c")
            ->from("PSSpecialiteBundle:Champ", 'c')
            ->join('c.etape', 'e')
            ->andWhere('e.specialite = :specialite')
            ->setParameter('specialite', $specialite);
    }


    public function getEtapes($specialite,$rootOnly = true)
    {
        $em = $this->getEntityManager();

        $qb = $em->createQueryBuilder();
        $qb->select("DISTINCT(c.etape), e.libEtape")
            ->from("PSSpecialiteBundle:Champ", 'c')
            ->join('c.etape', 'e');

        if ($rootOnly) {
            $qb->andWhere('e.etapeParente IS NULL');
        }

        return $qb->getQuery()->getResult();


    }
}
