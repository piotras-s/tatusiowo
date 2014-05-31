<?php

/**
 * @author Sergiusz Michalik <sergiusz.michalik@xsolve.pl>
 */

namespace Tatusiowo\DemoBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Tatusiowo\DemoBundle\Entity\User;

class LoadUserData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    function load(ObjectManager $manager)
    {
        $userData = [
            'email'    => 'test@dadydo.it',
            'name'     => 'Test',
            'surname'  => 'Father',
            'password' => 'no-no-no'
        ];

        $user = new User();
        $user
            ->setEmail($userData['email'])
            ->setName($userData['name'])
            ->setSurname($userData['surname'])
            ->setPassword($userData['password']);

        $this->addReference('user', $user);

        $manager->persist($user);
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
