<?php

namespace App\Controller\Admin;

use App\Entity\Menu;
use App\Form\MenuType;
use App\Form\SubMenuType;
use Symfony\Component\HttpFoundation\Request;
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

        $menu = $this->getDoctrine()->getRepository(Menu::class)->findAll();


        return $this->render('/admin/menus/index.html.twig', [

            'menus' => $menu,

        ]);
    }

    /**
     * @Route("/novo", name="admin_menu_novo")
     */
    public function new(Request $request) {

        $form = $this->createForm(MenuType::class);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

                $menu = $form->getData();
                $menu->setMenuCreatedAt (new \DateTime("now", new \DateTimeZone("America/Sao_Paulo")));
                $menu->setMenuUpdatedAt (new \DateTime("now", new \DateTimeZone("America/Sao_Paulo")));

                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($menu);
                $entityManager->flush();

                $this->addFlash('success', 'Menu Criado com sucesso!');
                return $this->redirectToRoute('admin_menu');
        };

        return $this->render('admin/menus/new.html.twig',[
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/novo/submenu", name="admin_menu_novo_sub")
     */
    public function newSub() {

        $form = $this->createForm(SubMenuType::class);

        return $this->render('admin/menus/new.html.twig',[
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/editar/{menu_id}", name="admin_menu_edit")
     */
    public function update(Request $request, Menu $menu_id) {

        $form = $this->createForm(MenuType::class, $menu_id);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $menu = $form->getData();
            $menu->setMenuUpdatedAt (new \DateTime("now", new \DateTimeZone("America/Sao_Paulo")));

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->merge($menu);
            $entityManager->flush();

            $this->addFlash('success', 'Menu Editado com sucesso!');
            return $this->redirectToRoute('admin_menu');
        };

        return $this->render('admin/menus/new.html.twig',[
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/excluir/{menu_id}", name="admin_menu_delet")
     */
    public function delete(Menu $menu_id) {

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($menu_id);
        $entityManager->flush();

        $this->addFlash('sccess', 'Menu removido com sucesso!');
        return $this->redirectToRoute('admin_menu');
    }
}
