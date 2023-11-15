<?php

namespace App\Entity;

use App\Repository\WheelsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: WheelsRepository::class)]
class Wheels
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $wheelsDiameter = null;

    #[ORM\Column]
    private ?int $wheelsHeight = null;

    #[ORM\Column]
    private ?int $wheelsWidth = null;

    #[ORM\OneToMany(mappedBy: 'wheels', targetEntity: WheelsBrand::class, orphanRemoval: true)]
    private Collection $wheelsBrand;

    public function __construct()
    {
        $this->wheelsBrand = new ArrayCollection([]);
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getWheelsDiameter(): ?string
    {
        return $this->wheelsDiameter;
    }

    public function setWheelsDiameter(?string $wheelsDiameter): Wheels
    {
        $this->wheelsDiameter = $wheelsDiameter;
        return $this;
    }

    public function getWheelsHeight(): ?int
    {
        return $this->wheelsHeight;
    }

    public function setWheelsHeight(?int $wheelsHeight): Wheels
    {
        $this->wheelsHeight = $wheelsHeight;
        return $this;
    }

    public function getWheelsWidth(): ?int
    {
        return $this->wheelsWidth;
    }

    public function setWheelsWidth(?int $wheelsWidth): Wheels
    {
        $this->wheelsWidth = $wheelsWidth;
        return $this;
    }

    public function getWheelsBrand(): Collection
    {
        return $this->wheelsBrand;
    }

    public function setWheelsBrand(Collection $wheelsBrand): Wheels
    {
        $this->wheelsBrand = $wheelsBrand;
        return $this;
    }
}