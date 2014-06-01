<?php

namespace Tatusiowo\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Tatusiowo\DemoBundle\Entity\Activity;

class ActivityController extends BaseController
{
    /**
     * @Route("/list", name="tatusiowo_activity_list")
     *
     * @return \Symfony\Component\HttpFoundation\Response
     * @Template()
     */
    public function listAction()
    {
        return [
            'activities' => $this->getDoctrine()->getRepository('DemoBundle:Activity')->findAll()
        ];
    }

    /**
     * @param $activityId
     *
     * @Route("/{activityId}", name="tatusiowo_activity_detail")
     *
     * @throws \Symfony\Component\HttpKernel\Exception\NotFoundHttpException
     *
     * @return \Symfony\Component\HttpFoundation\Response
     * @Template()
     */
    public function detailAction($activityId)
    {
        $activity = $this->findActivityOrFail($activityId);

        return ['activity' => $activity];
    }

    /**
     * @param $activityId
     *
     * @throws \Symfony\Component\HttpKernel\Exception\NotFoundHttpException
     *
     * @return Activity
     */
    private function findActivityOrFail($activityId)
    {
        $activity = $this->get('tatusiowo_activity_repository')->find($activityId);

        if (null === $activity) {
            throw new NotFoundHttpException('Activity not found.');
        }

        return $activity;
    }

}
