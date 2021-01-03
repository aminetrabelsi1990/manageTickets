<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\UserRepository;
use App\Entity\User;
use App\Form\AdminType;
use App\Form\EditAdminType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Translation\TranslatorInterface;
use Symfony\Component\HttpFoundation\Request;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin", name="app_admin")
     */
    public function index(UserRepository $userRepository): Response
    {
        return $this->render('admin/index.html.twig', [
            'admins' => $userRepository->findUsersByRole( "ROLE_ADMIN")
        ]);
    }

     /**
     * @Route("/admin/create", name="app_admin_create")
     */
    public function create(
        Request $request,
        EntityManagerInterface $em,
        TranslatorInterface $translator
    ) {
        $admin = new User();

        $form = $this->createForm(AdminType::class, $admin);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $admin->setRoles(['ROLE_ADMIN']);

            $em->persist($admin);
            $em->flush();

            $message = $translator->trans('admin_created');
            $this->addFlash('success',$message);

            return $this->redirectToRoute('app_admin');
        }

        return $this->render('admin/create.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/admin/{id}", name="app_admin_edit")
     */
    public function edit(
        Request $request,
        EntityManagerInterface $em,
        TranslatorInterface $translator,
        User $admin
    ) {

        $form = $this->createForm(EditAdminType::class, $admin);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
           
            $em->flush();

            $message = $translator->trans('admin_updated');
            $this->addFlash('success',$message);

            return $this->redirectToRoute('app_admin');
        }

        return $this->render('admin/edit.html.twig', [
            'form' => $form->createView(),
        ]);
    }

        /**
     * @Route("/admin/delete/{id}", name="app_admin_delete")
     */
    public function delete(User $admin, TranslatorInterface $translator): Response
    {
       $admin->setIsDeleted(true);
       $entityManager = $this->getDoctrine()->getManager();
       $entityManager->flush();

       $message = $translator->trans('admin_deleted');
       $this->addFlash('success',$message);

       return $this->redirectToRoute('app_admin');
    }

}
