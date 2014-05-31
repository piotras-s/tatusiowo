<?php

namespace Tatusiowo\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class UserController extends Controller
{
    /**
     * @Route("/data", name="tatusiowo_user_data")
     *
     * @return \Symfony\Component\HttpFoundation\Response
     * @Template()
     */
    public function dataAction()
    {
        return [];
    }

    /**
     * @Route("/login", name="tatusiowo_user_login")
     *
     * @return \Symfony\Component\HttpFoundation\Response
     * @Template()
     */
    public function loginAction(){
        return [];
    }
}
