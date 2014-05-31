<?php

/**
 * @author Sergiusz Michalik <sergiusz.michalik@xsolve.pl>
 */

namespace Tatusiowo\DemoBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Tatusiowo\DemoBundle\Entity\Activity;
use Tatusiowo\DemoBundle\Entity\Item;

class LoadActivitiesItemsData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    function load(ObjectManager $manager)
    {
        for ($i = 0; $i < 20; $i++) {
            /** @var Activity $activity */
            $activity = $this->getReference(sprintf('activity-%d', $i));

            /** @var Item $item */
            $item = $this->getReference(sprintf('item-%d', $i));

            $activity->addItem($item);
            $item->addActivity($activity);

            $manager->persist($activity);
            $manager->persist($item);
        }

        $manager->flush();
    }

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    function getOrder()
    {
        return 3;
    }

} 
