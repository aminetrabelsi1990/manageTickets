<?php

namespace App\Service;

use App\Entity\User;
use Mailjet\Client as Mail;
use Mailjet\Resources;
use Symfony\Contracts\Translation\TranslatorInterface;

class EmailService
{
    protected $translator;

    public function __construct(TranslatorInterface $translator)
    {
        $this->translator = $translator;
    }

    public function sendEmail(/*User $user, string $link*/)
    {
        $subject = "salut";
        $body = "amine";
        //$body = str_replace('%link%', $link, $body);

        $this->send($subject, $body, [
            [
                'email' => "trabelsi.med.amine.info@gmail.com",//$user->getEmail(),
                'name'  => 'amine'//$user->getFirstName() . ' ' . $user->getLastName(),
            ],
        ]);
    }

    public function sendResetPassword(User $user, string $link): void
    {
        $subject = "reset password subject";
        $body =  $link;
        $this->send($subject, $body, [
            [
                'email' => $user->getEmail(),
            ],
        ]);
    }
    
    public function sendResgister(string $email, string $link): void
    {
        $subject = "register";
        $body =  $link;
        $this->send($subject, $body, [
            [
                'email' => $email,
            ],
        ]);
    }

    public function send(string $subject, string $body, array $recipients, array $bccs = [])
    {
        if (empty($_ENV['MJ_APIKEY_PUBLIC']) || empty($_ENV['MJ_APIKEY_PRIVATE'])) return;

        $mj = new Mail(
            $_ENV['MJ_APIKEY_PUBLIC'],
            $_ENV['MJ_APIKEY_PRIVATE'],
            true,
            ['version' => 'v3.1']
        );

        $email = [
            'Messages' => [
                [
                    'From' => [
                        'Email' => $_ENV['MJ_FROM_EMAIL'],
                        'Name' => $_ENV['MJ_FROM_NAME'],
                    ],
                    'To' => $recipients,
                    'Subject' => $subject,
                    'HTMLPart' => $body,
                ],
            ],
        ];

        if (count($bccs)) {
            $email['Messages'][0]['Bcc'] = $bccs;
        }

        try {
            $response = $mj->post(Resources::$Email, ['body' => $email]);
        } catch (\Exception $e) {

        }
    }

}
