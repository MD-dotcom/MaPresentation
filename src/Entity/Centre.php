<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CentreRepository")
 */
class Centre
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     */
    private $voyage;

    /**
     * @ORM\Column(type="text")
     */
    private $benevolat;

    /**
     * @ORM\Column(type="text")
     */
    private $sport;

    /**
     * @ORM\Column(type="text")
     */
    private $cuisine;

    /**
     * @ORM\Column(type="text")
     */
    private $danse;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getVoyage(): ?string
    {
        return $this->voyage;
    }

    public function setVoyage(string $voyage): self
    {
        $this->voyage = $voyage;

        return $this;
    }

    public function getBenevolat(): ?string
    {
        return $this->benevolat;
    }

    public function setBenevolat(string $benevolat): self
    {
        $this->benevolat = $benevolat;

        return $this;
    }

    public function getSport(): ?string
    {
        return $this->sport;
    }

    public function setSport(string $sport): self
    {
        $this->sport = $sport;

        return $this;
    }

    public function getCuisine(): ?string
    {
        return $this->cuisine;
    }

    public function setCuisine(string $cuisine): self
    {
        $this->cuisine = $cuisine;

        return $this;
    }

    public function getDanse(): ?string
    {
        return $this->danse;
    }

    public function setDanse(string $danse): self
    {
        $this->danse = $danse;

        return $this;
    }
}
