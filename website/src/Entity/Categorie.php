<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CategorieRepository")
 */
class Categorie
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
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $icone;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="boolean")
     */
    private $visible;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Plateforme", mappedBy="categorie")
     */
    private $plateformes;

    public function __construct()
    {
        $this->plateformes = new ArrayCollection();
    }

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

    public function getIcone(): ?string
    {
        return $this->icone;
    }

    public function setIcone(string $icone): self
    {
        $this->icone = $icone;

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

    public function getVisible(): ?bool
    {
        return $this->visible;
    }

    public function setVisible(bool $visible): self
    {
        $this->visible = $visible;

        return $this;
    }

    /**
     * @return Collection|Plateforme[]
     */
    public function getPlateformes(): Collection
    {
        return $this->plateformes;
    }

    public function addPlateforme(Plateforme $plateforme): self
    {
        if (!$this->plateformes->contains($plateforme)) {
            $this->plateformes[] = $plateforme;
            $plateforme->setCategorie($this);
        }

        return $this;
    }

    public function removePlateforme(Plateforme $plateforme): self
    {
        if ($this->plateformes->contains($plateforme)) {
            $this->plateformes->removeElement($plateforme);
            // set the owning side to null (unless already changed)
            if ($plateforme->getCategorie() === $this) {
                $plateforme->setCategorie(null);
            }
        }

        return $this;
    }
}
