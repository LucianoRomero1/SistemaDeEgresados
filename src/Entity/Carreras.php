<?php

namespace App\Entity;

use App\Repository\CarrerasRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CarrerasRepository::class)
 */
class Carreras
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
    private $nombreCarrera;

    /**
     * @ORM\OneToMany(targetEntity=Egresado::class, mappedBy="denominacionCarrera")
     */
    private $egresados;

    public function __construct()
    {
        $this->egresados = new ArrayCollection();
    }



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombreCarrera(): ?string
    {
        return $this->nombreCarrera;
    }

    public function setNombreCarrera(string $nombreCarrera): self
    {
        $this->nombreCarrera = $nombreCarrera;

        return $this;
    }

    /**
     * @return Collection|Egresado[]
     */
    public function getEgresados(): Collection
    {
        return $this->egresados;
    }

    public function addEgresado(Egresado $egresado): self
    {
        if (!$this->egresados->contains($egresado)) {
            $this->egresados[] = $egresado;
            $egresado->setDenominacionCarrera($this);
        }

        return $this;
    }

    public function removeEgresado(Egresado $egresado): self
    {
        if ($this->egresados->removeElement($egresado)) {
            // set the owning side to null (unless already changed)
            if ($egresado->getDenominacionCarrera() === $this) {
                $egresado->setDenominacionCarrera(null);
            }
        }

        return $this;
    }


}
