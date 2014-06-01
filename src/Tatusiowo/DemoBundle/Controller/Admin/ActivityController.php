<?php

namespace Tatusiowo\DemoBundle\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Tatusiowo\DemoBundle\Controller\BaseController;

/**
 * Class ActivityController
 * @package Tatusiowo\DemoBundle\Controller\Admin
 */
class ActivityController extends BaseController
{
    /**
     * @Route("/approve", name="tatusiowo_admin_activity_approve")
     *
     * @return \Symfony\Component\HttpFoundation\Response
     * @Template()
     */
    public function approveAction()
    {
        return [];
    }

    /**
     * @Route("/edit", name="tatusiowo_admin_activity_edit")
     *
     * @return \Symfony\Component\HttpFoundation\Response
     * @Template()
     */
    public function editAction()
    {
        return [];
    }
}
