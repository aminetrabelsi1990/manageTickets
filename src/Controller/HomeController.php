<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\UserRepository;
use App\Repository\ProjectRepository;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="app_home")
     */
    public function index(UserRepository $userRepository, ProjectRepository $projectRepository): Response
    {
        return $this->render('home/index.html.twig', [
            'nbrUsers' => $userRepository->countUsers(),
            'nbrProjects' => $projectRepository->countProjects(),
        ]);
    }
}
