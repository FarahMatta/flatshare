<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CommentController extends Controller
{
    /**
     * @Route("/admin/comment/add", name="app_admin_comment_add")
     * @param Request $request
     * @return string
     */
    public function addAction(Request $request)
    {
        return $this->renderView('in');
    }
}
