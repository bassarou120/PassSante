<?php

namespace PS\GestionBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 *
 */
class ConsultationCancerRepository extends EntityRepository
{
  
    /**
     * @param $id
     * @return mixed
     */
    public function findByPatient($patient, $user = null, $limit = null, $offset = null, $filters = [])
    {
        $params = ['patient' => $patient];
        $qb = $this->getEntityManager()->createQueryBuilder();
        $stmt = $qb->select('c')
            ->from('GestionBundle:ConsultationCancer', 'c')
            ->where("c.patient = :patient");

        if ($user && $user->hasRole('ROLE_MEDECIN') && $user->getAssurance()) {
            $assurance = $user->getAssurance();
            $stmt->andWhere('c.assurance = :assurance');
            $params['assurance'] = $assurance;
        }


        foreach ($filters as $field => $value) {
            $stmt->andWhere("c.{$field} = :{$field}");
            $params[$field] = $value;
        }

        $stmt->orderBy('c.dateConsultation', 'DESC')
        ->setParameters($params)
            ->setFirstResult($offset)
            ->setMaxResults($limit);

        return $stmt->getQuery()->getResult();
    }


    public function countByPatient($patient, $filters = [])
    {
        $params = ['patient' => $patient];
        $qb = $this->getEntityManager()->createQueryBuilder();
        $qb->select('COUNT(c.id)')
        ->from('GestionBundle:ConsultationCancer', 'c')
            ->where("c.patient = :patient");
        foreach ($filters as $field => $value) {
            $qb->andWhere("c.{$field} = :{$field}");
            $params[$field] = $value;
        }

        $qb->setParameters($params);

        return $qb->getQuery()->getSingleScalarResult();
    }

    public function countByMedecin($id)
    {
        $qb = $this->getEntityManager()->createQueryBuilder();
        $qb->select('COUNT(c.id)')
            ->from('GestionBundle:ConsultationCancer', 'c')
            ->where("c.medecin = :id")
            ->setParameter('id', $id);
        return $qb->getQuery()->getSingleScalarResult();
    }

    /**
     * @param $id
     * @return mixed
     */
    public function findByMedecin($id,  $limit = null, $offset = null)
    {
        $qb = $this->getEntityManager()->createQueryBuilder();
        $qb->select('c')
            ->from('GestionBundle:ConsultationCancer', 'c')
            ->where("c.medecin = :id")
            ->orderBy('c.dateConsultation', 'DESC')
            ->setParameter('id', $id)
            ->setFirstResult($offset)
            ->setMaxResults($limit);

        return $qb->getQuery()->getResult();

    }

    /**
     * @param $id
     * @return mixed
     */
    public function findOrdonnanceByPatient($id)
    {
        $qb = $this->getEntityManager()->createQueryBuilder();
        $qb->select('c')
            ->from('GestionBundle:ConsultationCancer', 'c')
            ->join('c.medicaments', 't')
            ->where("c.patient = :id")
            ->setParameter('id', $id)
            ->orderBy('c.dateConsultation', 'DESC');
       

        return $qb->getQuery()->getResult();
    }

    /**
     * @param $id
     * @return mixed
     */
    public function findAllMedecin($id)
    {
        $qb = $this->getEntityManager()->createQueryBuilder();
        $qb->select('c')
            ->from('GestionBundle:ConsultationCancer', 'c')
            ->leftJoin('c.medecin', 'm')
            ->addSelect('m')
            ->where("m.personne = :id")
            ->andWhere("m.id = c.medecin")
            ->orderBy('c.id', 'DESC')
            ->setParameter('id', $id);

        return $qb->getQuery()->getResult();

    }


   

    public function findAllInfirmier($infirmier, $currentOnly = true)
    {
        if (is_object($infirmier)) {
            $infirmier = $infirmier->getId();
        }

        $date = date('Y-m-d');

        $qb = $this->getEntityManager()->createQueryBuilder();


        $stmt = $qb->select('c')
            ->from('GestionBundle:ConsultationCancer', 'c')
            ->join('GestionBundle:ConsultationCancerInfirmier', 'i', 'WITH', 'i.consultation = c.id')
            ->where('i.infirmier = :infirmier');

        if ($currentOnly) {
            $stmt->andWhere('c.dateConsultation = :dateConsultation')->setParameter('dateConsultation', $date);
        }

        return $stmt->setParameter('infirmier', $infirmier);

       
    }


    public function findTotalPending($medecin)
    {
        if (is_object($medecin)) {
            $medecin = $medecin->getId();
        }
        
        $qb = $this->getEntityManager()->createQueryBuilder();
        $qb->select('COUNT(c.id)')
            ->from('GestionBundle:ConsultationCancer', 'c')
            ->where("c.medecin = :medecin")
            ->andWhere('c.statut = -1')
            ->setParameter('medecin', $medecin);

        return $qb->getQuery()->getSingleScalarResult();
    }



   public function findPending($medecin, $today=true)
    {
        
        if (is_object($medecin)) {
            $medecin = $medecin->getId();
        }
        
        $qb = $this->getEntityManager()->createQueryBuilder();
        $qb->select('c')
            ->from('GestionBundle:ConsultationCancer', 'c')
            ->where("c.medecin = :medecin")
            ->andWhere('c.statut = -1');
        if ($today) {
           $qb->andWhere('DATE(c.dateConsultation) = CURRENT_DATE()');
        }

         $qb->setParameter('medecin', $medecin);

        return $qb->getQuery()->getResult();
    }

    /**
     * @param $id
     * @return mixed
     */
    public function findAllPatient($id)
    {
        $qb = $this->getEntityManager()->createQueryBuilder();
        $qb->select('c')
            ->from('GestionBundle:ConsultationCancer', 'c')
            ->leftJoin('c.patient', 'p')
            ->addSelect('p')
            ->where("p.personne = :id")
            ->andWhere("c.patient = p.id")
            ->orderBy('c.id', 'DESC')
            ->setParameter('id', $id);

        return $qb->getQuery()->getResult();

    }
}
