<?php

namespace Tatusiowo\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table("point")
 */
class Point
{
    const TYPE_ACTIVITY_DONE = 'activity_done';
    const TYPE_ACTIVITY_PROPOSED = 'activity_proposed';
    const TYPE_USER_REGISTERED = 'user_registered';


    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     * @var int
     */
    protected $id;

    /**
     * @var User
     *
     * @ORM\ManyToOne(
     *  targetEntity="Tatusiowo\DemoBundle\Entity\User",
     *  inversedBy="userPoints"
     * )
     * @ORM\JoinColumn(
     *  name="user_id",
     *  referencedColumnName="id",
     *  nullable=false,
     *  onDelete="CASCADE"
     * )
     */
    protected $user;

    /**
     * @var string
     * @ORM\Column(type="string", length=32)
     */
    protected $type;

    /**
     * @var int
     * @ORM\Column(type="integer")
     */
    protected $value;

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
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return \Tatusiowo\DemoBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @return int
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param string $type
     * @return string
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @param \Tatusiowo\DemoBundle\Entity\User $user
     * @return \Tatusiowo\DemoBundle\Entity\User
     */
    public function setUser(User $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * @param int $value
     * @return int
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }


}
