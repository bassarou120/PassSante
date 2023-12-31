<?php

namespace PS\SpecialiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Chirugie
 *
 * @ORM\Table(name="chirugie")
 * @ORM\Entity(repositoryClass="PS\SpecialiteBundle\Repository\ChirugieRepository")
 */
class Chirugie
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}

