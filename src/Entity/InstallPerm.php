<?php

namespace App\Entity;

use App\Repository\InstallPermRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: InstallPermRepository::class)]
class InstallPerm
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?bool $membersRead = false;

    #[ORM\Column]
    private ?bool $membersWrite = false;

    #[ORM\Column]
    private ?bool $membersAdd = false;

    #[ORM\Column]
    private ?bool $membersProductsAdd = false;

    #[ORM\Column]
    private ?bool $membersPaymentSchedulesRead = false;

    #[ORM\Column]
    private ?bool $membersStatisticRead = false;

    #[ORM\Column]
    private ?bool $membersSubscriptionRead = false;

    #[ORM\Column]
    private ?bool $membersSchedulesRead = false;

    #[ORM\Column]
    private ?bool $membersSchedulesWrite = false;

    #[ORM\Column]
    private ?bool $paymentDayRead = false;

    #[ORM\ManyToOne(inversedBy: 'installPerms')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Client $client = null;

    #[ORM\OneToOne(inversedBy: 'installPerm', cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?Branch $branch = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function isMembersRead(): ?bool
    {
        return $this->membersRead;
    }

    public function setMembersRead(bool $membersRead): self
    {
        $this->membersRead = $membersRead;

        return $this;
    }

    public function isMembersWrite(): ?bool
    {
        return $this->membersWrite;
    }

    public function setMembersWrite(bool $membersWrite): self
    {
        $this->membersWrite = $membersWrite;

        return $this;
    }

    public function isMembersAdd(): ?bool
    {
        return $this->membersAdd;
    }

    public function setMembersAdd(bool $membersAdd): self
    {
        $this->membersAdd = $membersAdd;

        return $this;
    }

    public function isMembersProductsAdd(): ?bool
    {
        return $this->membersProductsAdd;
    }

    public function setMembersProductsAdd(bool $membersProductsAdd): self
    {
        $this->membersProductsAdd = $membersProductsAdd;

        return $this;
    }

    public function isMembersPaymentSchedulesRead(): ?bool
    {
        return $this->membersPaymentSchedulesRead;
    }

    public function setMembersPaymentSchedulesRead(bool $membersPaymentSchedulesRead): self
    {
        $this->membersPaymentSchedulesRead = $membersPaymentSchedulesRead;

        return $this;
    }

    public function isMembersStatisticRead(): ?bool
    {
        return $this->membersStatisticRead;
    }

    public function setMembersStatisticRead(bool $membersStatisticRead): self
    {
        $this->membersStatisticRead = $membersStatisticRead;

        return $this;
    }

    public function isMembersSubscriptionRead(): ?bool
    {
        return $this->membersSubscriptionRead;
    }

    public function setMembersSubscriptionRead(bool $membersSubscriptionRead): self
    {
        $this->membersSubscriptionRead = $membersSubscriptionRead;

        return $this;
    }

    public function isMembersSchedulesRead(): ?bool
    {
        return $this->membersSchedulesRead;
    }

    public function setMembersSchedulesRead(bool $membersSchedulesRead): self
    {
        $this->membersSchedulesRead = $membersSchedulesRead;

        return $this;
    }

    public function isMembersSchedulesWrite(): ?bool
    {
        return $this->membersSchedulesWrite;
    }

    public function setMembersSchedulesWrite(bool $membersSchedulesWrite): self
    {
        $this->membersSchedulesWrite = $membersSchedulesWrite;

        return $this;
    }

    public function isPaymentDayRead(): ?bool
    {
        return $this->paymentDayRead;
    }

    public function setPaymentDayRead(bool $paymentDayRead): self
    {
        $this->paymentDayRead = $paymentDayRead;

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

    public function getBranch(): ?Branch
    {
        return $this->branch;
    }

    public function setBranch(Branch $branch): self
    {
        $this->branch = $branch;

        return $this;
    }
}
