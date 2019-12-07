<?php

namespace App\Entity;
#https://www.youtube.com/watch?v=1QvHMtOt97I
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProjetRepository")
 */
class Projet
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
     * @ORM\Column(type="text")
     */
    private $technologieUtilisee;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $lien;

//on cree un constructeur qui va etre generer a chaque instanciation de l'entité projet
    public function __construct()
    {
        $this->created_at = new \DateTime();
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

    public function getTechnologieUtilisee(): ?string
    {
        return $this->technologieUtilisee;
    }

    public function setTechnologieUtilisee(string $technologieUtilisee): self
    {
        $this->technologieUtilisee = $technologieUtilisee;

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

    public function getLien(): ?string
    {
        return $this->lien;
    }

    public function setLien(?string $lien): self
    {
        $this->lien = $lien;

        return $this;
    }


}
