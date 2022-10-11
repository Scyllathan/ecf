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

    #[ORM\OneToOne(inversedBy: 'clientGrants', cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?Client $client = null;

    #[ORM\OneToMany(mappedBy: 'clientGrants', targetEntity: InstallPerm::class, orphanRemoval: true)]
    private Collection $installPerms;

    public function __construct()
    {
        $this->installPerms = new ArrayCollection();
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

    public function setClient(Client $client): self
    {
        $this->client = $client;

        return $this;
    }

    /**
     * @return Collection<int, InstallPerm>
     */
    public function getInstallPerms(): Collection
    {
        return $this->installPerms;
    }

    public function addInstallPerm(InstallPerm $installPerm): self
    {
        if (!$this->installPerms->contains($installPerm)) {
            $this->installPerms->add($installPerm);
            $installPerm->setClientGrants($this);
        }

        return $this;
    }

    public function removeInstallPerm(InstallPerm $installPerm): self
    {
        if ($this->installPerms->removeElement($installPerm)) {
            // set the owning side to null (unless already changed)
            if ($installPerm->getClientGrants() === $this) {
                $installPerm->setClientGrants(null);
            }
        }

        return $this;
    }
}
