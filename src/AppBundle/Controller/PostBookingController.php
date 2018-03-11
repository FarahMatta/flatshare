<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PostBookingController extends Controller
{
    /**
     * @Route("/admin/booking/list", name="app_admin_booking_save")
     * @param Request $request
     * @return string
     */
    public function listAction(Request $request)
    {

    }

    /**
     * @Route("/admin/booking/save", name="app_admin_booking_save")
     * @param Request $request
     * @return string
     */
    public function saveAction(Request $request)
    {
        return $this->renderView('dd');
    }

    /**
     * @Route("/admin/booking/cancel", name="app_admin_booking_cancel")
     * @param Request $request
     * @return string
     */
    public function cancelAction(Request $request)
    {
        return $this->renderView('dd');
    }
}
