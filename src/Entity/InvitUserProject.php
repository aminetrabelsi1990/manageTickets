<?php

namespace App\Entity;

use App\Repository\InvitUserProjectRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use App\CommonInterface\CreatedAtInterface;
use App\CommonInterface\UpdatedAtInterface;
use App\CommonTrait\CreatedAtTrait;
use App\CommonTrait\UpdatedAtTrait;

/**
 * @ORM\Entity(repositoryClass=InvitUserProjectRepository::class)
 * @ORM\HasLifecycleCallbacks()
 */
class InvitUserProject implements CreatedAtInterface, UpdatedAtInterface
{
    use CreatedAtTrait;
    use UpdatedAtTrait;

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $token;

    /**
     * @ORM\ManyToOne(targetEntity=Project::class, inversedBy="invitUserProjects")
     */
    private $project;

    public function __construct()
    {
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getToken(): ?string
    {
        return $this->token;
    }

    public function setToken(string $token): self
    {
        $this->token = $token;

        return $this;
    }

    public function getProject(): ?Project
    {
        return $this->project;
    }

    public function setProject(?Project $project): self
    {
        $this->project = $project;

        return $this;
    }
}
