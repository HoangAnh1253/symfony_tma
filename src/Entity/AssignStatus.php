<?php

namespace App\Entity;

use App\Repository\AssignStatusRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AssignStatusRepository::class)]
class AssignStatus
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $name;

    #[ORM\OneToMany(mappedBy: 'status', targetEntity: Assign::class)]
    private $assigns;

    public function __construct()
    {
        $this->assigns = new ArrayCollection();
    }

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

    /**
     * @return Collection<int, Assign>
     */
    public function getAssigns(): Collection
    {
        return $this->assigns;
    }

    public function addAssign(Assign $assign): self
    {
        if (!$this->assigns->contains($assign)) {
            $this->assigns[] = $assign;
            $assign->setStatus($this);
        }

        return $this;
    }

    public function removeAssign(Assign $assign): self
    {
        if ($this->assigns->removeElement($assign)) {
            // set the owning side to null (unless already changed)
            if ($assign->getStatus() === $this) {
                $assign->setStatus(null);
            }
        }

        return $this;
    }
}
