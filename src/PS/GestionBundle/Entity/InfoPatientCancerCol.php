<?php

namespace PS\GestionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use APY\DataGridBundle\Grid\Mapping as GRID;

/**
 * InfoPatientCancerCol
 *
 * @ORM\Table(name="info_patient_cancer_col")
 * @ORM\Entity(repositoryClass="PS\GestionBundle\Repository\InfoPatientCancerColRepository")
 * @GRID\Source(columns="id, dateDepistageIva, patient_identifiant, patient.identifiant,  patient_nom_complet, patient.id, patient.personne.nom, patient.personne.prenom, patient_ville, patient.ville.nom, structureDepistage.nomStructure, realisationIva.resultatIVA")

 * @GRID\Column(id="patient_nom_complet", type="join", title="Patiente", columns={"patient.personne.nom", "patient.personne.prenom"}, operatorsVisible=false, operators={"rlike"}, defaultOperator="rlike")
 * 
 * @GRID\Column(id="patient_ville", type="join", title="Ville", columns={"patient.ville.nom"}, operatorsVisible=false, operators={"rlike"}, defaultOperator="rlike")
 * 
 * @GRID\Column(id="patient_identifiant", type="join", title="Identifiant", columns={"patient.identifiant"})
 * @GRID\Column(id="resultatIVA", type="join", title="Résulat IVA", columns={"realisationIva.resultatIVA"}, sortable=false, filter="select" , selectFrom="values",  operatorsVisible=false, values={"1":"Suspicion de Cancer","0":"Autres raisons", "2":"IVA négative", "-2":"IVA positive"})
 */
class InfoPatientCancerCol
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @GRID\Column(visible=false)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="parite", type="integer")
     * @GRID\Column(title="Parité", visible=false)
     */
    private $parite =0;

    /**
     * @var string
     *
     * @ORM\Column(name="gestilite", type="integer")
     * @GRID\Column(title="Géstilité", visible=false)
     */
    private $gestilite = 0;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDepistageIva", type="date")
     * @GRID\Column(title="Date IVA")
     */
    private $dateDepistageIva;

    /**
     * @var int
     *
     * @ORM\Column(name="ageRapportSexuel", type="integer")
     * @GRID\Column(title="Âge 1er Rapport Sexuel")
     */
    private $ageRapportSexuel = 0;

    /**
     * @ORM\OneToOne(targetEntity="\PS\GestionBundle\Entity\StatutTraitementIVH", inversedBy="infoPatientCancerCol", cascade={"persist"})
     *
     */
    private $statutTraitementIVH;

    /**
     * @ORM\OneToOne(targetEntity="\PS\GestionBundle\Entity\StructureDepistage", inversedBy="infoPatientCancerCol", cascade={"persist"})
     * @GRID\Column(field="structureDepistage.nomStructure", title="Structure", visible=true,  sortable=false, filter="select" , selectFrom="source",  operatorsVisible=false)
     *
     */
    private $structureDepistage;


    /**
     * @ORM\OneToOne(targetEntity="\PS\GestionBundle\Entity\RealisationIva", inversedBy="infoPatientCancerCol", cascade={"persist"})
     * @GRID\Column(field="realisationIva.resultatIVA", title="Résultat IVA", visible=true,  sortable=false, filter="select" , selectFrom="values",  operatorsVisible=false, values={"1":"Suspicion de Cancer","0":"Autres raisons", "2":"IVA négative", "-2":"IVA positive"})
     *
     */
    private $realisationIva;


    /**
     * @ORM\OneToOne(targetEntity="\PS\GestionBundle\Entity\TraitementCol", inversedBy="infoPatientCancerCol", cascade={"persist"})
     *
     */
    private $traitementCol;


    /**
     * @ORM\OneToOne(targetEntity="\PS\GestionBundle\Entity\ReferenceCancerCol", inversedBy="infoPatientCancerCol", cascade={"persist"})
     *
     */
    private $referenceCancerCol;

    /**
     * @ORM\OneToOne(targetEntity="\PS\GestionBundle\Entity\TraitementCdip", inversedBy="infoPatientCancerCol", cascade={"persist"})
     *
     */
    private $traitementCdip;

    /**
     * @ORM\OneToOne(targetEntity="\PS\GestionBundle\Entity\VisiteCancer", inversedBy="infoPatientCancerCol", cascade={"persist"})
     *
     */
    private $visiteCancer;

    /**
     * @var Patient
     * @ORM\ManyToOne(targetEntity="Patient", inversedBy="infoPatientCancerCol")
     * @ORM\JoinColumn(nullable=false)
     * @GRID\Column(field="patient.id", visible=false)
     * @GRID\Column(field="patient.personne.nom", visible=false)
     * @GRID\Column(field="patient.personne.prenom", visible=false)
     * @GRID\Column(field="patient.identifiant", visible=false)
     * @GRID\Column(field="patient.pin", visible=true, title="PIN")
     * @GRID\Column(field="patient.ville.nom", visible=false)
     */
    private $patient;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set parite
     *
     * @param int $parite
     * @return InfoPatientCancerCol
     */
    public function setParite($parite)
    {
        $this->parite = $parite;
    
        return $this;
    }

    /**
     * Get parite
     *
     * @return int 
     */
    public function getParite()
    {
        return $this->parite;
    }

    /**
     * Set gestilite
     *
     * @param int $gestilite
     * @return InfoPatientCancerCol
     */
    public function setGestilite($gestilite)
    {
        $this->gestilite = $gestilite;
    
        return $this;
    }

    /**
     * Get gestilite
     *
     * @return int 
     */
    public function getGestilite()
    {
        return $this->gestilite;
    }


    /**
     * Set dateDepistageIva
     *
     * @param \DateTime $dateDepistageIva
     * @return InfoPatientCancerCol
     */
    public function setDateDepistageIva($dateDepistageIva)
    {
        $this->dateDepistageIva = $dateDepistageIva;
    
        return $this;
    }

    /**
     * Get dateDepistageIva
     *
     * @return \DateTime 
     */
    public function getDateDepistageIva()
    {
        return $this->dateDepistageIva;
    }

    /**
     * Set ageRapportSexuel
     *
     * @param integer $ageRapportSexuel
     * @return InfoPatientCancerCol
     */
    public function setAgeRapportSexuel($ageRapportSexuel)
    {
        $this->ageRapportSexuel = $ageRapportSexuel;
    
        return $this;
    }

    /**
     * Get ageRapportSexuel
     *
     * @return integer 
     */
    public function getAgeRapportSexuel()
    {
        return $this->ageRapportSexuel;
    }

    /**
     * Set statutTraitementIVH
     *
     * @param \PS\GestionBundle\Entity\StatutTraitementIVH $statutTraitementIVH
     * @return InfoPatientCancerCol
     */
    public function setStatutTraitementIVH(\PS\GestionBundle\Entity\StatutTraitementIVH $statutTraitementIVH = null)
    {
        $this->statutTraitementIVH = $statutTraitementIVH;
    
        return $this;
    }

    /**
     * Get statutTraitementIVH
     *
     * @return \PS\GestionBundle\Entity\StatutTraitementIVH 
     */
    public function getStatutTraitementIVH()
    {
        return $this->statutTraitementIVH;
    }

    /**
     * Set structureDepistage
     *
     * @param \PS\GestionBundle\Entity\StructureDepistage $structureDepistage
     * @return InfoPatientCancerCol
     */
    public function setStructureDepistage(\PS\GestionBundle\Entity\StructureDepistage $structureDepistage = null)
    {
        $this->structureDepistage = $structureDepistage;
    
        return $this;
    }

    /**
     * Get structureDepistage
     *
     * @return \PS\GestionBundle\Entity\StructureDepistage 
     */
    public function getStructureDepistage()
    {
        return $this->structureDepistage;
    }

    /**
     * Set realisationIva
     *
     * @param \PS\GestionBundle\Entity\RealisationIva $realisationIva
     * @return InfoPatientCancerCol
     */
    public function setRealisationIva(\PS\GestionBundle\Entity\RealisationIva $realisationIva = null)
    {
        $this->realisationIva = $realisationIva;
    
        return $this;
    }

    /**
     * Get realisationIva
     *
     * @return \PS\GestionBundle\Entity\RealisationIva 
     */
    public function getRealisationIva()
    {
        return $this->realisationIva;
    }

    /**
     * Set TraitementCol
     *
     * @param \PS\GestionBundle\Entity\TraitementCol $traitementCol
     * @return InfoPatientCancerCol
     */
    public function setTraitementCol(\PS\GestionBundle\Entity\TraitementCol $traitementCol = null)
    {
        $this->traitementCol = $traitementCol;
    
        return $this;
    }

    /**
     * Get TraitementCol
     *
     * @return \PS\GestionBundle\Entity\TraitementCol 
     */
    public function getTraitementCol()
    {
        return $this->traitementCol;
    }

    /**
     * Set referenceCancerCol
     *
     * @param \PS\GestionBundle\Entity\ReferenceCancerCol $referenceCancerCol
     * @return InfoPatientCancerCol
     */
    public function setReferenceCancerCol(\PS\GestionBundle\Entity\ReferenceCancerCol $referenceCancerCol = null)
    {
        $this->referenceCancerCol = $referenceCancerCol;
    
        return $this;
    }

    /**
     * Get referenceCancerCol
     *
     * @return \PS\GestionBundle\Entity\ReferenceCancerCol 
     */
    public function getReferenceCancerCol()
    {
        return $this->referenceCancerCol;
    }

    /**
     * Set traitementCdip
     *
     * @param \PS\GestionBundle\Entity\TraitementCdip $traitementCdip
     * @return InfoPatientCancerCol
     */
    public function setTraitementCdip(\PS\GestionBundle\Entity\TraitementCdip $traitementCdip = null)
    {
        $this->traitementCdip = $traitementCdip;
    
        return $this;
    }

    /**
     * Get traitementCdip
     *
     * @return \PS\GestionBundle\Entity\TraitementCdip 
     */
    public function getTraitementCdip()
    {
        return $this->traitementCdip;
    }

    /**
     * Set visiteCancer
     *
     * @param \PS\GestionBundle\Entity\VisiteCancer $visiteCancer
     * @return InfoPatientCancerCol
     */
    public function setVisiteCancer(\PS\GestionBundle\Entity\VisiteCancer $visiteCancer = null)
    {
        $this->visiteCancer = $visiteCancer;
    
        return $this;
    }

    /**
     * Get visiteCancer
     *
     * @return \PS\GestionBundle\Entity\VisiteCancer 
     */
    public function getVisiteCancer()
    {
        return $this->visiteCancer;
    }

    /**
     * Set patient
     *
     * @param \PS\GestionBundle\Entity\Patient $patient
     * @return InfoPatientCancerCol
     */
    public function setPatient(\PS\GestionBundle\Entity\Patient $patient)
    {
        $this->patient = $patient;
    
        return $this;
    }

    /**
     * Get patient
     *
     * @return \PS\GestionBundle\Entity\Patient 
     */
    public function getPatient()
    {
        return $this->patient;
    }
}
