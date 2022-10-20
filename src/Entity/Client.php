<?php

namespace App\Entity;

use App\Repository\ClientRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
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

    #[ORM\OneToMany(mappedBy: 'client', targetEntity: Branch::class, orphanRemoval: true)]
    private Collection $branches;

    #[ORM\OneToMany(mappedBy: 'client', targetEntity: ClientGrants::class, orphanRemoval: true)]
    private Collection $clientGrants;

    #[ORM\OneToMany(mappedBy: 'client', targetEntity: InstallPerm::class, orphanRemoval: true)]
    private Collection $installPerms;

    public function __construct()
    {
        $this->branches = new ArrayCollection();
        $this->clientGrants = new ArrayCollection();
        $this->installPerms = new ArrayCollection();
    }

    public function getId(): ?string
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

    /**
     * @return Collection<int, ClientGrants>
     */
    public function getClientGrants(): Collection
    {
        return $this->clientGrants;
    }

    public function addClientGrant(ClientGrants $clientGrant): self
    {
        if (!$this->clientGrants->contains($clientGrant)) {
            $this->clientGrants->add($clientGrant);
            $clientGrant->setClient($this);
        }

        return $this;
    }

    public function removeClientGrant(ClientGrants $clientGrant): self
    {
        if ($this->clientGrants->removeElement($clientGrant)) {
            // set the owning side to null (unless already changed)
            if ($clientGrant->getClient() === $this) {
                $clientGrant->setClient(null);
            }
        }

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
            $installPerm->setClient($this);
        }

        return $this;
    }

    public function removeInstallPerm(InstallPerm $installPerm): self
    {
        if ($this->installPerms->removeElement($installPerm)) {
            // set the owning side to null (unless already changed)
            if ($installPerm->getClient() === $this) {
                $installPerm->setClient(null);
            }
        }

        return $this;
    }
}
