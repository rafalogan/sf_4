<?php

namespace App\Controller\Admin;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * @Route("/admin/banner")
 */
class AdminBannerController extends Controller {

    /**
     * @Route("/", name="admin_banner")
     */
    public function index() {

        return $this->render('/admin/banner/index.html.twig', [
            'controller_name' => 'AdminBannerController',
        ]);
    }
}
