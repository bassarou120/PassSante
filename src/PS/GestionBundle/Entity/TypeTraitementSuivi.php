<?php

namespace PS\GestionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass="PS\GestionBundle\Repository\TypeTraitementSuiviRepository")
 */
class TypeTraitementSuivi
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
    private $typeTraitement;

    /**
     * @ORM\ManyToMany(targetEntity="PS\GestionBundle\Entity\FichePatientCancer", mappedBy="typeTraitement")
     * @ORM\JoinColumn(nullable=false)
     */
    private $fichePatientCancer;

    function __construct()
    {
        $this->fichePatientCancer = new ArrayCollection();
       
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTypeTraitement(): ?string
    {
        return strtoupper($this->typeTraitement);
    }

    public function setTypeTraitement(string $typeTraitement): self
    {
        $this->typeTraitement = $typeTraitement;

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
            $fichePatientCancer->addTypeTraitement($this);
        }

        return $this;
    }

    public function removeFichePatientCancer(FichePatientCancer $fichePatientCancer): self
    {
        $this->fichePatientCancer->removeElement($fichePatientCancer);

        return $this;
    }
}
