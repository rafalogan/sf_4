<?php

namespace App\Controller\Admin;

use App\Entity\Aluno;
use http\Env\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * @Route("/admin/alunos")
 */
class AdminAlunoController extends Controller {

    /**
     * @Route("/", name="admin_alunos")
     */
    public function index() {

        $alunos = $this->getDoctrine()->getRepository(Aluno::class)->findAll();

        return $this->render('/admin/alunos/index.html.twig', [
          'alunos' => $alunos,
        ]);
    }

    /**
     * @Route("/novo", name="admin_alunos_novo")
     */
    public function new(Request $request) {


    }
}
