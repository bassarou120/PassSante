<?php

namespace PS\GestionBundle\Repository;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityRepository;

/**
 * @extends ServiceEntityRepository<TypeCancer>
 *
 * @method TypeCancer|null find($id, $lockMode = null, $lockVersion = null)
 * @method TypeCancer|null findOneBy(array $criteria, array $orderBy = null)
 * @method TypeCancer[]    findAll()
 * @method TypeCancer[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TypeCancerRepository extends EntityRepository
{
    // public function __construct(ManagerRegistry $registry)
    // {
    // }

    // /**
    //  * @throws ORMException
    //  * @throws OptimisticLockException
    //  */
    // public function add(TypeCancer $entity, bool $flush = true): void
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
    // public function remove(TypeCancer $entity, bool $flush = true): void
    // {
    //     $this->_em->remove($entity);
    //     if ($flush) {
    //         $this->_em->flush();
    //     }
    // }

    // /**
    //  * @return TypeCancer[] Returns an array of TypeCancer objects
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
    public function findOneBySomeField($value): ?TypeCancer
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
