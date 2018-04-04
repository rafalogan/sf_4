<?php

namespace App\Controller\Admin;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * @Route("/admin/images")
 */
class AdminImageController extends Controller {
    /**
     * @Route("/", name="admin_image")
     */
    public function index() {

        return $this->render('/admin/images/index.html.twig', [
            'controller_name' => 'AdminImageController',
        ]);
    }
}
