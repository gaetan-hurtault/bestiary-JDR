<?php

namespace App\Entity;

use App\Repository\MonsterRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MonsterRepository::class)
 */
class Monster
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $rarete;

    /**
     * @ORM\Column(type="integer")
     */
    private $deMin;

    /**
     * @ORM\Column(type="integer")
     */
    private $deMax;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $rang;

    /**
     * @ORM\ManyToOne(targetEntity=Region::class, inversedBy="monsters")
     */
    private $region;

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

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getRarete(): ?string
    {
        return $this->rarete;
    }

    public function setRarete(string $rarete): self
    {
        $this->rarete = $rarete;

        return $this;
    }

    public function getDeMin(): ?int
    {
        return $this->deMin;
    }

    public function setDeMin(int $deMin): self
    {
        $this->deMin = $deMin;

        return $this;
    }

    public function getDeMax(): ?int
    {
        return $this->deMax;
    }

    public function setDeMax(int $deMax): self
    {
        $this->deMax = $deMax;

        return $this;
    }

    public function getRang(): ?string
    {
        return $this->rang;
    }

    public function setRang(string $rang): self
    {
        $this->rang = $rang;

        return $this;
    }

    public function getRegion(): ?Region
    {
        return $this->region;
    }

    public function setRegion(?Region $region): self
    {
        $this->region = $region;

        return $this;
    }
}
