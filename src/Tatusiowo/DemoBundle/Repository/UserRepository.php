<?php

namespace Tatusiowo\DemoBundle\Repository;

use Tatusiowo\DemoBundle\Entity\Activity;

use Doctrine\ORM\EntityRepository;

class UserRepository extends EntityRepository
{

    /**
     * @param \Tatusiowo\DemoBundle\Entity\Activity $activity
     *
     * @return \Tatusiowo\DemoBundle\Entity\User[]
     */
    public function findAllByActivity(Activity $activity)
    {
        $users = $this->getEntityManager()
            ->createQuery(
                'SELECT u
                FROM DemoBundle:User u
                JOIN u.activityDone ad
                WHERE ad.activity = ?1'
            )
            ->setParameter(1, $activity->getId())
            ->getResult();

        return $users;
    }
}
