<?php

namespace Tatusiowo\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class ActivityController extends Controller
{
    /**
     * @Route("/list", name="b2b_console_user_admin_edit_privilege", requirements={"id" = "\d+"})
     *
     * @return \Symfony\Component\HttpFoundation\Response
     * @Template()
     */
    public function listAction()
    {
        return [];
    }
}
