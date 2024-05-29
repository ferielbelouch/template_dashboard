<?php

namespace App\Entity;

use App\Repository\OperationRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OperationRepository::class)]
class Operation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $chefProjet = null;

    #[ORM\Column(length: 255)]
    private ?string $urlAcces = null;

    #[ORM\Column(length: 255)]
    private ?string $region = null;

    #[ORM\ManyToOne(inversedBy: 'operations')]
    private ?User $user = null;

    /**
     * @var Collection<int, Activation>
     */
    #[ORM\OneToMany(targetEntity: Activation::class, mappedBy: 'operation')]
    private Collection $activations;

    public function __construct()
    {
        $this->activations = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getChefProjet(): ?string
    {
        return $this->chefProjet;
    }

    public function setChefProjet(string $chefProjet): static
    {
        $this->chefProjet = $chefProjet;

        return $this;
    }

    public function getUrlAcces(): ?string
    {
        return $this->urlAcces;
    }

    public function setUrlAcces(string $urlAcces): static
    {
        $this->urlAcces = $urlAcces;

        return $this;
    }

    public function getRegion(): ?string
    {
        return $this->region;
    }

    public function setRegion(string $region): static
    {
        $this->region = $region;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): static
    {
        $this->user = $user;

        return $this;
    }

    /**
     * @return Collection<int, Activation>
     */
    public function getActivations(): Collection
    {
        return $this->activations;
    }

    public function addActivation(Activation $activation): static
    {
        if (!$this->activations->contains($activation)) {
            $this->activations->add($activation);
            $activation->setOperation($this);
        }

        return $this;
    }

    public function removeActivation(Activation $activation): static
    {
        if ($this->activations->removeElement($activation)) {
            // set the owning side to null (unless already changed)
            if ($activation->getOperation() === $this) {
                $activation->setOperation(null);
            }
        }

        return $this;
    }
}
