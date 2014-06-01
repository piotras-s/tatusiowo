<?php
/**
 * @author Piotr Strugacz <piotr.strugacz@xsolve.pl>
 */

namespace Tatusiowo\DemoBundle\Controller;
use FOS\UserBundle\Model\UserInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


/**
 * Class BaseController
 * @package Tatusiowo\DemoBundle\Controller
 */
class BaseController extends Controller
{
    /**
     * @return UserInterface
     */
    protected function getFakeUser()
    {
        $user = current($this->container->get('fos_user.user_manager')->findUsers());

        return $user;
    }
} 