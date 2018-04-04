<?php

namespace App\Controller\Admin;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * @Route("/admin/news-letter")
 */
class AdminNewsLetterController extends Controller {

    /**
     * @Route("/", name="admin_news_letter")
     */
    public function index() {
        return $this->render('/admin/newsLetter/index.html.twig', [
            'controller_name' => 'AdminNewsLetterController',
        ]);
    }
}
