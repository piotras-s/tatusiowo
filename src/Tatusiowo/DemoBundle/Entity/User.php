<?php

namespace Tatusiowo\DemoBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(name="user")
 */
class User
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     */
    protected $email;

    /**
     * @ORM\Column(type="string")
     */
    protected $name;

    /**
     * @ORM\Column(type="string")
     */
    protected $surname;

    /**
     * @ORM\Column(type="string")
     */
    protected $password;

    /**
     * @var Child[]|ArrayCollection
     *
     * @ORM\OneToMany(
     *  targetEntity="Tatusiowo\DemoBundle\Entity\Child",
     *  mappedBy="parent",
     *  cascade={"persist"},
     *  orphanRemoval=true
     * )
     */
    protected $children;

    /**
     * @var Point[]|ArrayCollection
     * @ORM\OneToMany(
     *  targetEntity="Tatusiowo\DemoBundle\Entity\Point",
     *  mappedBy="user",
     *  cascade={"persist"},
     *  orphanRemoval=true
     * )
     */
    protected $userPoints;

    function __construct()
    {
        $this->children = new ArrayCollection();
        $this->userPoints = new ArrayCollection();
    }


    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return string
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * @return Child[]
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * @return Point[]
     */
    public function getUserPoints()
    {
        return $this->userPoints;
    }



    /**
     * @param string $name
     * @return User
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @param mixed $email
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @param mixed $password
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @param mixed $surname
     * @return User
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;
        return $this;
    }

    /**
     * @param Child $child
     * @return User
     */
    public function addChildren(Child $child)
    {
        $this->children->add($child);
        return $this;
    }
}
