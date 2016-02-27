<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Atm
 *
 * @ORM\Table(name="atm")
 * @ORM\Entity
 */
class Atm
{
    /**
     * @var string
     *
     * @ORM\Column(name="atm", type="string", length=100, nullable=true)
     */
    private $atm;

    /**
     * @var string
     *
     * @ORM\Column(name="ubication", type="string", length=200, nullable=true)
     */
    private $ubication;

    /**
     * @var string
     *
     * @ORM\Column(name="near_of", type="string", length=200, nullable=true)
     */
    private $nearOf;

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=true)
     */
    private $status;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set atm
     *
     * @param string $atm
     * @return Atm
     */
    public function setAtm($atm)
    {
        $this->atm = $atm;

        return $this;
    }

    /**
     * Get atm
     *
     * @return string 
     */
    public function getAtm()
    {
        return $this->atm;
    }

    /**
     * Set ubication
     *
     * @param string $ubication
     * @return Atm
     */
    public function setUbication($ubication)
    {
        $this->ubication = $ubication;

        return $this;
    }

    /**
     * Get ubication
     *
     * @return string 
     */
    public function getUbication()
    {
        return $this->ubication;
    }

    /**
     * Set nearOf
     *
     * @param string $nearOf
     * @return Atm
     */
    public function setNearOf($nearOf)
    {
        $this->nearOf = $nearOf;

        return $this;
    }

    /**
     * Get nearOf
     *
     * @return string 
     */
    public function getNearOf()
    {
        return $this->nearOf;
    }

    /**
     * Set status
     *
     * @param boolean $status
     * @return Atm
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return boolean 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
