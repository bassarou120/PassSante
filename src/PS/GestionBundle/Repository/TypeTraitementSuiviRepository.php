<?php

namespace PS\GestionBundle\Repository;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityRepository;

/**
 * @extends ServiceEntityRepository<TypeTraitementSuivi>
 *
 * @method TypeTraitementSuivi|null find($id, $lockMode = null, $lockVersion = null)
 * @method TypeTraitementSuivi|null findOneBy(array $criteria, array $orderBy = null)
 * @method TypeTraitementSuivi[]    findAll()
 * @method TypeTraitementSuivi[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TypeTraitementSuiviRepository extends EntityRepository
{
    // public function __construct(ManagerRegistry $registry)
    // {
    //     parent::__construct($registry, TypeTraitementSuivi::class);
    // }

    // /**
    //  * @throws ORMException
    //  * @throws OptimisticLockException
    //  */
    // public function add(TypeTraitementSuivi $entity, bool $flush = true): void
    // {
    //     $this->_em->persist($entity);
    //     if ($flush) {
    //         $this->_em->flush();
    //     }
    // }

    // /**
    //  * @throws ORMException
    //  * @throws OptimisticLockException
    //  */
    // public function remove(TypeTraitementSuivi $entity, bool $flush = true): void
    // {
    //     $this->_em->remove($entity);
    //     if ($flush) {
    //         $this->_em->flush();
    //     }
    // }

    // /**
    //  * @return TypeTraitementSuivi[] Returns an array of TypeTraitementSuivi objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TypeTraitementSuivi
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
