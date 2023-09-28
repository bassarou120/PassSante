<?php

namespace PS\GestionBundle\Repository;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityRepository;

/**
 * @extends ServiceEntityRepository<FichePatientCancer>
 *
 * @method FichePatientCancer|null find($id, $lockMode = null, $lockVersion = null)
 * @method FichePatientCancer|null findOneBy(array $criteria, array $orderBy = null)
 * @method FichePatientCancer[]    findAll()
 * @method FichePatientCancer[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FichePatientCancerRepository extends EntityRepository
{
    // public function __construct(ManagerRegistry $registry)
    // {
    //     parent::__construct($registry, FichePatientCancer::class);
    // }

    // /**
    //  * @throws ORMException
    //  * @throws OptimisticLockException
    //  */
    // public function add(FichePatientCancer $entity, bool $flush = true): void
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
    // public function remove(FichePatientCancer $entity, bool $flush = true): void
    // {
    //     $this->_em->remove($entity);
    //     if ($flush) {
    //         $this->_em->flush();
    //     }
    // }

    // /**
    //  * @return FichePatientCancer[] Returns an array of FichePatientCancer objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?FichePatientCancer
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
