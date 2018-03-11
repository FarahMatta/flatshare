<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Post;
use AppBundle\Form\PostType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PostController extends Controller
{
    /**
     * @Route("/post/list", name="app_index")
     * @param Request $request
     * @return string
     */
    public function listAction(Request $request)
    {
        $filter = $request->query;
        $postList = $this->getDoctrine()->getManager()->getRepository('AppBundle:Post')->getList($filter);
        return $this->renderView('AppBundle:post:index.html.twig', array('postList' => $postList, 'filter' => $filter));
    }

    /**
     * @Route("/post/detail/{id}", name="app_post_detail")
     * @param $id
     * @return string
     */
    public function detailAction($id)
    {
        $post = $this->getDoctrine()->getManager()->getRepository('AppBundle:Post')->find($id);
        return $this->renderView('@App/post/detail.html.twig', array('post' => $post));
    }

    /**
     * @Route("/admin/post/create", name="app_admin_post_create")
     * @param Request $request
     * @return string
     */
    public function createAction(Request $request)
    {
        $post = new Post();
        $form = $this->createForm(PostType::class, $post);
        $form->handleRequest($request);

        if ($request->isMethod('POST') && $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($post);
            $em->flush();
        }

        return $this->renderView('@App/post/create.html.twig', array('form' => $form->createView()));
    }

    /**
     * @Route("/admin/post/edit/{id}", name="app_admin_post_edit")
     * @param $id
     * @param Request $request
     * @return string
     */
    public function editAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $post = $em->getRepository('AppBundle:Post')->find($id);
        $form = $this->createForm(PostType::class, $post);
        $form->handleRequest($request);

        if ($request->isMethod('POST') && $form->isValid()){
            $em->flush();
        }

        return $this->renderView('@App/post/create.html.twig', array('form' => $form->createView(), 'post' => $post));
    }

    /**
     * @Route("/admin/post/delete/{id}", name="app_admin_post_delete")
     * @param $id
     * @return string
     */
    public function deleteAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $post = $em->getRepository('AppBundle:Post')->find($id);
        if (!empty($post)){
            $em->remove($post);
            $em->flush();
        }
        return $this->redirectToRoute('app_index');
    }


}
