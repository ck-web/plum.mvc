<?php

namespace Hello\FormationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Module
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Hello\FormationBundle\Entity\ModuleRepository")
 */
class Module
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nomM", type="string", length=50)
     */
    private $nomM;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDebut", type="date")
     */
    private $dateDebut;

    /**
     * @var integer
     *
     * @ORM\Column(name="duree", type="integer")
     */
    private $duree;


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
     * Set nomM
     *
     * @param string $nomM
     * @return Module
     */
    public function setNomM($nomM)
    {
        $this->nomM = $nomM;

        return $this;
    }

    /**
     * Get nomM
     *
     * @return string 
     */
    public function getNomM()
    {
        return $this->nomM;
    }

    /**
     * Set dateDebut
     *
     * @param \DateTime $dateDebut
     * @return Module
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return \DateTime 
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set duree
     *
     * @param integer $duree
     * @return Module
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get duree
     *
     * @return integer 
     */
    public function getDuree()
    {
        return $this->duree;
    }
}
