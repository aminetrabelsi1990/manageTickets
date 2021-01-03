<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\UserRepository;
use App\Repository\InvitUserProjectRepository;
use App\Repository\ProjectRepository;
use App\Service\EmailService;
use Symfony\Component\Security\Csrf\TokenGenerator\TokenGeneratorInterface;
use Symfony\Contracts\Translation\TranslatorInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use App\Entity\User;
use App\Form\UserResetPasswordType;
use App\Form\RegisterType;
use App\Form\ProfileType;

class AccountController extends AbstractController
{
    /**
     * @Route("login", name="app_login")
     */
    public function login(AuthenticationUtils $utils)
    {
        $error = $utils->getLastAuthenticationError();
        $username = $utils->getLastUsername();

        return $this->render('account/login.html.twig', [
            'hasError' => $error !== null,
            'username' => $username
        ]);
    }

    /**
     * @Route("/logout", name="app_logout")
     */
    public function logout()
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }

     /**
     * @Route("account-recovery", name="app_recovery")
     */
    public function emailRecovery()
    {
        return $this->render('account/recovery.html.twig');
    }

    /**
     * @Route("/account-email-verif", name="app_email_verif")
     */
    public function verifUser(
        Request $request, 
        UserRepository $userRepository,
        EmailService $emailService, 
        TokenGeneratorInterface $tokenGenerator,
        TranslatorInterface $translator
    ) {
        $user = $userRepository->findOneByEmail($request->get('email'));
        if ($user === null) {
            $this->addFlash('danger', $translator->trans('This email address does not exist !'));

            return $this->redirectToRoute('app_recovery');
        }
        $token = $tokenGenerator->generateToken();
        
        try {
            $user->setPasswordToken($token);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();
        } catch (\Exception $e) {
            $this->addFlash('warning', $e->getMessage());
            return $this->redirectToRoute('app_recovery');
        }

        $url = $this->generateUrl('app_reset_password', array('token' => $token), UrlGeneratorInterface::ABSOLUTE_URL);
        $emailService->sendResetPassword($user, $url);
        $this->addFlash('success', $translator->trans('Password reset email sent !'));

        return $this->redirectToRoute('app_login');
    }

    /**
     * @Route("/reset_pass/{token}", name="app_reset_password")
     */
    public function resetPassword(
        Request $request, 
        string $token, 
        UserPasswordEncoderInterface $passwordEncoder, 
        TranslatorInterface $translator
    ) {
        $user = $this->getDoctrine()->getRepository(User::class)->findOneBy(['passwordToken' => $token]);

        if ($user === null) {
            $this->addFlash('danger', 'Token Inconnu');

            return $this->redirectToRoute('app_login');
        }
    
        $form = $this->createForm(UserResetPasswordType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $password = $passwordEncoder->encodePassword($user, $user->getPassword());

            $user->setPassword($password);
            $user->setPasswordToken(null);

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->flush();
            $this->addFlash('success', $translator->trans('Password updated'));

            return $this->redirectToRoute('app_login');
        } else {

            return $this->render('account/reset_password.html.twig', ['token' => $token,'form' => $form->createView()]);
        }
    }

    /**
     * @Route("/register/{token}", name="app_register")
     */
    public function register(
        Request $request,   
        UserPasswordEncoderInterface $passwordEncoder,
        TranslatorInterface $translator,
        InvitUserProjectRepository $invitUserProjectRepository,
        ProjectRepository $projectRepository,
        $token = null
    ) {
        $user = new User();
        $invited = null;
        if($token) {
            $invited =$invitUserProjectRepository->findOneBy(['token' => $token]);
            $user->setEmail($invited->getEmail());
        }

        $form = $this->createForm(RegisterType::class, $user, ['invited' => $invited]);
        $form->handleRequest($request);
    

        if ($form->isSubmitted() && $form->isValid()) {
            $user->setRoles(['ROLE_USER']);
            $password = $passwordEncoder->encodePassword($user, $user->getPassword());
            $user->setPassword($password);

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);

            if($invited) {
                $project = $projectRepository->findOneBy(['id' => $invited->getProject()]);
                $project->addUser($user);
                $entityManager->remove($invited);
            }

            $entityManager->flush();

            return $this->redirectToRoute('app_login');
        } 

        return $this->render('account/register.html.twig', ['form' => $form->createView()]);
       
    }

    /**
     * @Route("/profil/{id}", name="app_profil")
     */
    public function editProfil(
        Request $request,   
        UserPasswordEncoderInterface $passwordEncoder,
        TranslatorInterface $translator,
        User $user
    ) {

        $form = $this->createForm(ProfileType::class, $user);
        $form->handleRequest($request);
    

        if ($form->isSubmitted() && $form->isValid()) {

            if ($user->getPassword()) {
                $password = $passwordEncoder->encodePassword($user, $user->getPassword());
                $user->setPassword($password);
            }
           
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->flush();

            $this->addFlash('success', $translator->trans('Profil updated'));
            return $this->redirectToRoute('app_project');
        } 

        return $this->render('account/profil.html.twig', ['form' => $form->createView()]);
       
    }

}
