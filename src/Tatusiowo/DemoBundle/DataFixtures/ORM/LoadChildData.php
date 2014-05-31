<?php

/**
 * @author Sergiusz Michalik <sergiusz.michalik@xsolve.pl>
 */

namespace Tatusiowo\DemoBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Tatusiowo\DemoBundle\Entity\Child;
use Tatusiowo\DemoBundle\Entity\User;

class LoadChildData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    function load(ObjectManager $manager)
    {
        /** @var User $parent */
        $parent = $this->getReference('user');
        $child = new Child();
        $child
            ->setBirthDate(new \DateTime('-2 years'))
            ->setSex(Child::SEX_MALE)
            ->setParent($parent)
        ;

        $manager->persist($child);

        $manager->flush();
    }

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    function getOrder()
    {
        return 2;
    }

} 
