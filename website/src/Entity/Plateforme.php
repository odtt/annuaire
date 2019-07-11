<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PlateformeRepository")
 * @ORM\Table(name="plateformes")
 */
class Plateforme
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @Assert\NotBlank()
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @Assert\NotBlank()
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @Assert\NotBlank()
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $urlLogo;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $url;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $visible;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="plateformes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Categorie", inversedBy="plateformes")
     */
    private $categorie;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getUrlLogo(): ?string
    {
        return $this->urlLogo;
    }

    public function setUrlLogo(?string $urlLogo): self
    {
        $this->urlLogo = $urlLogo;

        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }

    public function getVisible(): ?string
    {
        return $this->visible;
    }

    public function setVisible(string $visible): self
    {
        $this->visible = $visible;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getCategorie(): ?Categorie
    {
        return $this->categorie;
    }

    public function setCategorie(?Categorie $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }
}
