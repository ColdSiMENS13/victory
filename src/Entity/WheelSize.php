<?php

namespace App\Entity;

use App\Repository\WheelsBrandRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: WheelsBrandRepository::class)]
class WheelSize
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $slug = null;

    #[ORM\Column(length: 255)]
    private ?string $wheelSize = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(?string $slug): WheelSize
    {
        $this->slug = $slug;
        return $this;
    }

    public function getWheelSize(): ?string
    {
        return $this->wheelSize;
    }

    public function setWheelSize(?string $wheelSize): void
    {
        $this->wheelSize = $wheelSize;
    }
}