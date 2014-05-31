<?php

namespace Tatusiowo\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table("child")
 */
class Child
{
    const SEX_MALE = 'sex_male';
    const SEX_FEMALE = 'sex_female';

    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @var \DateTime
     * @ORM\Column(type="datetime")
     */
    protected $birthDate;

    /**
     * @var string
     * @ORM\Column(type="string")
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
     * @return int
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
     * @return string
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
     * @param string $sex
     * @return string
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
    public function setBirthDate(\DateTime $birthDate)
    {
        $this->birthDate = $birthDate;

        return $this;
    }
}
