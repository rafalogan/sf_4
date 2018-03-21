<?php

namespace App\Controller\Admin;

use App\Entity\Menu;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


/**
 * @Route("/admin/menu")
 */
class AdminMenuController extends Controller {
    /**
     * @Route("/", name="admin_menu")
     */
    public function index() {

        $menu = $this->getDoctrine()
            ->getRepository(Menu::class)
            ->findAll();

        
        return $this->render('/admin/menus/index.html.twig', [

            'menus' => $menu,

        ]);
    }
}
