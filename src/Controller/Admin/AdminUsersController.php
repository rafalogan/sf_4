<?php

namespace App\Controller\Admin;

use App\Entity\Users;
use App\Form\UsersType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * @Route("/admin/users")
 */

class AdminUsersController extends Controller {

    /**
     * @Route("/", name="admin_users")
     */
    public function index() {

        $users = $this->getDoctrine()->getRepository( Users::class)->findAll();

        return $this->render('admin/users/index.html.twig', [

            'users' => $users,

        ]);
    }

    /**
     * @Route("/novo", name="admin_users_novo")
     */
    public function new(Request $request) {

        $formTitle = "Novo Usuário";

        $form = $this->createForm(UsersType::class);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()):

            $user = $form->getData();
            $user->setCreatedeAt (new \DateTime("now", new \DateTimeZone("America/Sao_Paulo")));
            $user->setUpdatedeAt (new \DateTime("now", new \DateTimeZone("America/Sao_Paulo")));

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();

            $this->addFlash('success', "Novo Usuário Criado com Sucesso!");
            return $this->redirectToRoute('admin_users');

        endif;

        return $this->render('admin/users/new.html.twig', [

            'title'          => $formTitle,
            'form'           => $form->createView(),
        ]);
    }
}
