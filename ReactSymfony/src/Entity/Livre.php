<?php

namespace App\Entity;

use App\Repository\LivreRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LivreRepository::class)
 */
class Livre
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Users::class, inversedBy="livres")
     * @ORM\JoinColumn(nullable=false)
     */
    private $users;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $titre_l;

    /**
     * @ORM\Column(type="integer")
     */
    private $nombrePages_l;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $edition_l;

    /**
     * @ORM\ManyToOne(targetEntity=Langue::class, inversedBy="livres")
     * @ORM\JoinColumn(nullable=false)
     */
    private $langue;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $auteur;

    /**
     * @ORM\ManyToOne(targetEntity=Exemplaire::class, inversedBy="livres")
     * @ORM\JoinColumn(nullable=false)
     */
    private $exemplaire;

    /**
     * @ORM\ManyToOne(targetEntity=Categorie::class, inversedBy="livres")
     * @ORM\JoinColumn(nullable=false)
     */
    private $categorie;

    /**
     * @ORM\OneToMany(targetEntity=Exemplaire::class, mappedBy="livre", orphanRemoval=true)
     */
    private $exemplaires;

    public function __construct()
    {
        $this->exemplaires = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getTitreL(): ?string
    {
        return $this->titre_l;
    }

    public function setTitreL(string $titre_l): self
    {
        $this->titre_l = $titre_l;

        return $this;
    }

    public function getNombrePagesL(): ?int
    {
        return $this->nombrePages_l;
    }

    public function setNombrePagesL(int $nombrePages_l): self
    {
        $this->nombrePages_l = $nombrePages_l;

        return $this;
    }

    public function getEditionL(): ?string
    {
        return $this->edition_l;
    }

    public function setEditionL(string $edition_l): self
    {
        $this->edition_l = $edition_l;

        return $this;
    }

    public function getLangue(): ?Langue
    {
        return $this->langue;
    }

    public function setLangue(?Langue $langue): self
    {
        $this->langue = $langue;

        return $this;
    }

    public function getAuteur(): ?string
    {
        return $this->auteur;
    }

    public function setAuteur(string $auteur): self
    {
        $this->auteur = $auteur;

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

    public function getCategorie(): ?Categorie
    {
        return $this->categorie;
    }

    public function setCategorie(?Categorie $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * @return Collection|Exemplaire[]
     */
    public function getExemplaires(): Collection
    {
        return $this->exemplaires;
    }

    public function addExemplaire(Exemplaire $exemplaire): self
    {
        if (!$this->exemplaires->contains($exemplaire)) {
            $this->exemplaires[] = $exemplaire;
            $exemplaire->setLivre($this);
        }

        return $this;
    }

    public function removeExemplaire(Exemplaire $exemplaire): self
    {
        if ($this->exemplaires->removeElement($exemplaire)) {
            // set the owning side to null (unless already changed)
            if ($exemplaire->getLivre() === $this) {
                $exemplaire->setLivre(null);
            }
        }

        return $this;
    }
}
