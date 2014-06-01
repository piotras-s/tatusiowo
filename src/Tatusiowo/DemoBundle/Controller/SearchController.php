<?php

namespace Tatusiowo\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class SearchController extends Controller
{
    /**
     * @Route("/search", name="tatusiowo_activity_search")
     *
     * @return \Symfony\Component\HttpFoundation\Response
     * @Template()
     */
    public function searchAction()
    {
        return [];
    }
}
