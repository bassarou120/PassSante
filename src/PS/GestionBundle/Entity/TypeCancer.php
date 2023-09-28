<?php

namespace PS\GestionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass="PS\GestionBundle\Repository\TypeCancerRepository")
 */
class TypeCancer
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $type;

   /**
     * @ORM\ManyToMany(targetEntity="PS\GestionBundle\Entity\FichePatientCancer", mappedBy="typeCancer", cascade={"persist"})
     */
    private $fichePatientCancer;

    /**
     * @ORM\OneToMany(targetEntity="PS\GestionBundle\Entity\ConsultationCancer", mappedBy="typeCancer", cascade={"persist", "remove"})
     */
    private $consultationCancers;

    function __construct()
    {
        $this->fichePatientCancer = new ArrayCollection();
        $this->consultationCancers      = new \Doctrine\Common\Collections\ArrayCollection();
       
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }


    /**
     * @return Collection<int, fichePatientCancer>
     */
    public function getFichePatientCancer(): Collection
    {
        return $this->fichePatientCancer;
    }

    public function addFichePatientCancer(FichePatientCancer $fichePatientCancer): self
    {
        if (!$this->fichePatientCancer->contains($fichePatientCancer)) {
            $this->fichePatientCancer[] = $fichePatientCancer;
            $fichePatientCancer->addTypeCancer($this);
        }

        return $this;
    }

    public function removeFichePatientCancer(FichePatientCancer $fichePatientCancer): self
    {
        $this->fichePatientCancer->removeElement($fichePatientCancer);

        return $this;
    }

    /**
     * Add consultationsCancers
     *
     * @param \PS\GestionBundle\Entity\ConsultationCancer $consultationsCancers
     * @return Medecin
     */
    public function addConsultationCancers(\PS\GestionBundle\Entity\ConsultationCancer $consultationCancer)
    {
        if (!$this->consultationCancers->contains($consultationCancer)) {
            $this->consultationCancers[] = $consultationCancer;
        }
        return $this;
    }

    /**
     * Remove rendezvous
     *
     * @param \PS\GestionBundle\Entity\ConsultationsCancers $consultationsCancers
     */
    public function removeConsultationCancers(\PS\GestionBundle\Entity\ConsultationCancer $consultationCancer)
    {
        $this->consultationCancers->removeElement($consultationCancer);
        return $this;
    }

    /**
     * Get rendezvous
     *
     * @return Collection<int, ConsultationCancer>
     */
    public function getConsultationCancers()
    {
        return $this->consultationCancers;
    }
}
