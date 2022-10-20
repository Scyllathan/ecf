<?php

namespace App\Entity;

use App\Repository\BranchRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BranchRepository::class)]
class Branch
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $managerName = null;

    #[ORM\Column(length: 255)]
    private ?string $address = null;

    #[ORM\ManyToOne(inversedBy: 'branches')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Client $client = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $user = null;

    #[ORM\ManyToOne(cascade: ['persist'], inversedBy: 'branch')]
    private ?ClientGrants $clientGrants = null;

    #[ORM\OneToOne(mappedBy: 'branch', cascade: ['persist', 'remove'])]
    private ?InstallPerm $installPerm = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getManagerName(): ?string
    {
        return $this->managerName;
    }

    public function setManagerName(string $managerName): self
    {
        $this->managerName = $managerName;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): self
    {
        $this->address = $address;

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

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getClientGrants(): ?ClientGrants
    {
        return $this->clientGrants;
    }

    public function setClientGrants(?ClientGrants $clientGrants): self
    {
        $this->clientGrants = $clientGrants;

        return $this;
    }

    public function getInstallPerm(): ?InstallPerm
    {
        return $this->installPerm;
    }

    public function setInstallPerm(InstallPerm $installPerm): self
    {
        // set the owning side of the relation if necessary
        if ($installPerm->getBranch() !== $this) {
            $installPerm->setBranch($this);
        }

        $this->installPerm = $installPerm;

        return $this;
    }
}
