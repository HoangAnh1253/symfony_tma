<?php

namespace App\Entity;

use App\Repository\EquipmentRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use JsonSerializable;
use Symfony\Component\Validator\Constraints as Assert;
use Gedmo\Mapping\Annotation as Gedmo;
use Gedmo\SoftDeleteable\Traits\SoftDeleteableEntity;


#[ORM\Entity(repositoryClass: EquipmentRepository::class)]

/**
 * Equipment
 * @Gedmo\SoftDeleteable(fieldName="deletedAt", timeAware=false)
 * 
 */
class Equipment implements JsonSerializable
{
    use SoftDeleteableEntity; 

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    /**
     * @Assert\Length(min = 5)
     * @Assert\NotBlank
     */
    private $name;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
     /**
     * @Assert\Length(min = 5)
     * @Assert\NotBlank
     * 
     */
    private $description;

    #[ORM\ManyToOne(targetEntity: Category::class, inversedBy: 'equipment')]
    private $category;

    #[ORM\OneToMany(mappedBy: 'equipment', targetEntity: Assign::class, cascade: ['remove'])]
    private $assigns;

    #[ORM\Column(type: 'datetime', nullable: true)]
    /**
    * @var \DateTime
    * @ORM\Column(type="datetime")
    */
    private $deleteAt;

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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getCategory(): ?Category
    {
        return $this->category;
    }

    public function setCategory(?Category $category): self
    {
        $this->category = $category;

        return $this;
    }

    public function jsonSerialize()
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'category' => $this->category->jsonSerialize()

        ];
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
            $assign->setEquipment($this);
        }

        return $this;
    }

    public function removeAssign(Assign $assign): self
    {
        if ($this->assigns->removeElement($assign)) {
            // set the owning side to null (unless already changed)
            if ($assign->getEquipment() === $this) {
                $assign->setEquipment(null);
            }
        }

        return $this;
    }

    public function getDeleteAt(): ?\DateTimeInterface
    {
        return $this->deleteAt;
    }

    public function setDeleteAt(?\DateTimeInterface $deleteAt): self
    {
        $this->deleteAt = $deleteAt;

        return $this;
    }
}