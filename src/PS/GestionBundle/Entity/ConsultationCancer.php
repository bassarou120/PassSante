<?php

namespace PS\GestionBundle\Entity;

use DateTime;
use APY\DataGridBundle\Grid\Mapping as GRID;
use PS\GestionBundle\Entity\FichePatientCancer;
use PS\GestionBundle\Entity\TypeTraitementSuivi;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="PS\GestionBundle\Repository\ConsultationCancerRepository")
 * @GRID\Source(columns="id, dateConsultation,patient_nom_complet,patient.id,patient.personne.nom,patient.personne.prenom, institution, medecin_nom_complet,medecin.personne.nom,medecin.personne.prenom")
 * @GRID\Column(id="patient_nom_complet", type="join", title="Patient", columns={"patient.personne.nom", "patient.personne.prenom"}, operatorsVisible=false, operators={"rlike"}, defaultOperator="rlike")
 * @GRID\Column(id="medecin_nom_complet", type="join", title="Medecin", columns={"medecin.personne.nom", "medecin.personne.prenom"}, operatorsVisible=false)
 */
class ConsultationCancer
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @GRID\Column(title="ID", primary=true, visible=false, operators={"eq"}, defaultOperator="eq")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     * @GRID\Column(title="Date", operatorsVisible=false)
     */
    private $dateConsultation;

    /**
     * @ORM\Column(type="datetime")
     * @GRID\Column(title="Date", operatorsVisible=false, nullable=true)
     */
    private $datePremiereConsultation;

    /**
     * @ORM\ManyToOne(targetEntity="TypeCancer", inversedBy="consultationCancer")
     * @ORM\JoinColumn(nullable=false)
     */
    private $typeCancer;

    /**
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $stade;

    /**
     *
     * @ORM\Column(type="text", nullable=true)
     */
    private $evolution;

    /**
     *
     * @ORM\Column(type="text", nullable=true)
     */
    private $strategieTraitement;

    /**
     * @Expose
     * @ORM\ManyToOne(targetEntity="Medecin", inversedBy="consultationCancer")
     * @ORM\JoinColumn(nullable=false)
     * @Assert\NotBlank(message="consultation.form.medecin.message")
     * @GRID\Column(field="medecin.hopital.nom", title="consultation.form.medecin.hopital", filter="select", operatorsVisible=false)
     * @GRID\Column(field="medecin.personne.nom", title="consultation.form.medecin.nom", visible=false)
     * @GRID\Column(field="medecin.personne.prenom", title="consultation.form.medecin.prenoms", visible=false)
     * @Groups({"medecin"})
     */
    private $medecin;

    /**
     * @ORM\ManyToOne(targetEntity="\PS\GestionBundle\Entity\Patient", inversedBy="consultationCancer", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     * @GRID\Column(field="patient.personne.nom", visible=false)
     * @GRID\Column(field="patient.personne.prenom", visible=false)
     * @GRID\Column(field="patient.id", visible=false)
     */
    private $patient;

    /**
     * @Exclude
     * @ORM\OneToOne(targetEntity="RendezVousConsultation", mappedBy="consultationCancer", cascade={"persist"}, fetch="EAGER")
     */
    private $rdv;

    public function __construct()
    {
        $this->dateConsultation = new \DateTime();
        $this->rendezvous       = new \Doctrine\Common\Collections\ArrayCollection();
        $this->patient = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Get the value of dateConsultation
     */
    public function getDateConsultation() : \DateTimeInterface
    {
        return $this->dateConsultation;
    }

    /**
     * Set the value of dateConsultation
     */
    public function setDateConsultation(\DateTimeInterface $dateConsultation): self
    {
        $this->dateConsultation = $dateConsultation;

        return $this;
    }

    /**
     * Get the value of dateConsultation
     */
    public function getDatePremiereConsultation() : ?\DateTimeInterface
    {
        return $this->datePremiereConsultation;
    }

    /**
     * Set the value of dateConsultation
     */
    public function setDatePremiereConsultation(?\DateTimeInterface $datePremiereConsultation): self
    {
        $this->datePremiereConsultation = $datePremiereConsultation;

        return $this;
    }
    
    /**
     * Get the value of stade
     */
    public function getStade(): ?string
    {
        return $this->stade;
    }

    /**
     * Set the value of stade
     */
    public function setStade(?string $stade): self
    {
        $this->stade = $stade;

        return $this;
    }

    /**
     * Get the value of evolution
     */
    public function getEvolution(): ?string
    {
        return $this->evolution;
    }

    /**
     * Set the value of evolution
     */
    public function setEvolution(string $evolution): self
    {
        $this->evolution = $evolution;

        return $this;
    }

    /**
     * Get the value of strategieTraitement
     */
    public function getStrategieTraitement(): ?string
    {
        return $this->strategieTraitement;
    }

    /**
     * Set the value of strategieTraitement
     */
    public function setStrategieTraitement(string $strategieTraitement): self
    {
        $this->strategieTraitement = $strategieTraitement;

        return $this;
    }

    /**
     * Set medecin
     *
     * @param \PS\GestionBundle\Entity\Medecin $medecin
     * @return ConsultationCancer
     */
    public function setMedecin(Medecin $medecin = null)
    {
        $this->medecin = $medecin;

        return $this;
    }

    /**
     * Get medecin
     *
     * @return \PS\GestionBundle\Entity\Medecin
     */
    public function getMedecin()
    {
        return $this->medecin;
    }

    /**
     * Get the value of patient
     * @return \PS\GestionBundle\Entity\Patient
     */
    public function getPatient()
    {
        return $this->patient;
    }

    /**
     * Set the value of patient
     */
    public function setPatient(\PS\GestionBundle\Entity\Patient $patient): self
    {
        $this->patient = $patient;

        return $this;
    }

    /**
     * Get the value of patient
     * @return \PS\GestionBundle\Entity\TypeCancer
     */
    public function getTypeCancer()
    {
        return $this->typeCancer;
    }

    /**
     * Set the value of patient
     */
    public function setTypeCancer(\PS\GestionBundle\Entity\TypeCancer $typeCancer): self
    {
        $this->typeCancer = $typeCancer;

        return $this;
    }

    /**
     * @param $rdv
     */
    public function setRdv(\PS\GestionBundle\Entity\RendezVousConsultation $rdv)
    {
        if ($rdv && $rdv->getLibRendezVous() && $rdv->getDateRendezVous()) {

            $rdv->setConsultationCancer($this);
            $rdv->setStatutRendezVous(false);
            $rdv->setTypeRendezVous(1);
            $rdv->setPatient($this->getPatient());
            $rdv->setMedecin($this->getMedecin());
            // $rdv->setSpecialite($this->getSpecialite());

            $this->rdv = $rdv;
        }


        return $this;
    }

    public function getRdv()
    {
        return $this->rdv;
    }
}
