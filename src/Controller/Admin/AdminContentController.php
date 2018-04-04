<?php

namespace App\Controller\Admin;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * @Route("/admin/content")
 */
class AdminContentController extends Controller {

    /**
     * @Route("/", name="admin_content")
     */
    public function index() {

        return $this->render('/admin/content/index.html.twig', [
            'controller_name' => 'AdminContentController',
        ]);
    }
}
