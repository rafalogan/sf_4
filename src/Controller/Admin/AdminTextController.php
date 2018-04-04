<?php

namespace App\Controller\Admin;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * @Route("/admin/textos")
 */
class AdminTextController extends Controller {
    /**
     * @Route("/", name="admin_text")
     */
    public function index() {

        return $this->render('/admin/alunos/index.html.twig', [
            'controller_name' => 'AdminTextController',
        ]);
    }
}
