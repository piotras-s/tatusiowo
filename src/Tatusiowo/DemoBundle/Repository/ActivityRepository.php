<?php

namespace Tatusiowo\DemoBundle\Repository;

use Tatusiowo\DemoBundle\Entity\User;

use Doctrine\ORM\EntityRepository;

class ActivityRepository extends EntityRepository
{

    /**
     * @param \Tatusiowo\DemoBundle\Entity\User $user
     *
     * @return \Tatusiowo\DemoBundle\Entity\Activity[]
     */
    public function findAllByUser(User $user)
    {
        $activities = $this->getEntityManager()
            ->createQuery('SELECT a
                FROM DemoBundle:Activity a
                JOIN a.activitiesDone ad
                WHERE ad.user = ?1'
            )
            ->setParameter(1, $user)
            ->getResult();

        return $activities;
    }
}
