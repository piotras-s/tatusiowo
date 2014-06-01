<?php

namespace Tatusiowo\DemoBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * @ORM\Entity(repositoryClass="Tatusiowo\DemoBundle\Repository\UserRepository")
 * @ORM\Table(name="user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @var \Tatusiowo\DemoBundle\Entity\Child[]|\Doctrine\Common\Collections\ArrayCollection
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
     * @var \Tatusiowo\DemoBundle\Entity\Point[]|\Doctrine\Common\Collections\ArrayCollection
     * @ORM\OneToMany(
     *  targetEntity="Tatusiowo\DemoBundle\Entity\Point",
     *  mappedBy="user",
     *  cascade={"persist"},
     *  orphanRemoval=true
     * )
     */
    protected $userPoints;

    /**
     * @var ArrayCollection
     * @ORM\OneToMany(targetEntity="Tatusiowo\DemoBundle\Entity\ActivityDone", mappedBy="user")
     */
    protected $activitiesDone;

    /**
     * @var ArrayCollection
     * @ORM\ManyToMany(targetEntity="Tatusiowo\DemoBundle\Entity\Activity", mappedBy="userToDoActivity")
     */
    protected $activitiesToDo;

    function __construct()
    {
        parent::__construct();

        $this->children = new ArrayCollection();
        $this->userPoints = new ArrayCollection();
        $this->activitiesDone = new ArrayCollection();
        $this->activitiesToDo = new ArrayCollection();
    }

    /**
     * @param mixed $activityDone
     */
    public function setActivitiesDone(ArrayCollection $activityDone)
    {
        $this->activitiesDone = $activityDone;

        return $this;
    }

    /**
     * @param \Doctrine\Common\Collections\ArrayCollection $activityToDo
     */
    public function setActivitiesToDo(ArrayCollection $activityToDo)
    {
        $this->activitiesToDo = $activityToDo;

        return $this;
    }

    /**
     * @param \Doctrine\Common\Collections\ArrayCollection|\Tatusiowo\DemoBundle\Entity\Child[] $children
     */
    public function setChildren(ArrayCollection $children)
    {
        $this->children = $children;

        return $this;
    }

    /**
     * @param \Doctrine\Common\Collections\Collection $groups
     */
    public function setGroups(ArrayCollection $groups)
    {
        $this->groups = $groups;

        return $this;
    }

    /**
     * @param \Doctrine\Common\Collections\ArrayCollection|\Tatusiowo\DemoBundle\Entity\Point[] $userPoints
     */
    public function setUserPoints(ArrayCollection $userPoints)
    {
        $this->userPoints = $userPoints;

        return $this;
    }

    /**
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getActivitiesDone()
    {
        return $this->activitiesDone;
    }

    /**
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getActivitiesToDo()
    {
        return $this->activitiesToDo;
    }

    /**
     * @return \Doctrine\Common\Collections\ArrayCollection|\Tatusiowo\DemoBundle\Entity\Child[]
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * @return \Tatusiowo\DemoBundle\Entity\Point[]
     */
    public function getUserPoints()
    {
        return $this->userPoints;
    }

    /**
     * @param Child $child
     * @return $this
     */
    public function addChildren(Child $child)
    {
        $this->children->add($child);

        return $this;
    }

    /**
     * @param Point $point
     * @return $this
     */
    public function addUserPoint(Point $point)
    {
        $this->userPoints->add($point);

        return $this;
    }

    /**
     * @param ActivityDone $activityDone
     * @return $this
     */
    public function addActivityDone(ActivityDone $activityDone)
    {
        $this->activitiesDone->add($activityDone);

        return $this;
    }

    /**
     * @param Activity $activity
     * @return $this
     */
    public function addActivityToDo(Activity $activity)
    {
        $this->activitiesToDo->add($activity);

        return $this;
    }
}
