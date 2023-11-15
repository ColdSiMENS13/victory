<?php

namespace App\Entity;

use App\Repository\WheelsBrandRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: WheelsBrandRepository::class)]
class WheelsBrand
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\ManyToOne(inversedBy: 'wheelsBrand')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Wheels $wheels = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): WheelsBrand
    {
        $this->name = $name;
        return $this;
    }

    public function getWheels(): ?Wheels
    {
        return $this->wheels;
    }

    public function setWheels(?Wheels $wheels): WheelsBrand
    {
        $this->wheels = $wheels;
        return $this;
    }
}