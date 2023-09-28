<?php

namespace PS\GestionBundle\Entity;

use PS\GestionBundle\Repository\FichePatientCancerRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FichePatientCancerRepository::class)
 */
class FichePatientCancer
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $numeroDossier;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $derniereChimiotherapie;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $derniereSeance;

    /**
     * @var bool
     * @ORM\Column(type="boolean")
     */
    private $statutTraitement;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    private $contactMedecin;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    private $medecinTraitant;

    /**
     * @var string
     * @ORM\Column(type="string", nullable=true)
     */
    private $autreStrategie;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $derniereRadiotherapie;

    /**
     * @ORM\ManyToMany(targetEntity=TypeCancer::class, inversedBy="fichePatientCancer", cascade={"persist"})
     * @ORM\JoinTable(name="patient_type_cancer", joinColumns={@ORM\JoinColumn(name="fiche_patient_cancer_id", referencedColumnName="id")}, inverseJoinColumns={@ORM\JoinColumn(name="type_cancer_id", referencedColumnName="id")})
     * @ORM\JoinColumn(nullable=false)
     */
    private $typeCancer;

    /**
     * @ORM\Column(type="json")
     */
    private $strategieTraitement;

    /**
     * @ORM\ManyToMany(targetEntity=TypeTraitementSuivi::class, inversedBy="fichePatientCancer", cascade={"persist"})
     * @ORM\JoinTable(name="patient_type_traitement", joinColumns={@ORM\JoinColumn(name="fiche_patient_cancer_id", referencedColumnName="id")}, inverseJoinColumns={@ORM\JoinColumn(name="type_traitement_id", referencedColumnName="id")})
     * @ORM\JoinColumn(nullable=false)
     */
    private $typeTraitement;

    /**
     * @ORM\OneToOne(targetEntity="\PS\GestionBundle\Entity\Patient", inversedBy="fichePatientCancer", cascade={"all"})
     * @ORM\JoinColumn(name="patient_id", nullable=true, referencedColumnName="id")
     */
    private $patient;

    public function __construct()
    {
        $this->typeCancer = new ArrayCollection();
        $this->typeTraitement = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumeroDossier(): ?string
    {
        return $this->numeroDossier;
    }

    public function setNumeroDossier(string $numeroDossier): self
    {
        $this->numeroDossier = $numeroDossier;

        return $this;
    }

    public function getDerniereChimiotherapie(): ?\DateTimeInterface
    {
        return $this->derniereChimiotherapie;
    }

    public function setDerniereChimiotherapie(?\DateTimeInterface $derniereChimiotherapie): self
    {
        $this->derniereChimiotherapie = $derniereChimiotherapie;

        return $this;
    }

    public function getDerniereRadiotherapie(): ?\DateTimeInterface
    {
        return $this->derniereRadiotherapie;
    }

    public function setDerniereRadiotherapie(?\DateTimeInterface $derniereRadiotherapie): self
    {
        $this->derniereRadiotherapie = $derniereRadiotherapie;

        return $this;
    }

    /**
     * @return Collection<int, TypeCancer>
     */
    public function getTypeCancer(): Collection
    {
        return $this->typeCancer;
    }

    public function addTypeCancer(TypeCancer $typeCancer): self
    {
        if (!$this->typeCancer->contains($typeCancer)) {
            $this->typeCancer[] = $typeCancer;
        }

        return $this;
    }

    public function removeTypeCancer(TypeCancer $typeCancer): self
    {
        $this->typeCancer->removeElement($typeCancer);
           
        return $this;
    }

    /**
     * @return Collection<int, TypeTraitementSuivi>
     */
    public function getTypeTraitement(): Collection
    {
        return $this->typeTraitement;
    }

    public function addTypeTraitement(TypeTraitementSuivi $typeTraitement): self
    {
        if (!$this->typeTraitement->contains($typeTraitement)) {
            $this->typeTraitement[] = $typeTraitement;
        }

        return $this;
    }

    public function removeTypeTraitement(TypeTraitementSuivi $typeTraitement): self
    {
        // if ($this->typeTraitement->removeElement($typeTraitement)) {
        //     // set the owning side to null (unless already changed)
        //     if ($typeTraitement->getFichePatientCancer() === $this) {
        //         $typeTraitement->setFichePatientCancer(null);
        //     }
        // }
        $this->typeTraitement->removeElement($typeTraitement);

        return $this;
    }

    public function getStrategieTraitement(): ?array
    {

        return $this->strategieTraitement;
    }

    public function setStrategieTraitement(array $strategieTraitement): self
    {
        $this->strategieTraitement = $strategieTraitement;

        return $this;
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
     * Get undocumented variable
     */
    public function isStatutTraitement(): ?bool
    {
        return $this->statutTraitement;
    }

    /**
     * Set undocumented variable
     */
    public function setStatutTraitement(bool $statutTraitement): self
    {
        $this->statutTraitement = $statutTraitement;

        return $this;
    }

    /**
     * Get the value of contactMedecin
     */
    public function getContactMedecin(): ?string
    {
        return $this->contactMedecin;
    }

    /**
     * Set the value of contactMedecin
     */
    public function setContactMedecin(?string $contactMedecin): self
    {
        $this->contactMedecin = $contactMedecin;

        return $this;
    }

    /**
     * Get the value of medecinTraitant
     */
    public function getMedecinTraitant():? string
    {
        return $this->medecinTraitant;
    }

    /**
     * Set the value of medecinTraitant
     */
    public function setMedecinTraitant(?string $medecinTraitant): self
    {
        $this->medecinTraitant = $medecinTraitant;

        return $this;
    }

    /**
     * Get the value of autreStrategie
     */
    public function getAutreStrategie(): ?string
    {
        return $this->autreStrategie;
    }

    /**
     * Set the value of autreStrategie
     */
    public function setAutreStrategie(?string $autreStrategie): self
    {
        $this->autreStrategie = $autreStrategie;

        return $this;
    }

    /**
     * Get the value of derniereSeance
     */
    public function getDerniereSeance()
    {
        return $this->derniereSeance;
    }

    /**
     * Set the value of derniereSeance
     */
    public function setDerniereSeance($derniereSeance): self
    {
        $this->derniereSeance = $derniereSeance;

        return $this;
    }
}
