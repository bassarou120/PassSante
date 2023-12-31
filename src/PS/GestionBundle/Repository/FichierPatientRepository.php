<?php

namespace PS\GestionBundle\Repository;

/**
 * FichierPatientRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class FichierPatientRepository extends \Doctrine\ORM\EntityRepository
{
    public function findAllPatient($patient)
    {
        return $this->createQueryBuilder('a')
            ->join('a.fichier', 'f')
            ->orderBy('f.dateFichier', 'DESC')
            ->andWhere('a.patient = :patient')
            ->setParameter('patient', $patient);
    }
}
