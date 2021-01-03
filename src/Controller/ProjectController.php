<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ProjectRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Translation\TranslatorInterface;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Project;
use App\Entity\User;
use App\Entity\InvitUserProject;
use App\Form\ProjectType;
use Symfony\Component\Security\Csrf\TokenGenerator\TokenGeneratorInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use App\Service\EmailService;

class ProjectController extends AbstractController
{
    /**
     * @Route("/project", name="app_project")
     */
    public function index(ProjectRepository $projectRepository): Response
    {
        return $this->render('project/index.html.twig', [
            'projects' => $projectRepository->findByUser($this->getUser()),
        ]);
    }

    /**
     * @Route("/project/create", name="app_project_create")
     */
    public function create(
        Request $request,
        EntityManagerInterface $em,
        TranslatorInterface $translator
    ) {
        $project = new Project();

        $form = $this->createForm(ProjectType::class, $project);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $project->setUserId($this->getUser());
            $project->addUser($this->getUser());

            $em->persist($project);
            $em->flush();

            $message = $translator->trans('project_created');
            $this->addFlash('success',$message);

            return $this->redirectToRoute('app_project');
        }

        return $this->render('project/create.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/project/edit/{id}", name="app_project_edit")
     */
    public function edit(
        Request $request,
        EntityManagerInterface $em,
        TranslatorInterface $translator,
        Project $project,
        UserRepository $userRepository,
        EmailService $emailService,
        TokenGeneratorInterface $tokenGenerator
    ) {

        $form = $this->createForm(ProjectType::class, $project);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
           
            if ($request->request->get('email')) {
                $user = $userRepository->findOneBy(['email' => $request->request->get('email')]);
                if ($user) {
                    $project->addUser($user);
                } else {
                    $invit = new InvitUserProject();
                    $token = $tokenGenerator->generateToken();
                    $invit->setEmail($request->request->get('email'));
                    $invit->setToken($token);
                    $invit->setProject($project);
                    $em->persist($invit);
                    
                    $url = $this->generateUrl('app_register', array('token' => $token), UrlGeneratorInterface::ABSOLUTE_URL);
                    $emailService->sendResgister($request->request->get('email'), $url);
                }
            }
            $em->flush();

            $message = $translator->trans('project_edited');
            $this->addFlash('success',$message);

            return $this->redirectToRoute('app_project');
        }

        return $this->render('project/edit.html.twig', [
            'form' => $form->createView(),
            'project' => $project
        ]);
    }

      /**
     * @Route("project/{id}/delete", name="app_project_delete")
     */
    public function delete(
        EntityManagerInterface $em,
        Project $project,
        TranslatorInterface $translator
    ) {
        $em->remove($project);
        $em->flush();

        $message = $translator->trans('project_deleted');
        $this->addFlash('success',$message);

        return $this->redirectToRoute('app_project');
    }

    /**
     * @Route("project/{id}/{project_id}/delete_member", name="app_project_delete_member")
     */
    public function deleteMember(
        EntityManagerInterface $em,
        User $user,
        ProjectRepository $projectRepository,
        $project_id,
        TranslatorInterface $translator
    ) {
        $user->removeProject($projectRepository->findOneBy(['id' => $project_id]));
        $em->flush();

        $message = $translator->trans('user_deleted');
        $this->addFlash('success',$message);

        return $this->redirectToRoute('app_project');
    }

}
