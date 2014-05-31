<?php

/**
 * @author Sergiusz Michalik <sergiusz.michalik@xsolve.pl>
 */

namespace Tatusiowo\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="activity")
 */
class Activity 
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     * @ORM\Column(name="title", type="string", nullable=false)
     * @Assert\NotBlank()
     */
    protected $title;

    /**
     * @var int
     * @ORM\Column(name="time_from", type="smallint", nullable=false)
     */
    protected $timeFrom;

    /**
     * @var int
     * @ORM\Column(name="time_to", type="smallint", nullable=false)
     */
    protected $timeTo;

    /**
     * @var int
     * @ORM\Column(name="age_from", type="smallint", nullable=false)
     */
    protected $ageFrom;

    /**
     * @var int
     * @ORM\Column(name="age_to", type="smallint", nullable=false)
     */
    protected $ageTo;

    /**
     * @var bool
     * @ORM\Column(name="outdoor", type="boolean", nullable=false)
     */
    protected $outdoor;

    /**
     * @var bool
     * @ORM\Column(name="indoor", type="boolean", nullable=false)
     */
    protected $indoor;

    /**
     * @var int
     * @ORM\Column(name="fun", type="smallint", nullable=false)
     */
    protected $fun;

    /**
     * @var int
     * @ORM\Column(name="creativity", type="smallint", nullable=false)
     */
    protected $creativity;

    /**
     * @var int
     * @ORM\Column(name="effort", type="smallint", nullable=false)
     */
    protected $effort;

    /**
     * @var string
     * @ORM\Column(name="description", type="text", nullable=false)
     */
    protected $description;

    /**
     * @var bool
     * @ORM\Column(name="approved", type="boolean", nullable=false)
     */
    protected $approved;

    /**
     * @var \DateTime
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    protected $createdAt;

    /**
     * @var \DateTime
     * @ORM\Column(name="approved_at", type="datetime", nullable=true)
     */
    protected $approvedAt;

    /**
     * @return int
     */
    public function getAgeFrom()
    {
        return $this->ageFrom;
    }

    /**
     * @return int
     */
    public function getAgeTo()
    {
        return $this->ageTo;
    }

    /**
     * @return boolean
     */
    public function isApproved()
    {
        return $this->approved;
    }

    /**
     * @return int
     */
    public function getCreativity()
    {
        return $this->creativity;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return int
     */
    public function getEffort()
    {
        return $this->effort;
    }

    /**
     * @return int
     */
    public function getFun()
    {
        return $this->fun;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return boolean
     */
    public function isIndoor()
    {
        return $this->indoor;
    }

    /**
     * @return boolean
     */
    public function isOutdoor()
    {
        return $this->outdoor;
    }

    /**
     * @return int
     */
    public function getTimeFrom()
    {
        return $this->timeFrom;
    }

    /**
     * @return int
     */
    public function getTimeTo()
    {
        return $this->timeTo;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return DateTime
     */
    public function getApprovedAt()
    {
        return $this->approvedAt;
    }

    /**
     * @return DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param int $ageFrom
     *
     * @return int
     */
    public function setAgeFrom($ageFrom)
    {
        $this->ageFrom = $ageFrom;

        return $this;
    }

    /**
     * @param int $ageTo
     *
     * @return int
     */
    public function setAgeTo($ageTo)
    {
        $this->ageTo = $ageTo;

        return $this;
    }

    /**
     * @param boolean $approved
     *
     * @return boolean
     */
    public function setApproved($approved)
    {
        $this->approved = $approved;

        return $this;
    }

    /**
     * @param DateTime $approvedAt
     *
     * @return DateTime
     */
    public function setApprovedAt($approvedAt)
    {
        $this->approvedAt = $approvedAt;

        return $this;
    }

    /**
     * @param DateTime $createdAt
     *
     * @return DateTime
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @param int $creativity
     *
     * @return int
     */
    public function setCreativity($creativity)
    {
        $this->creativity = $creativity;

        return $this;
    }

    /**
     * @param string $description
     *
     * @return string
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @param int $effort
     *
     * @return int
     */
    public function setEffort($effort)
    {
        $this->effort = $effort;

        return $this;
    }

    /**
     * @param int $fun
     *
     * @return int
     */
    public function setFun($fun)
    {
        $this->fun = $fun;

        return $this;
    }

    /**
     * @param boolean $indoor
     *
     * @return boolean
     */
    public function setIndoor($indoor)
    {
        $this->indoor = $indoor;

        return $this;
    }

    /**
     * @param boolean $outdoor
     *
     * @return boolean
     */
    public function setOutdoor($outdoor)
    {
        $this->outdoor = $outdoor;

        return $this;
    }

    /**
     * @param int $timeFrom
     *
     * @return int
     */
    public function setTimeFrom($timeFrom)
    {
        $this->timeFrom = $timeFrom;

        return $this;
    }

    /**
     * @param int $timeTo
     *
     * @return int
     */
    public function setTimeTo($timeTo)
    {
        $this->timeTo = $timeTo;

        return $this;
    }

    /**
     * @param string $title
     *
     * @return string
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

} 
