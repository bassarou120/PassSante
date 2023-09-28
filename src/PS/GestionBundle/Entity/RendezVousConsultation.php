<?php

namespace PS\GestionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RendezVousConsultation
 *
 * @ORM\Table(name="rendez_vous_consultation")
 * @ORM\Entity(repositoryClass="PS\GestionBundle\Repository\RendezVousConsultationRepository")
 */
class RendezVousConsultation extends RendezVous
{
    /**
     * @ORM\OneToOne(targetEntity="Consultation", inversedBy="rdv")
     */
    private $consultation;

    /**
     * @ORM\OneToOne(targetEntity="ConsultationCancer", inversedBy="rdv")
     */
    private $consultationCancer;


    /**
     * Set consultation.
     *
     * @param \PS\GestionBundle\Entity\Consultation $consultation
     *
     * @return RendezVousConsultation
     */
    public function setConsultation(\PS\GestionBundle\Entity\Consultation $consultation)
    {
        $this->consultation = $consultation;

        return $this;
    }

    /**
     * Get consultation.
     *
     * @return \PS\GestionBundle\Entity\Consultation
     */
    public function getConsultation()
    {
        return $this->consultation;
    }

    /**
     * Set consultation.
     *
     * @param \PS\GestionBundle\Entity\ConsultationCancer $consultationCancer
     *
     * @return RendezVousConsultation
     */
    public function setConsultationCancer(\PS\GestionBundle\Entity\ConsultationCancer $consultationCancer)
    {
        $this->consultationCancer = $consultationCancer;

        return $this;
    }

    /**
     * Get consultation.
     *
     * @return \PS\GestionBundle\Entity\ConsultationCancer
     */
    public function getConsultationCancer()
    {
        return $this->consultationCancer;
    }
}
