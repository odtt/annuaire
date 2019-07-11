<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FaqRepository")
 * @ORM\Table(name="faqs")
 */
class Faq
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
    private $questions;

    /**
     * @Assert\NotBlank()
     * @ORM\Column(type="text")
     */
    private $reponses;

    /**
     * @ORM\Column(type="boolean")
     */
    private $visible;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuestions(): ?string
    {
        return $this->questions;
    }

    public function setQuestions(string $questions): self
    {
        $this->questions = $questions;

        return $this;
    }

    public function getReponses(): ?string
    {
        return $this->reponses;
    }

    public function setReponses(string $reponses): self
    {
        $this->reponses = $reponses;

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
}
