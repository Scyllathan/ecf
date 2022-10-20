<?php

namespace App\Entity;

use App\Repository\ClientGrantsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ClientGrantsRepository::class)]
class ClientGrants
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private bool $active = false;

    #[ORM\Column(nullable: true)]
    private array $perms = [];

    #[ORM\ManyToOne(inversedBy: 'clientGrants')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Client $client = null;

    #[ORM\OneToMany(mappedBy: 'clientGrants', targetEntity: Branch::class)]
    private Collection $branch;

    public function __construct()
    {
        $this->installPerms = new ArrayCollection();
        $this->branch = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function isActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(bool $active): self
    {
        $this->active = $active;

        return $this;
    }

    public function getPerms(): array
    {
        return $this->perms;
    }

    public function setPerms(?array $perms): self
    {
        $this->perms = $perms;

        return $this;
    }

    public function getClient(): ?Client
    {
        return $this->client;
    }

    public function setClient(?Client $client): self
    {
        $this->client = $client;

        return $this;
    }

    /**
     * @return Collection<int, Branch>
     */
    public function getBranch(): Collection
    {
        return $this->branch;
    }

    public function addBranch(Branch $branch): self
    {
        if (!$this->branch->contains($branch)) {
            $this->branch->add($branch);
            $branch->setClientGrants($this);
        }

        return $this;
    }

    public function removeBranch(Branch $branch): self
    {
        if ($this->branch->removeElement($branch)) {
            // set the owning side to null (unless already changed)
            if ($branch->getClientGrants() === $this) {
                $branch->setClientGrants(null);
            }
        }

        return $this;
    }
}
