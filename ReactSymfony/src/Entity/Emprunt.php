<?php

namespace App\Entity;

use App\Repository\EmpruntRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EmpruntRepository::class)
 */
class Emprunt
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $dispo_em;

    /**
     * @ORM\Column(type="date")
     */
    private $date_em;

    /**
     * @ORM\Column(type="integer")
     */
    private $delais_em;

    /**
     * @ORM\ManyToOne(targetEntity=Users::class, inversedBy="emprunts")
     * @ORM\JoinColumn(nullable=false)
     */
    private $users;

    /**
     * @ORM\ManyToOne(targetEntity=Exemplaire::class, inversedBy="emprunts")
     * @ORM\JoinColumn(nullable=false)
     */
    private $exemplaire;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDispoEm(): ?int
    {
        return $this->dispo_em;
    }

    public function setDispoEm(int $dispo_em): self
    {
        $this->dispo_em = $dispo_em;

        return $this;
    }

    public function getDateEm(): ?\DateTimeInterface
    {
        return $this->date_em;
    }

    public function setDateEm(\DateTimeInterface $date_em): self
    {
        $this->date_em = $date_em;

        return $this;
    }

    public function getDelaisEm(): ?int
    {
        return $this->delais_em;
    }

    public function setDelaisEm(int $delais_em): self
    {
        $this->delais_em = $delais_em;

        return $this;
    }

    public function getUsers(): ?Users
    {
        return $this->users;
    }

    public function setUsers(?Users $users): self
    {
        $this->users = $users;

        return $this;
    }

    public function getExemplaire(): ?Exemplaire
    {
        return $this->exemplaire;
    }

    public function setExemplaire(?Exemplaire $exemplaire): self
    {
        $this->exemplaire = $exemplaire;

        return $this;
    }
}
