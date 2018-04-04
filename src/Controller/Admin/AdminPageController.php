<?php

namespace App\Controller\Admin;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * @Route("/admin/pages")
 */
class AdminPageController extends Controller {
    /**
     * @Route("/", name="admin_page")
     */
    public function index() {
        return $this->render('/admin/pages/index.html.twig', [
            'controller_name' => 'AdminPageController',
        ]);
    }
}
