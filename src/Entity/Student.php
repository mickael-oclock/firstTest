<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\StudentRepository")
 */
class Student
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $firstName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $userDiscord;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $userSlack;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $userGithub;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getUserDiscord(): ?string
    {
        return $this->userDiscord;
    }

    public function setUserDiscord(string $userDiscord): self
    {
        $this->userDiscord = $userDiscord;

        return $this;
    }

    public function getUserSlack(): ?string
    {
        return $this->userSlack;
    }

    public function setUserSlack(string $userSlack): self
    {
        $this->userSlack = $userSlack;

        return $this;
    }

    public function getUserGithub(): ?string
    {
        return $this->userGithub;
    }

    public function setUserGithub(string $userGithub): self
    {
        $this->userGithub = $userGithub;

        return $this;
    }
}
