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

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $mobile;

    /**
     * @ORM\Column(type="integer")
     */
    private $sellsyId;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $civility;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $videoConfessionalUrl;

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

    public function getMobile(): ?string
    {
        return $this->mobile;
    }

    public function setMobile(?string $mobile): self
    {
        $this->mobile = $mobile;

        return $this;
    }

    public function getSellsyId(): ?int
    {
        return $this->sellsyId;
    }

    public function setSellsyId(int $sellsyId): self
    {
        $this->sellsyId = $sellsyId;

        return $this;
    }

    public function getCivility(): ?string
    {
        return $this->civility;
    }

    public function setCivility(string $civility): self
    {
        $this->civility = $civility;

        return $this;
    }

    public function getVideoConfessionalUrl(): ?string
    {
        return $this->videoConfessionalUrl;
    }

    public function setVideoConfessionalUrl(string $videoConfessionalUrl): self
    {
        $this->videoConfessionalUrl = $videoConfessionalUrl;

        return $this;
    }
}
