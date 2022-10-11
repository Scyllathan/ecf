<?php

namespace App\Entity;

use App\Repository\ClientRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Uid\Uuid as Uuid;

#[ORM\Entity(repositoryClass: ClientRepository::class)]
class Client
{
    #[ORM\Id]
    #[ORM\Column(type: 'uuid', unique: true)]
    #[ORM\GeneratedValue(strategy: 'CUSTOM')]
    #[ORM\CustomIdGenerator(class: 'doctrine.uuid_generator')]
    private ?Uuid $id = null;

    #[ORM\Column(length: 255, unique: true)]
    private string $name;

    #[ORM\Column]
    private bool $active = false;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $shortDescription = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $fullDescription = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $logoUrl = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $url = null;

    #[ORM\Column(length: 255)]
    private string $dpo;

    #[ORM\Column(length: 255)]
    private string $technicalContact;

    #[ORM\Column(length: 255)]
    private string $commercialContact;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $user = null;

    #[ORM\OneToOne(mappedBy: 'client', cascade: ['persist', 'remove'])]
    private ?ClientGrants $clientGrants = null;

    #[ORM\OneToMany(mappedBy: 'client', targetEntity: Branch::class, orphanRemoval: true)]
    private Collection $branches;

    public function __construct()
    {
        $this->branches = new ArrayCollection();
    }

    public function getId(): ?Uuid
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

    public function isActive(): bool
    {
        return $this->active;
    }

    public function setActive(bool $active): self
    {
        $this->active = $active;

        return $this;
    }

    public function getShortDescription(): ?string
    {
        return $this->shortDescription;
    }

    public function setShortDescription(?string $shortDescription): self
    {
        $this->shortDescription = $shortDescription;

        return $this;
    }

    public function getFullDescription(): ?string
    {
        return $this->fullDescription;
    }

    public function setFullDescription(?string $fullDescription): self
    {
        $this->fullDescription = $fullDescription;

        return $this;
    }

    public function getLogoUrl(): ?string
    {
        return $this->logoUrl;
    }

    public function setLogoUrl(?string $logoUrl): self
    {
        $this->logoUrl = $logoUrl;

        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): self
    {
        $this->url = $url;

        return $this;
    }

    public function getDpo(): string
    {
        return $this->dpo;
    }

    public function setDpo(string $dpo): self
    {
        $this->dpo = $dpo;

        return $this;
    }

    public function getTechnicalContact(): string
    {
        return $this->technicalContact;
    }

    public function setTechnicalContact(string $technicalContact): self
    {
        $this->technicalContact = $technicalContact;

        return $this;
    }

    public function getCommercialContact(): string
    {
        return $this->commercialContact;
    }

    public function setCommercialContact(string $commercialContact): self
    {
        $this->commercialContact = $commercialContact;

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

    public function setClientGrants(ClientGrants $clientGrants): self
    {
        // set the owning side of the relation if necessary
        if ($clientGrants->getClient() !== $this) {
            $clientGrants->setClient($this);
        }

        $this->clientGrants = $clientGrants;

        return $this;
    }

    /**
     * @return Collection<int, Branch>
     */
    public function getBranches(): Collection
    {
        return $this->branches;
    }

    public function addBranch(Branch $branch): self
    {
        if (!$this->branches->contains($branch)) {
            $this->branches->add($branch);
            $branch->setClient($this);
        }

        return $this;
    }

    public function removeBranch(Branch $branch): self
    {
        if ($this->branches->removeElement($branch)) {
            // set the owning side to null (unless already changed)
            if ($branch->getClient() === $this) {
                $branch->setClient(null);
            }
        }

        return $this;
    }
}
