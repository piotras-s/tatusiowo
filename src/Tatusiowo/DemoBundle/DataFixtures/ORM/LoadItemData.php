<?php

/**
 * @author Sergiusz Michalik <sergiusz.michalik@xsolve.pl>
 */

namespace Tatusiowo\DemoBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Tatusiowo\DemoBundle\Entity\Image;
use Tatusiowo\DemoBundle\Entity\Item;

class LoadItemData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    function load(ObjectManager $manager)
    {
        for ($i = 0; $i < 7; $i++) {
            $image = $this->getReference(sprintf('image-%s-%d', Image::TYPE_ITEM, $i));

            $item = new Item();
            $item
                ->setName(substr( md5(rand()), 0, rand(3,14)))
                ->setImage($image);

            $this->addReference(sprintf('item-%d', $i), $item);

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
        return 2;
    }

} 
