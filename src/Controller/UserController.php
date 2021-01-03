<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;
use App\Repository\UserRepository;
use App\Entity\User;
use App\Form\UserType;

class UserController extends AbstractController
{
    /**
     * @Route("/user", name="app_user")
     */
    public function index(UserRepository $userRepository): Response
    {
        return $this->render('user/index.html.twig', [
            'users' => $userRepository->findUsersByRole( "ROLE_USER"),
        ]);
    }

     /**
     * @Route("/user/{id}", name="app_user_show")
     */
    public function show(User $user, Request $request): Response
    {
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        return $this->render('user/show.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/user/delete/{id}", name="app_user_delete")
     */
    public function delete(User $user, TranslatorInterface $translator): Response
    {
       $user->setIsDeleted(true);
       $entityManager = $this->getDoctrine()->getManager();
       $entityManager->flush();

       $message = $translator->trans('user_deleted');
       $this->addFlash('success',$message);

       return $this->redirectToRoute('app_user');
    }
}
