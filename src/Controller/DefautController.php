<?php

namespace App\Controller;

use App\Entity\Menu;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefautController extends Controller
{
    /**
     * @Route("/", name="home")
     */
    public function index(){

        return $this->json([
            'message' => 'bem vindo ao projeto cecap!',
            'path' => 'src/Controller/DefautController.php',
        ]);
    }
}
