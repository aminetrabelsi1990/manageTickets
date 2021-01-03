<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\TaskRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Translation\TranslatorInterface;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Task;
use App\Form\TaskType;
use App\Repository\ProjectRepository;

class TaskController extends AbstractController
{
    /**
     * @Route("/task/{id}", name="app_task")
     */
    public function index(TaskRepository $taskRepository, ProjectRepository $projectRepository, $id = null): Response
    {
        if ($id){
            $owner = $projectRepository->findOneBy(['id' => $id])->getUserId()->getId();
            if ($owner === $this->getUser()->getId()) {
                $tasks = $taskRepository->findUserTasksOwner($this->getUser(), $id);
            } else {
                $tasks = $taskRepository->findUserTasksAssigned($this->getUser(), $id);
            }
        } else {
            $tasks = null;
            $owner = null;
        }
        
        return $this->render('task/index.html.twig', [
            'tasks' => $tasks,
            'projects' => $projectRepository->findByUser($this->getUser()),
            'owner' => $owner,
        ]);
    }

    /**
     * @Route("/task/{id}/create", name="app_task_create")
     */
    public function create(
        Request $request,
        $id,
        EntityManagerInterface $em,
        ProjectRepository $projectRepository,
        TranslatorInterface $translator
    ) {
        $task = new Task();

        $form = $this->createForm(TaskType::class, $task, ['project' => $id]);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $task->setProject($projectRepository->findOneBy(['id' => $id]));
            $task->setOwner($this->getUser());

            $em->persist($task);
            $em->flush();

            $message = $translator->trans('task_created');
            $this->addFlash('success',$message);

            return $this->redirectToRoute('app_task', ['id' => $id]);
        }

        return $this->render('task/create.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/task/edit/{project_id}/{id}", name="app_task_edit")
     */
    public function edit(
        Request $request,
        EntityManagerInterface $em,
        TranslatorInterface $translator,
        Task $task,
        $project_id
    ) {

        $form = $this->createForm(TaskType::class, $task, ['project' => $project_id]);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {

            $em->flush();

            $message = $translator->trans('task_edited');
            $this->addFlash('success',$message);

            return $this->redirectToRoute('app_task', ['id' => $project_id]);
        }

        return $this->render('task/edit.html.twig', [
            'form' => $form->createView()
        ]);
    }

      /**
     * @Route("task/{project_id}/{id}/delete", name="app_task_delete")
     */
    public function delete(
        EntityManagerInterface $em,
        Task $task,
        $project_id,
        TranslatorInterface $translator
    ) {
        $em->remove($task);
        $em->flush();

        $message = $translator->trans('task_deleted');
        $this->addFlash('success',$message);

        return $this->redirectToRoute('app_task', ['id' => $project_id]);
    }
}
