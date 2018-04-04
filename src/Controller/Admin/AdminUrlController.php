<?php

namespace App\Controller\Admin;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * @Route("/admin/url")
 */

class AdminUrlController extends Controller {

    /**
     * @Route("/", name="admin_url")
     */
    public function index() {

        return $this->render('/admin/url/index.html.twig', [
            'controller_name' => 'AdminUrlController',
        ]);
    }
}
