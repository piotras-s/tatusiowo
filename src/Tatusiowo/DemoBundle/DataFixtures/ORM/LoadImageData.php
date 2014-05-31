<?php

/**
 * @author Sergiusz Michalik <sergiusz.michalik@xsolve.pl>
 */

namespace Tatusiowo\DemoBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Tatusiowo\DemoBundle\Entity\Image;

class LoadImageData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    function load(ObjectManager $manager)
    {
        $imageData = [
            [
                'title'  => 'Yoga',
                'name'   => '1.jpg',
                'type'   => Image::TYPE_ACTIVITY,
                'width'  => 355,
                'height' => 266
            ],
            [
                'title'  => 'Yoga',
                'name'   => '1.jpg',
                'type'   => Image::TYPE_ACTIVITY,
                'width'  => 355,
                'height' => 266
            ],
            [
                'title'  => 'Yoga',
                'name'   => '1.jpg',
                'type'   => Image::TYPE_ACTIVITY,
                'width'  => 355,
                'height' => 266
            ],
            [
                'title'  => 'Yoga',
                'name'   => '1.jpg',
                'type'   => Image::TYPE_ACTIVITY,
                'width'  => 355,
                'height' => 266
            ],
            [
                'title'  => 'Yoga',
                'name'   => '1.jpg',
                'type'   => Image::TYPE_ACTIVITY,
                'width'  => 355,
                'height' => 266
            ],
            [
                'title'  => 'Yoga',
                'name'   => '1.jpg',
                'type'   => Image::TYPE_ACTIVITY,
                'width'  => 355,
                'height' => 266
            ],
            [
                'title'  => 'Yoga',
                'name'   => '1.jpg',
                'type'   => Image::TYPE_ACTIVITY,
                'width'  => 355,
                'height' => 266
            ],
            [
                'title'  => 'Yoga',
                'name'   => '1.jpg',
                'type'   => Image::TYPE_ACTIVITY,
                'width'  => 355,
                'height' => 266
            ],
            [
                'title'  => 'Yoga',
                'name'   => '1.jpg',
                'type'   => Image::TYPE_ACTIVITY,
                'width'  => 355,
                'height' => 266
            ],
            [
                'title'  => 'Yoga',
                'name'   => '1.jpg',
                'type'   => Image::TYPE_ACTIVITY,
                'width'  => 355,
                'height' => 266
            ],
            [
                'title'  => 'Yoga',
                'name'   => '1.jpg',
                'type'   => Image::TYPE_ACTIVITY,
                'width'  => 355,
                'height' => 266
            ],
            [
                'title'  => 'Yoga',
                'name'   => '1.jpg',
                'type'   => Image::TYPE_ACTIVITY,
                'width'  => 355,
                'height' => 266
            ],
            [
                'title'  => 'Yoga',
                'name'   => '1.jpg',
                'type'   => Image::TYPE_ACTIVITY,
                'width'  => 355,
                'height' => 266
            ],
            [
                'title'  => 'Yoga',
                'name'   => '1.jpg',
                'type'   => Image::TYPE_ACTIVITY,
                'width'  => 355,
                'height' => 266
            ],
            [
                'title'  => 'Yoga',
                'name'   => '1.jpg',
                'type'   => Image::TYPE_ACTIVITY,
                'width'  => 355,
                'height' => 266
            ],
            [
                'title'  => 'Yoga',
                'name'   => '1.jpg',
                'type'   => Image::TYPE_ACTIVITY,
                'width'  => 355,
                'height' => 266
            ],
            [
                'title'  => 'Yoga',
                'name'   => '1.jpg',
                'type'   => Image::TYPE_ACTIVITY,
                'width'  => 355,
                'height' => 266
            ],
            [
                'title'  => 'Yoga',
                'name'   => '1.jpg',
                'type'   => Image::TYPE_ACTIVITY,
                'width'  => 355,
                'height' => 266
            ],
            [
                'title'  => 'Yoga',
                'name'   => '1.jpg',
                'type'   => Image::TYPE_ACTIVITY,
                'width'  => 355,
                'height' => 266
            ],
            [
                'title'  => 'Yoga',
                'name'   => '1.jpg',
                'type'   => Image::TYPE_ACTIVITY,
                'width'  => 355,
                'height' => 266
            ],
            [
                'title'  => 'Bike',
                'name'   => '2.jpg',
                'type'   => Image::TYPE_ITEM,
                'width'  => 266,
                'height' => 266
            ],
            [
                'title'  => 'Bike',
                'name'   => '2.jpg',
                'type'   => Image::TYPE_ITEM,
                'width'  => 266,
                'height' => 266
            ],
            [
                'title'  => 'Bike',
                'name'   => '2.jpg',
                'type'   => Image::TYPE_ITEM,
                'width'  => 266,
                'height' => 266
            ],
            [
                'title'  => 'Bike',
                'name'   => '2.jpg',
                'type'   => Image::TYPE_ITEM,
                'width'  => 266,
                'height' => 266
            ],
            [
                'title'  => 'Bike',
                'name'   => '2.jpg',
                'type'   => Image::TYPE_ITEM,
                'width'  => 266,
                'height' => 266
            ],
            [
                'title'  => 'Bike',
                'name'   => '2.jpg',
                'type'   => Image::TYPE_ITEM,
                'width'  => 266,
                'height' => 266
            ],
            [
                'title'  => 'Bike',
                'name'   => '2.jpg',
                'type'   => Image::TYPE_ITEM,
                'width'  => 266,
                'height' => 266
            ],
            [
                'title'  => 'Bike',
                'name'   => '2.jpg',
                'type'   => Image::TYPE_ITEM,
                'width'  => 266,
                'height' => 266
            ],
            [
                'title'  => 'Bike',
                'name'   => '2.jpg',
                'type'   => Image::TYPE_ITEM,
                'width'  => 266,
                'height' => 266
            ],
            [
                'title'  => 'Bike',
                'name'   => '2.jpg',
                'type'   => Image::TYPE_ITEM,
                'width'  => 266,
                'height' => 266
            ],
            [
                'title'  => 'Bike',
                'name'   => '2.jpg',
                'type'   => Image::TYPE_ITEM,
                'width'  => 266,
                'height' => 266
            ],
            [
                'title'  => 'Bike',
                'name'   => '2.jpg',
                'type'   => Image::TYPE_ITEM,
                'width'  => 266,
                'height' => 266
            ],
            [
                'title'  => 'Bike',
                'name'   => '2.jpg',
                'type'   => Image::TYPE_ITEM,
                'width'  => 266,
                'height' => 266
            ],
            [
                'title'  => 'Bike',
                'name'   => '2.jpg',
                'type'   => Image::TYPE_ITEM,
                'width'  => 266,
                'height' => 266
            ],
            [
                'title'  => 'Bike',
                'name'   => '2.jpg',
                'type'   => Image::TYPE_ITEM,
                'width'  => 266,
                'height' => 266
            ],
            [
                'title'  => 'Bike',
                'name'   => '2.jpg',
                'type'   => Image::TYPE_ITEM,
                'width'  => 266,
                'height' => 266
            ],
            [
                'title'  => 'Bike',
                'name'   => '2.jpg',
                'type'   => Image::TYPE_ITEM,
                'width'  => 266,
                'height' => 266
            ],
            [
                'title'  => 'Bike',
                'name'   => '2.jpg',
                'type'   => Image::TYPE_ITEM,
                'width'  => 266,
                'height' => 266
            ],
            [
                'title'  => 'Bike',
                'name'   => '2.jpg',
                'type'   => Image::TYPE_ITEM,
                'width'  => 266,
                'height' => 266
            ],
            [
                'title'  => 'Bike',
                'name'   => '2.jpg',
                'type'   => Image::TYPE_ITEM,
                'width'  => 266,
                'height' => 266
            ]
        ];

        foreach ($imageData as $k => $data) {
            $image = new Image();
            $date  = new \DateTime();
            $date->setTimestamp((rand(time() - 10000000, time())));

            $image
                ->setName($data['name'])
                ->setTitle($data['title'])
                ->setHeight($data['height'])
                ->setWidth($data['width'])
                ->setCreatedAt($date);

            if (Image::TYPE_ACTIVITY === $data['type']) {
                $image->setTypeActivity();
            } else {
                $image->setTypeItem();
            }

            $this->addReference(sprintf('image-%d-%d', $data['type'], ($k % 20)), $image);

            $manager->persist($image);
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
        return 1;
    }
} 
