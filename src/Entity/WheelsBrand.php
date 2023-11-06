<?php

namespace App\Entity;

use App\Repository\WheelsBrandRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: WheelsBrandRepository::class)]
class WheelsBrand
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $slug = null;

    #[ORM\Column(length: 255)]
    private ?string $wheelBrand = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(?string $slug): WheelsBrand
    {
        $this->slug = $slug;
        return $this;
    }

    public function getWheelBrand(): ?string
    {
        return $this->wheelBrand;
    }

    public function setWheelBrand(?string $wheelBrand): WheelsBrand
    {
        $this->wheelBrand = $wheelBrand;
        return $this;
    }
}