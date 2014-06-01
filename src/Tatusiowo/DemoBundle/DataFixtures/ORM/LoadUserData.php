<?php

/**
 * @author Sergiusz Michalik <sergiusz.michalik@xsolve.pl>
 */

namespace Tatusiowo\DemoBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Tatusiowo\DemoBundle\Entity\User;

class LoadUserData extends AbstractFixture implements OrderedFixtureInterface, ContainerAwareInterface
{
    /** @var  ContainerInterface $container */
    private $container;

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    function load(ObjectManager $manager)
    {
        $userData = [
            'email'    => 'test@dadydo.it',
            'username'  => 'John Doe',
            'password' => 'password'
        ];

        $user = new User();
        $user
            ->setUsername($userData['username'])
            ->setEmail($userData['email'])
            ->setEnabled(true)
            ->setPlainPassword($userData['password']);

        $this->getUserManager()->updateUser($user);

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

    /**
     * @param ContainerInterface $container
     */
    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    /**
     * @return \FOS\UserBundle\Doctrine\UserManager
     */
    private function getUserManager()
    {
        return $this->container->get('fos_user.user_manager');
    }
} 
