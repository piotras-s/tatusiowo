<?php

namespace Tatusiowo\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table("child")
 */
class Child
{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @var \DateTime
     */
    protected $birthDate;

    /**
     * @var int
     */
    protected $sex;

    /**
     * @var User
     *
     * @ORM\ManyToOne(
     *  targetEntity="Tatusiowo\DemoBundle\Entity\User",
     *  inversedBy="children"
     * )
     * @ORM\JoinColumn(
     *  name="parent_id",
     *  referencedColumnName="id",
     *  nullable=false,
     *  onDelete="CASCADE"
     * )
     */
    protected $parent;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return \Tatusiowo\DemoBundle\Entity\User
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * @return int
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * @return \DateTime
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * @param \Tatusiowo\DemoBundle\Entity\User $parent
     * @return \Tatusiowo\DemoBundle\Entity\User
     */
    public function setParent($parent)
    {
        $this->parent = $parent;
        return $this;
    }

    /**
     * @param int $sex
     * @return int
     */
    public function setSex($sex)
    {
        $this->sex = $sex;
        return $this;
    }

    /**
     * @param \DateTime $birthDate
     * @return \DateTime
     */
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;
        return $this;
    }
}
